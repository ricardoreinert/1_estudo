<!DOCTYPE html>
<html lang="PT-bR">
<head>

<meta charset="utf-8"
</head>

<body>
<h1>Loop na Prática</h1>

<?php


$registros = array (
    array ('Título' => 'Título Notícia 1','conteúdo' => 'Conteúdo Notícia 1'),
    array ('Título' => 'Título Notícia 2','conteúdo' => 'Conteúdo Notícia 2'),
    array ('Título' => 'Título Notícia 3','conteúdo' => 'Conteúdo Notícia 3')
);


echo '<pre>';


print_r($registros);


echo '</pre>';

echo '<hr>';

$idx = 0;

while ($idx < count($registros)) {

echo '<h2>'. $registros[$idx]['Título'] . '</h2>';

echo '<p>'. $registros[$idx]['conteúdo'].'</p>';
echo '<hr>';

$idx++;

}






?>



</body>

</html>