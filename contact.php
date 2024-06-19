<?php
$pageID = 'contact';
$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

$mensaje = "$name dice: $content y quiere respuesta a $email";
mail('qubitalent@qubitalent.com', 'Mensaje desde la web', $mensaje);

$body = '
<div class="card text-center">
  <div class="card-header">
    Email send
  </div>
  <div class="card-body">
    <h5 class="card-title">Thank you so much.</h5>
    <p class="card-text">Your message has been sent successfully.</p>
    <a href="/" class="btn btn-outline-dark">Go back</a>
  </div>
  <div class="card-footer text-body-secondary">
    We respond you as soon as possible.
  </div>
</div>
';

ob_start();
include("page_layout.php");
$page = ob_get_contents();
ob_end_clean();

echo $page;
