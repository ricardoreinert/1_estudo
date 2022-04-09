<?php include("recursos/nav.php")?>
    
<?php include("recursos/cabecalho.php") ?>
    
<h1>RESULTADO DA PESQUISA</h1>

<?php

$preccp = $_GET['preccp'];
$email = $_GET['email'];

$sql = 'SELECT * from teste where `id`='. $preccp;

$conn = new mysqli("localhost","ricardoreinert","C@mp1n@s","bdteste");

$result = $conn->query($sql);



If ($conn->connect_errno){

    echo 'Falha na conecxão com';
    exit();
} 

?>

<hr>


<!--tabela-->
<br><br><br>
<div class = "m-5"> 

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Profissão</th>
            </tr>
        </thead>
        <tbody>
           <?php
                while($user_data=mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['idade']."</td>";
                   


                }
           ?>
        </tbody>

        </table>
</div>


<br>

<p style="text-align:center; "><a href="saude_pesquisa.php"><img src="imagem/btn_voltar.jpg " style="width:80px"></a><p>

</body>
</html>