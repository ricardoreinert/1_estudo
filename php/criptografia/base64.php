
<form method="POST">

<input type ="text" name="password">

<input type="submit" value="gerar">

</form>






<?php


$hash = base64_encode($_POST['password']);

echo 'o nome criptografago em base4 é '. $hash . '</br>';

echo '<p>'.'a decriptografia seria :' . base64_decode($hash).'</p>';

?>