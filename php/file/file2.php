<?php

/*
echo '<pre>';

var_dump($_FILES['imagem']);

echo '</pre>';
*/

$filename = $_FILES['imagem']['name'];

$destination = __DIR__ .'/uploads/'.$filemame;

move_uploaded_file($Files['imagem']['tmp_name'], $destination);

echo '<br>';

echo '<pre>';
print_r($Files);
echo '</pre>';

?>


<a href ="file.php">RETORNAR</a>