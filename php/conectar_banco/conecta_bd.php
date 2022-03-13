<?php
$banco = new mysqli("localhost","root","","blog");

//checar conexao

If ($banco->connect_errno){

    echo 'Falha na conecxão com';
    exit();
} else {

    echo '<h1>Conecção aberta com sucesso no banco</h1> <p>';
    

    var_dump($banco);

}



?>


<!DOCTYPE html>
<html lang="PT-bR">
<head>

<meta charset="utf-8"
</head>

<body>
<h2>Conexao com Banco de Dados</h2>


<?php





?>





</body>

</html>


