<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!--Icones-->
<link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">

<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<link href="estilo.css" rel="stylesheet">
    <title>Projeto Teste</title>
</head>
<body>
    


<?php

include_once('conexao.php');

$sql = "SELECT * from tab_usuario";

$result = $banco->query($sql);

?>

<!--inicio da tabela -->

<div class="row justify-content-center">

<div class="col-4">

        <table class="table table-striped">

        <thead>

            <tr>

            <th scope="col">Id</th>

            <th scope="col">Nome</th>

            <th scope="col">Data</th>

           

            </tr>

        </thead>

        <tbody>


           <?php
                while($user_data=mysqli_fetch_assoc($result)){


                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['data']."</td>";
                       
                       echo "<td><a class='btn btn-secondary btn-lg' href='/index.php/relatorios/relatorio-completo-de-pessoas/submission-view/".$user_data['id']."'>Perfil</a></td>";

                    echo "</tr>";

                   
                }
           ?>
        </tbody>


        </table>
        </div>
     </div>
 
 
 </body>
</html>