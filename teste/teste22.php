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
<!-- link estilo personalizado-->>

<link rel="stylesheet" href="estilo.css">
  

    <title>Teste 2</title>
</head>
<body>

  

    <?php 

   
$conn = new mysqli('localhost','ricardoreinert','C@mp1n@s','bdteste');

if ($conn->connect_errno){

    echo 'conexao com erro '. mysqli_connect_error();

} else {

    echo "conexao com SUCESSO!";
}

?>



<div class="container">
    <div class="col-md-4">
<form action="" method="POST">
<div class="col-auto">
<div class="form-group" >
<label for="username"> Nome de Usuário</label>
<input type="text" name="username" class="form-control form-control">
</div>
<p></p>
<div class="form-group" >
<label for="password"> Senha</label>
<input type="password" name="password" class="form-control form-control">
</div>

<div class="form-group">
<button type ="submit" name="submit" class="btn btn-primary">ENVIAR</button>

</div>



</div>
</form>

</div>
</div>

<?php

if (isset($_POST['submit'])){


    if(empty($_POST['username'])){
        echo 'campo usuario está vazio';
    }

    if (empty($_POST['password'])){

        echo 'campo senha está vazio';

    }

    $username = $_POST['username'];
    $password = $_POST['password'];
   
    //$sql = "SELECT * FROM login WHERE username='$username' and password ='$password' LIMIT 1";

    $sql = 'SELECT * FROM login WHERE username ='. "'". $username . "'".'&& password = '. "'". $password. "'".'LIMIT 1';
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0){
        echo 'já exiete usuario ou senha igual';

    } else {

        echo 'pode cadastrar normalmente';
    };

}

?>

</body>
</html>