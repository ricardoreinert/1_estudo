<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<!-- link estilo personalizado-->

<link rel="stylesheet" href="estilo.css">

    <title>Padrao</title>

</head>

<body>

<div class="container">

<div class="row">

<div class="col-3"> 

<form method ="GET" action="">

<fieldset>

<legend><h2>Formulário</h2></legend>


<label for="nome"><p>Qual seu nome:</p></label>

<input type= "text" class="form-control field" name = "nome"><br><br>

<label for="idade"><p>Qual sua idade:</p></label>

<input type= "text" class="form-control field" name = "idade"><br><br>

<br>

<input type= "submit" name="enviar" Value="Enviar">

</fieldset>
</form>
</div>
</div>
</div>
<?php


$conn = new mysqli('localhost','ricardoreinert','C@mp1n@s','bdteste');

// Check connection
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }

// teste de Select no Banco



$query = "SELECT * FROM tab_aluno";

$where = ' Where';


$and = 'id = 1';

$nome = $_GET['nome'];

if(!empty($_GET['nome'])){
  $and .= ' AND nome=' $nome ;
}


if(!empty($_GET['idade'])){
  $and .= ' AND name="idade"';
}


$q = $query.''.$where.''.$and;

echo $q ;





?>


</body>
</html>