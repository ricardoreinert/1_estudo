<!DOCTYPE html>
<html lang="PT-bR">
<head>

<meta charset="utf-8"
</head>

<body>
<h1>Formulario Alo Mundo - Formulario Final</h1>


<?php

var_dump($_POST);




?>

<?php


if (isset ($_POST["usuario"])){
	
$nome = $_POST["usuario"];


if ($_POST["genero"]=="masculino"){
	
	echo '<p>'.'vc é homem e seu nome é '. $nome.'</p>';
	
}

if ($_POST["genero"]=="feminino"){
	
	echo '<p>'.'vc é mulher e seu nome é '. $nome.'</p>';
	
}

if ($_POST["genero"]=="outros"){
	
	echo '<p>'.'vc é XXX e seu nome é '. $nome.'</p>';
	
}

}


?>

<button><a href="form_entrada.php"> Voltar </a></button>

</body>

</html>