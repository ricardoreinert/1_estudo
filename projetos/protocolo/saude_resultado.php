<?php include("recursos/nav.php")?>
    
<?php include("recursos/cabecalho.php") ?>
    
<h1>RESULTADO DA PESQUISA</h1>

<?php

$preccp = $_GET['preccp'];
$email = $_GET['email'];

$sql = 'SELECT * from teste where `nome `= ' . $preccp;

$conn = new mysqli("localhost","root","","bdteste");


If ($conn->connect_errno){

    echo 'Falha na conecxão com';
    exit();
} else {

    echo '<h3 style="color:blue;">Conexão aberta com sucesso no banco</h3> <p>';
        //var_dump($conn);
}



echo 'seu prec-cp é: '. $preccp .' e seu email é: '. $email;

?>


<br><br><br>
<a href="index.php"><button type="button">INÍCIO</button></a><br><br><br>
<a href="saude_pesquisa.php"><button type="button">PESQUISAR</button></a>

</body>
</html>