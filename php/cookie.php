<?php


$name = "somename"; // não pode ter espaço no nome
$value = time() + (60*60*24*7);
$expire = "10000" ; // equivale a multp 60 seg por 1 h por 1 dia por 1 semana

setcookie($name,$value,$expire);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
mudou de página


</body>
</html>