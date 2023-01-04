<?php



$arquivo = $_FILES['imagem']['name'];

$destination = __DIR__ ."/uploads/". $arquivo;

move_uploaded_file($_FILES["imagem"]["tmp_name"], $destination);

echo '<br>';

echo '<pre>';
print_r($destination);
echo '</pre>';

?>



<a href ="file.php">RETORNAR</a>