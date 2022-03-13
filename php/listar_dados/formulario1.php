<?php
include_once('conexao.php');

$sql = "SELECT * from teste";


$result = $conexao->query($sql);




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
   
    <title>Formulário</title>
</head>

<style>

body{
    background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
    color: white;
    text-align: center;

}

.table-bg{
    background-color: rgba(0,0,0,0.3);
    border-radius: 15px 15px 0 0;
}

</style>
<body>

<h1>Tabela do MySQL - BdTeste</h1>
        <div class="col-4 m-5">
                <table class="table text-white table-bg" >
                <thead class ="bg-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">editar</th>
                    
                    </tr>
                </thead>
                <tbody>

                  


                    <?php
                    while ($user_data = mysqli_fetch_assoc($result)){

                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['idade']."</td>";
                        echo "<td>açoes</td>";
                        echo "</tr>";
                    }
                    ?>
        </div>
                    </tbody>
                </table>


    



<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="bootstrap5/js/bootstrap.bundle.min.js" ></script>
</body>
</html>