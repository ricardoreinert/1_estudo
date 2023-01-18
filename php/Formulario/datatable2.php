<!DOCTYPE html>
<html>
<head>
    <title></title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  


<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_ resultados por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Pesquisar: ",
    "oPaginate": {
        "sNext": " Próximo ",
        "sPrevious": " Anterior ",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
        }
    } );
} );
</script>
<style type="text/css">

#example {
    table-layout: fixed !important;
    word-wrap:break-word;
}
	
</style>


</head>
<body>



<div class="container">
	<h5>Nome da Tabela</h5>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr >
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Telefone</th>
        
            </tr>
        </thead>
        <tbody>

            <?php
            $conexao = new mysqli('localhost','ricardoreinert','C@mp1n@s','bdteste');
            $sql = 'SELECT * FROM sicop';
            $query = mysqli_query($conexao,$sql);

            while ($dados = mysqli_fetch_assoc($query)) {
                
                $nome = $dados['id'];
                $sobrenome = $dados['codigo'];
                $mail = $dados['om'];
                $telefone = $dados['tipo-processo'];
                ?>
           <tr>
        	 	
        	 	<td><?php echo $nome ?></td>
                <td><?php echo $sobrenome ?></td>
                <td><?php echo $mail ?></td>
                <td><?php echo $telefone ?></td>
        	 	
        	 	
            </tr>
           <?php } ?>

        </tbody>
        <tfoot>
            <tr>
               <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </tfoot>
    </table>
</div>





</body>
</html>
