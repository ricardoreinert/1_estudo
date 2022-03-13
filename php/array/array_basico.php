<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// varias formas de atribuir array

//$petala = array(1 => 'margarida',2 => 'rosa',3 => 'cactos');

// também pode ser abaixo

$petala = [1 => 'margarida',2 => 'rosa',3 => 'cactos'];




$coisas = ['flores' => $petala,
'cidade' => array(1 => 'Rio', 2 => 'Brasilia', 3 => 'Fortalieza'),
'paises' => [1 => 'Brasil', 2 => 'Peru', 3 => 'EUA', 4 => 'Noruega']
];



echo '<pre>';

print_r($coisas);

echo '<hr>';

print_r(count($coisas['paises']));

echo '</pre>';




?>
    
</body>
</html>