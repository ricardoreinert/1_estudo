
<form method="POST">

<input type = "text" name = "password">
</br>

<input type = "submit" value = "Gerar">






</form>


<?php



$hash = md5($_POST['password']);
$hash2 = sha1($_POST['password']);

echo 'Seu código é: '. $hash. ' e sua crioptografia em SHA1 é :' . $hash2 .'</br>';

echo '<p> O nome decriptografado é '. $hash. '</p>';

echo '<br> A criptografia personalizada é :' . sha1(md5($_POST['password'])) . '</br>';






?>