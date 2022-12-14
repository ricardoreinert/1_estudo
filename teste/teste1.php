<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>

<body>


<?php


echo '<br>';


$filename = '\flor.jpg';

$fileDir  = realpath(__DIR__.'../../HTML/imagem/');

// $fileDir = __DIR__ .'/';

$file = $fileDir . $filename;



echo $file; // ver qual caminho

echo '<br><br><br>';


//-----------------------------------------

if (file_exists($file))
{
     $b64image = base64_encode(file_get_contents($file));
     echo "<img src = 'data:image/png;base64,$b64image'>";
}



?>







</body>
</html>