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
    
<?php


        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","ricardoreinert","C@mp1n@s","bdteste");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM sicop";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_num_rows($result);
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM sicop LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);

?>

<table class="table table-striped">

<thead>

    <tr>

    <th scope="col">CPF</th>

    <th scope="col">Nome</th>

    <th scope="col">Nascimento</th>

    <th scope="col">E-mail</th>
       <th scope="col">Foto</th>

    </tr>

</thead>

<tbody>

<?php

        while($row = mysqli_fetch_array($res_data)){
            //here goes the data

           
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nr']."</td>";
            echo "<td>".$row['codigo']."</td>";
            echo "<td>".$row['om']."</td>";
            echo "<td>".$row['tipo-processo']."</td>";
            echo "</tr>";

        }
        mysqli_close($conn);


    ?>

</tbody>


</table>

</div>
</div>
    
    <ul class="pagination">
        <li><a href="?pageno=1">Primeiro &nbsp;|</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Voltar  &nbsp; </a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">| Seguir&nbsp;|</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Último</a></li>
    </ul>






</body>
</html>