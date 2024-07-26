<?php

require_once( 'qHtml.php' );
$html   = new qHtml();
$pageId = 'index';
$body   = $html->getTag( 'div.container position-relative > div.video-container', [
	$html->getTag( 'video#home-video', $html->getTag( 'source', null,
		'src="video/main-background.mp4" type="video/mp4"' ), 'autoplay loop muted' ),
	$html->getTag( 'div.frasecica',
		'Where the<br>
			<span style="white-space: nowrap"><span class="nombre-segunda_parte">T</span>alent</span><br> entangles with<br>
			the <span style="white-space: nowrap"><span
					class="nombre-primera_parte">Q</span>ubi<span class="nombre-tercera_parte">t</span></span>' ),
] );
$body .= $html->getTag('div.clearfix');

$body   .= $html->getTag( 'div.container', [
	$html->getTag( 'h1', 'What is our main area of research?' ),
	$html->getTag( 'h2', $html->getQT() . ' Quantum Error Correction' ),
	$html->getTag( 'div.card shadow-sm', [
		$html->getImage( 'Quantum_Error_Correction_On_Three_Quibits_with_no_Ancilla.png' ),
		$html->getTag( 'div.card-body', [
			$html->getTag( 'p', 'Quantum error correction is a set of techniques used to protect the information stored in qubits from errors and decoherence caused by noise.' ),
			$html->getTag( 'p', 'Quantum computers today have high error rates – around 1 error occurs in 100 operations before failure. For quantum computers to be useful, error rates need to be as low as 1 in a trillion. A huge improvement in performance is needed, however proven progress is already happening in the community.' ),
			$html->getTag( 'p', 'We are focussed on breaking though this fundamental challenge, by building scalable control systems and fast decoders, and by understanding optimal quantum algorithms for error corrected quantum computers.' ),
		] ),
	] ),
	$html->getTag( 'h2', $html->getQT() . ' Algebraic Quantum Circuit' ),
	$html->getTag( 'div.card shadow-sm', [
		$html->getImage( 'teleportation_algebraic_circuit.png' ),
		$html->getTag( 'div.card-body', [
		$html->getTag( 'p', 'The use of graphical language in quantum computing for the representation of algorithms, although intuitive, is not very useful for different tasks such as the description of quantum circuits in text environments, the calculation of quantum states or the optimization of quantum circuits.' ),
		$html->getTag( 'p', 'While classical circuits can be represented either by circuit graphs or by Boolean expressions, quantum circuits have until now predominantly been illustrated as circuit graphs because no formal language for quantum circuits that allows algebraic manipulations has so far been accepted.' ),
		$html->getTag( 'p', 'We proposes a means to represent quantum circuits in a convenient and concise manner, similar to the way Boolean expressions are used in classical circuits. The proposed notation allows the consistent and parameterized description of quantum algorithms, as well as the easy handling of the elements that compose it to achieve powerful optimizations in the number of gates of the circuits.' ),
	] ),
	] ),
	$html->getTag( 'h2', $html->getQT() . ' University' ),
	$html->getTag( 'div.card shadow-sm', [
		$html->getImage( 'Blackboard_bold_on_a_blackboard.jpg' ),
		$html->getTag( 'div.card-body', [
		$html->getTag( 'p', 'We know that the transfer of knowledge is necessary to train new generations, which is why we work with universities on training in this fascinating technological field.' ),
		$html->getTag( 'p', 'Together with the International University of La Rioja (UNIR) we teach the subject quantum computing for the physics degree and direct several TFMs for the quantum computing master\'s degree.' ),
	] ),
	] ),
] );

$body .= $html->getTag( 'div.container', [
	$html->getTag( 'h1', 'Contact' ),
	$html->getTag( 'div.row row-cols-1 row-cols-md-2 g-3', $html->getArrayTag( 'div.col-md-6', [
		'Contact us and we will respond as soon as possible.',
		$html->getTag( 'form#contactForm.row g-3', [
			$html->getTag( 'label,form-label', 'Name', 'for="name"' ),
			$html->getTag( 'input#name.form-control', null, 'type="text" name="name" required' ),
			$html->getTag( 'label.form-label', 'Email', 'for="email"' ),
			$html->getTag( 'input#email.form-control', null, 'type="email" name="email" required' ),
			$html->getTag( 'label.form-label', 'What do you want?', 'for="content"' ),
			$html->getTag( 'textarea#content.form-control', null, 'name="content" required' ),
			$html->getTag( 'div.form-check', [
				$html->getTag( 'input#gridCheck.form-check-input', null, 'type="checkbox" required' ),
				$html->getTag( 'label.form-check-label', 'I accept the processing of my personal data for the purposes described in the <a href="privacy">Privacy Policy</a>.', 'for="gridCheck"' ),
			] ),
			$html->getTag( 'button.g-recaptcha btn btn-outline-dark', 'Send', 'data-sitekey="6LdfovgpAAAAABmCHaYy8qsy2taBisZFXMM4Qarw" data-callback="onSubmit" data-action="submit"' ),
		], 'action="contact" method="post"' ),
	] ) ),
] );

ob_start();
include( "page_layout.php" );
$page = ob_get_contents();
ob_end_clean();

echo $page;