<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$form['pessoas'] = [1 => 'Joao', 2 => 'Maria', 3 => 'Paulo'];

$form['cidades'] = [1 =>'Campinas', 2 => 'Rio', 3 => 'Brasilia'];



echo '<pre>';

print_r($form);

echo '<hr>';

print_r($form['cidades'][2]);


echo '</pre>';

echo '<hr>';

// usar in_array (parametro_a_pesquisar, $array_do_parametro) --> retorna TRUE ou FALSE

$existe = (in_array('Campinas', $form['cidades']));

if ($existe) {

    echo 'cidade está no array';

} else {


    echo 'cidade NAOOO está no array';
};



//usar array_search  (retorna o índice do array pesquisado)

echo '<hr>';

$existe2 = (array_search('Paulo',$form['pessoas']));

if ($existe2 != null){
    echo 'tudo ok o indice é '. $existe2;
} else {
echo 'nao tem no array, então indice é: ', $existe2;
};

// quando errado retora null e certo retorna o indice do paramentro no array 

?>


    
</body>
</html>