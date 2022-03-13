<!DOCTYPE html>
<html lang="PT-bR">
<head>

<meta charset="utf-8"
</head>

<body>
<h1>comando do If final</h1>

<?php

$n1 = 6;
$n2 = 8;
$n3 = 7;
$n4 = 3.3;
$media = ($n1+$n2+$n3+$n4)/4;


echo "<p>Nota N1: $n1</>";
echo "<p>Nota N2: $n2</>";
echo "<p>Nota N3: $n3</>";
echo "<p>Nota N4: $n4</>";
echo "<p>Media do Aluno foi: $media</>";


if($media >= 6) {	

echo "<p>Aluno Aprovado</p>";

}else{
	
	echo "<p>Aluno Reprovado</p>";
}




?>





</body>

</html>