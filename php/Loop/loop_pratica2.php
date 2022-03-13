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

$funcionarios = array(
    array('Nome' =>'João', 'Salario' => 2500, 'Data Nascimento' => '10/02/2001'),
    array('Nome' =>'Maria', 'Salario' => 3000, 'Data Nascimento' => '15/05/1977'),
    array('Nome' =>'Júlia', 'Salario' => 2200, 'Data Nascimento' => '109/12/1968'),);

echo '<pre>';
print_r($funcionarios);
echo '</pre>';

echo '<hr>';

foreach ($funcionarios as $idx => $funcionario){

    foreach ($funcionario as $idx2 => $valor){

        echo "<strong>$idx2</strong> - $valor";
        echo '<br>';
    }

echo '<hr>';



};


?>
    
</body>
</html>