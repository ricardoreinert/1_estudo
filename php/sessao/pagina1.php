<?php   

session_start();

$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];
$n3 = $_POST["numero3"];


$_SESSION["numero1"] = $n1;
$_SESSION["numero2"] = $n2;
$_SESSION["numero3"] = $n3;



?>

<!DOCTYPE html>
<html lang="PT-bR"

<head>

    <meta charset="utf-8"  </head> <body>
    <h1>pagina 1 da Seção</h1>




    <button><a href="pagina2.php">Link pagina 2</a></button>
</p>

    <button><a href="teste.php">Link teste</a></button>



    </body>

</html>