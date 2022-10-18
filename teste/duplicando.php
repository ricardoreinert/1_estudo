<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duplicando</title>
</head>
<body>
    <H1>Página Duplicando</H1>
<?php

include_once('conexao.php');

$cidade = $_GET["cidade"];

$sql = 'SELECT * from `tab_teste` where `cidade` ='. "'". $cidade . "'";



$result = $conexão->query($sql);



//print_r($result);



?>


<divclass = "m-5">

<table class="table">
<thead>
 <tr>
 <th scope="col">#</th>
 <th scope="col">Nome</th>
 <th scope="col">Idade</th>
 <th scope="col">Cidade</th>
 </tr>
 </thead>
 <tbody>
<?php


 while($user_data=mysqli_fetch_assoc($result)){


 echo "<tr>";
 echo "<td>".$user_data['id']."</td>";
 echo "<td>".$user_data['nome']."</td>";
 echo "<td>".$user_data['idade']."</td>";
 echo "<td>".$user_data['cidade']."</td>";
 echo "</tr>";

 }
?>
 </tbody>


 </table>
</div>
    
</body>
</html>