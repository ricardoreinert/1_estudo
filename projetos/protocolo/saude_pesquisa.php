<?php include("recursos/nav.php")?>
    
<?php include("recursos/cabecalho.php") ?>

<br><br>


<div style="margin:40px;"> 
    
<h1>PESQUISAR AGENDAMENTOS</h1>
<br><br>
<div style="background:gray;">
<h2>Pesquisar Histórico Completo</h2>
</div>
<form class="row gy-2 gx-3 align-items-center" method="GET" action="saude_resultado.php">
      <div class="col-auto">
        <!--PREC-CP -->
        <label for="preccp">Prec-CP</label>
        <input type="text" class="form-control" id="preccp" name= "preccp" placeholder="somente números" class="bg-danger"> 
      </div>

      <div class="col-auto">
        <!--<label class="E-mail-->
        <label for="email">E-mail</label>
        <div class="input-group">
          <div class="input-group-text">@</div>
          <input type="text" class="form-control" id="email" name="email" placeholder="e-mail do usuário">
        </div>

      </div>

            
      <div class="col-auto">
          <label for="pesquisar"></label>
        <button type="submit" class="btn btn-success">PESQUISAR</button>
      </div>
    
      <br><br><br>
<!-- Pesquisar por Código  -->

<br><br>

<div style="background:gray;">
<h2>Pesquisar apenas agendamento com Código</h2>

</div>
<br><br><br><br>
<form class="row gy-2 gx-3 align-items-center">
      <div class="col-auto">
        <!--<label class="visually-hidden" for="autoSizingInput">Name</label> -->
        <label for="codigo">Código</label>
        <input type="text" class="form-control" id="autoSizingInput" placeholder="insira as 5 letras" class="bg-danger"> 
      </div>

                  
      <div class="col-auto">
          <label for="pesquisar"></label>
        <button type="submit" class="btn btn-success">PESQUISAR</button>
      </div>


    </form>

    <br><br><br>

    <h3>Menu Temporário</h3>


<a href="saude_resultado.php"><button type="button">RESULTADO</button></a>

<div> 
</body>
</html>