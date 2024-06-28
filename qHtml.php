<?php

class qHtml{

	private const ETIQUETAS_SIN_CIERRE = [ 'input', 'br', 'img', 'source' ];
	private array $etiquetasAbiertas = [];

	private static function aplanarArray( array $items, string $separador = ';' ):string {
		$salida = '';
		foreach ( $items as $item ) {
			if ( is_array( $item ) ) {
				$salida .= self::aplanarArray( $item, $separador );
			} else {
				$salida .= "$separador$item";
			}
		}

		return substr( $salida, strlen( $separador ) );
	}

	public function setAttributes( array $attributes = [] ):string {
		$atributos = '';
		foreach ( $attributes as $key => $attribute ) {
			$atributos .= " $key=\"$attribute\"";
		}

		return $atributos;
	}

	public function getOpenTag( string $tag, string $params = '' ):string {
		$piezas     = explode( '.', $tag );
		$etiquetaID = explode( '#', $piezas[0] );
		$etiqueta   = $etiquetaID[0];
		if ( isset( $etiquetaID[1] ) ) {
			$params  .= ' id="'.$etiquetaID[1].'"';
		}
		if ( isset( $piezas[1] ) ) {
			$params .= ' class="'.$piezas[1].'"';
		}
		$this->etiquetasAbiertas [] = $etiqueta;

		if ( $params == '' ) {
			return "<$etiqueta>";
		} else {
			return "<$etiqueta $params>";
		}
	}

	public function getCloseTag():string {
		$etiqueta = array_pop( $this->etiquetasAbiertas );
		if ( in_array( $etiqueta, self::ETIQUETAS_SIN_CIERRE ) ) {
			return '';
		} else {
			return "</$etiqueta>";
		}
	}

	public function getTag( $tag, $content = null, $params = '' ):string {
		$tags = explode( '>', $tag );
		$tag  = trim( $tags[0] );
		unset( $tags[0] );
		$subtag = trim( implode( '>', $tags ) );
		if ( $subtag != '' ) {
			$html = $this->getOpenTag( $tag );
			$html .= $this->getTag( $subtag, $content, $params );
		} else {
			$html = $this->getOpenTag( $tag, $params );
			if ( $content !== null ) {
				$contenido = $content;
				if ( is_array( $content ) ) {
					$contenido = self::aplanarArray( $content, '' );
				}
				$html .= $contenido;
			}
		}
		$html .= $this->getCloseTag();

		return $html;
	}

	public function getInputHidden( $name, $value ):string {
		$options ['name']  = $name;
		$options ['type']  = 'hidden';
		$options ['value'] = $value;

		return $this->getTag( 'input', null, $this->setAttributes($options) );
	}

	public function getIfTag( bool|null $condicion, string $tag, string $content = null, $params = '' ):string {
		if ( $condicion ) {
			return $this->getTag( $tag, $content, $params );
		} else {
			return '';
		}
	}

	public function getArrayTag( $tag, $content = null, $params = '' ):string {
		$html = '';
		if ( is_array( $content ) ) {
			foreach ( $content as $cont ) {
				$html .= $this->getTag( $tag, $cont, $params );
			}
		} else {
			$html .= $this->getTag( $tag, $content, $params );
		}

		return $html;
	}

	public function getButton( string $label, string $url ):string {
		return $this->getTag( 'button > a', $label, $this->setAttributes([
			'href'  => $url,
			'class' => 'btn btn-sm btn-outline-secondary',
		] ));
	}

	public function getImage( string $src, string $alt = '' ):string {
		return $this->getTag( 'img', '', $this->setAttributes([
			'src' => "/images/$src",
			'alt' => $alt,
		]) );
	}

	public function getQT() {
		return $this->getTag( 'ul.qt_logo', [
			$this->getTag( 'li', 'Q' ),
			$this->getTag( 'li', 't' ),
		] );
	}

}
