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


$conexao = new mysqli('localhost','ricardoreinert','C@mp1n@s','bdteste');

$sql = "SELECT nome FROM tab_aluno where id = 1";

$result = mysqli_query($conexao,$sql);


$row= mysqli_fetch_assoc($result);

echo $rows['nome'];



?>



</body>
</html>