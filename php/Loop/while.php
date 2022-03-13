<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<?php
    
    
    
    ?>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


$x = 1;

while ($x <= 10){

    echo "numero é $x <br>";
    $x++;

    /*if ($x = 11){
        break;
    };*/
    
};

// usando while com array

echo "<h2>usando array com while</h2>";

$registro = ['Título notícia 1', 'Título notícia 2','Título notícia 3','Título notícia 4'];

//print_r($registro);

$contar = count($registro);

$x = 0;

while ($x < $contar){

   
    echo $registro[$x];
    echo '<hr>';
    $x++;
}




?>





</body>
</html>