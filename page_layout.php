<?php
/**
 * @var string $body
 * @var string $pageID
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description"
	      content="Quantum computing research. Quantum error correction. Quantum cryptography."/>
	<meta name="robots" content="all"/>
	<meta property="og:locale" content="en_EN"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title"
	      content="Qubitalent &#124;+&#10217; Quantum computing"/>
	<meta property="og:description"
	      content="Quantum computing research. Quantum error correction. Quantum cryptography."/>
	<meta property="og:url" content="https://www.qubitalent.com/"/>
	<meta property="og:site_name" content="Qubitalent"/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:description"
	      content="Quantum computing research. Quantum error correction. Quantum cryptography."/>
	<meta name="twitter:title"
	      content="Qubitalent &#124;+&#10217; Quantum computing"/>
	<title>Qubitalent &#124;+&#10217; Quantum computing</title>
	<link rel="canonical" href="https://www.qubitalent.com/"/>
	<link rel="icon" type="image/x-icon" href="images/logo.svg">
	<link rel='stylesheet' href='css/bootstrap.min.css' type='text/css'/>
	<link rel='stylesheet' href='css/main.css' type='text/css' media='all'/>
	<script src="js/bootstrap.min.js"></script>
	<?php if($pageID == 'index'): ?>
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<script>
        function onSubmit(token) {
            document.getElementById("contactForm").submit();
        }
		</script>
	<?php endif; ?>
</head>
<body>
	<?php include('header_layout.php'); ?>
		<?= $body ?>
	<?php include('footer_layout.php'); ?>
</body>
</html>