<?php



$coisas['frutas'] = [1 => 'banana', 2 =>'maça', 3 =>'abacate'];

$coisas['pessoas'] = [1=> 'Joao', 2=> 'Maria', 3=> 'Paulo'];

echo '<pre>';

print_r($coisas['frutas']);

echo '</pre>';

echo '<hr>';

echo '<pre>';

print_r($coisas['frutas'][3]);

echo '</pre>';

// usar in_array para testar expressão


$existe = in_array('abacate', $coisas['frutas']);

if ($existe) {

    echo 'existe a fruta';

} else {

    echo 'não existe a fruta';

};

// array_search

echo '<hr>';

if (array_search('banana', $coisas['frutas']) != null) {

    echo 'exite';
} else {
    echo 'Não exite';
};


?>

