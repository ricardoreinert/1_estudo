<?php
session_start()


?>

<!DOCTYPE html>
<html lang="PT-bR">

<head>

    <meta charset="utf-8"  </head> <body>
    <h1>pagina 2
    
    </h1>



    <?php

echo '<h2> o prieiro numero é ' . $_SESSION["numero1"]. '</h2>';
echo '<h2> o segundo numero é ' . $_SESSION["numero2"]. '</h2>';
echo '<h2> o terceiro numero é ' . $_SESSION["numero3"]. '</h2>';



    ?>

<button><a href="pagina2.php">Link pagina 2</a></button></p>

    <button><a href="teste.php">Link teste</a></button>

    </body>

</html>