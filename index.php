<?php
$body = "
<main clas='bd-main order-1'>
	<div class='video-container'>
		<video autoplay muted id='home-video'>
			<source src='video/main-background.mp4' type='video/mp4'>
		</video>
		<div class='frasecica'>
			Where the<br>
			<span style='white-space: nowrap'><span class='nombre-segunda_parte'>T</span>alent</span><br> entangles with<br>
			the <span style='white-space: nowrap'><span
			class='nombre-primera_parte'>Q</span>ubi<span class='nombre-tercera_parte'>t</span></span>
		</div>
	</div>
	<div id='QEC' class='container'>
		<h2><span class='nombre-segunda_parte'>&#124;</span><span
			class='nombre-primera_parte'>Q</span><span class='nombre-tercera_parte'>t</span>&#10217; Quantum Error Correction</h2>
		<p class='justify'>Quantum error correction is a set of techniques used to protect the information stored in qubits from errors and decoherence caused by noise.</p>

		<p class='justify'>Quantum computers today have high error rates – around 1 error occurs in 100 operations before failure. For quantum computers to be useful, error rates need to be as low as 1 in a trillion. A huge improvement in performance is needed, however proven progress is already happening in the community.</p>

		<p class='justify'>We are focussed on breaking though this fundamental challenge, by building scalable control systems and fast decoders, and by understanding optimal quantum algorithms for error corrected quantum computers.</p>
	</div>
	<div id='AlgebraicQuantumCircuits' class='container'>
		<h2><span class='nombre-segunda_parte'>&#124;</span><span
			class='nombre-primera_parte'>Q</span><span class='nombre-tercera_parte'>t</span>&#10217; Algebraic Quantum Circuit</h2>
		<p class='justify'>The use of graphical language in quantum computing for the representation of algorithms, although intuitive, is not very useful for different tasks such as the description of quantum circuits in text environments, the calculation of quantum states or the optimization of quantum circuits.</p>
		<p class='justify'>While classical circuits can be represented either by circuit graphs or by Boolean expressions, quantum circuits have until now predominantly been illustrated as circuit graphs because no formal language for quantum circuits that allows algebraic manipulations has so far been accepted.</p>
		<p class='justify'>We proposes a means to represent quantum circuits in a convenient and concise manner, similar to the way Boolean expressions are used in classical circuits. The proposed notation allows the consistent and parameterized description of quantum algorithms, as well as the easy handling of the elements that compose it to achieve powerful optimizations in the number of gates of the circuits.</p>
		<p class='justify'><a href='aqc-qubits.html'>How?</a></p>
	</div>
	<div id='university' class='container'>
		<h2><span class='nombre-segunda_parte'>&#124;</span><span
			class='nombre-primera_parte'>Q</span><span class='nombre-tercera_parte'>t</span>&#10217; University</h2>
		<p class='justify'>We know that the transfer of knowledge is necessary to train new generations, which is why we work with universities on training in this fascinating technological field.</p>
		<p class='justify'>Together with the International University of La Rioja (UNIR) we teach the subject quantum computing for the physics degree and direct several TFMs for the quantum computing master's degree.</p>
	</div>
</main>
";

ob_start();
include('page_layout.php');
$page = ob_get_contents();
ob_end_clean();

echo $page;