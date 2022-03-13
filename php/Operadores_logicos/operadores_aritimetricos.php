<!DOCTYPE html>
<html lang="PT-bR">
<head>

<meta charset="utf-8"
</head>

<body>
<h1>operadoradores aritimétricos</h1>

<?php
$var1 = 7;
$var2 = 8;
$total = 0;
$total = $var1 * $var2;
$bol = true;
$str = "textinho";
$int = 12;



        echo "<h3> $var1 x 1 = ".($var1*1)."</h3>";
		echo "<h3> $var1 x 2 = ".($var1*2)."</h3>";
		echo "<h3> $var1 x 3 = ".($var1*3)."</h3>";
		echo '<h3> '.$var1 .' * '.$var2 .' = '.($total) .'</h3>';
		echo '<p>essa varivel boleana tem seguinte tipo e valor = '.gettype($bol).', '.$bol. ' mais texto</p>';
		
		
		echo '<p>essa varivel string tem seguinte tipo e valor = '.gettype($str).', '.$str. ' mais texto</p>';
		
	     echo '<p>essa varivel inteiro tem seguinte tipo e valor = '.gettype($int).', '.$int. ' mais texto</p>';
?>


<p>Este é código html com codigo PHP <?php echo "numero da variavel é $var1" ?> e assim termina o codigo html </p>



</body>

</html>