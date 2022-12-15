<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >

<!-- estilo personalizado-->

<link href="estilo5.css" rel="stylesheet" >

<!-- JavaScript Bundle with Popper -->
<script src="bootstrap/js/bootstrap.min.js" ></script>

    <title>Document</title>
</head>
<body>


<?php 






echo '<br>';


$filename = 'perfil.jpg';

$fileDir = __DIR__ .'/';

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