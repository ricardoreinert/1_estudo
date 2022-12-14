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
<?php 

 //conexao

/* $conexao = mysqli_connect('localhost','ricardoreinert','C@mp1n@s','bdteste');

$query = "SELECT * FROM login";

$result = mysqli_query($conexao,$query);


while ($var = mysqli_fetch_assoc($result)){

    echo "<br>". $var['username'];


};  */


?>

<?php
        if(array_key_exists('button1', $_POST)) {
            header("Location: cookie.php");
            exit();
        }
        else if(array_key_exists('button2', $_POST)) {
            header("Location: Loop/for.php");
            exit();
        }
       
    ?>
 
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
         
        <input type="submit" name="button2"
                class="button" value="Button2" />
    </form>






</div>
</body>
</html>