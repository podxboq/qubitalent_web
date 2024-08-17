<?php
$pageID = 'privacy';
$body = '
	<div class="container">
		<h1>Aviso legal y Política de Privacidad</h1>
		<h2>Información</h2>
		<p>Esta web es propiedad de <strong>Qubitalent, S.L.U. </strong>en adelante <strong>Qubitalent</strong>.</p>
		<p>N.I.F.: B55393706.</p>
		<p>Mediante esta declaración se informa a los visitantes de <strong>qubitalent.com</strong> (en adelante, la web) de
			la política sobre el tratamiento de los datos personales.</p>
		<p>El
			objetivo de nuestra política de privacidad es respetar al máximo la legislación vigente en protección de datos
			personales. Si usted tiene cualquier duda sobre la confidencialidad o el tratamiento que reciben sus datos, así
			como si desea ejercer alguno de los derechos ARCOP que legalmente le corresponden, puede dirigirse a
			rpgd@qubitalent.com.
		</p>
		<h2>Finalidad de los datos recabados y consentimiento al tratamiento</h2>
		<p>Según lo establecido en el artículo 5 de la LOPD, se informa al USUARIO que los datos recogidos a través del
			formularios de
			contacto, serán tratados con la exclusiva finalidad de atender la solicitud realiza por el usuario.</p>
		<p>Únicamente el titular tendrá acceso a sus datos, y bajo ningún concepto, estos datos serán cedidos, compartidos,
			transferidos, ni vendidos a ningún tercero.</p>
		<p>La aceptación de la política de privacidad, mediante el procedimiento establecido, se entenderá a todos los
			efectos como la prestación de CONSENTIMIENTO INEQUÍVOCO (del artículo 6 de la LOPD) del USUARIO al tratamiento de
			los datos de carácter personal.</p>
		<h2>Cumplimiento de la normativa de aplicación</h2>
		<p>LA WEB cumple con las directrices de la Ley Orgánica 15/1999 de 13 de diciembre de Protección de Datos de
			Carácter Personal, el Real Decreto 1720/2007 de 21 de diciembre por el que se aprueba el Reglamento de desarrollo
			de dicha Ley Orgánica, así como el Reglamento (UE) 2016/679 y demás normativa vigente y de aplicación en cada
			momento, velando por garantizar un correcto uso y tratamiento de
			los datos personales del usuario.</p>
		<h2>Medidas de seguridad</h2>
		<p>Tenemos implantadas las medidas de seguridad de índole técnica y organizativas necesarias
			para garantizar la seguridad de sus datos de carácter personal y evitar su alteración, pérdida y tratamiento y/o
			acceso no autorizado, habida cuenta del estado de la tecnología, la naturaleza de los datos almacenados y los
			riesgos a que están expuestos, ya provengan de la acción humana o del medio físico o natural. Todo ello de
			conformidad con lo previsto en el Art. 9 de la LOPD y el Título VIII del RLOPD.</p>
		<h2>¿Cómo hemos obtenido tus datos?</h2>
		<p>Los datos personales que tratamos proceden del formulario de contacto de nuestra página web que usted mismo ha completado con la información que solicitamos.
Las categorías de datos que se tratan son:</p>
<ul><li>Email.</li><li>Nombre y Apellidos.</li></ul>
	</div>';
ob_start();
include("page_layout.php");
$page = ob_get_contents();
ob_end_clean();

echo $page;