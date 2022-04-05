<?php include("recursos/nav.php")?>
    
<?php include("recursos/cabecalho.php") ?>
    
<h1>PESQUISAR AGENDAMENTOS</h1>

<form class="row gy-2 gx-3 align-items-center">
      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInput">Name</label>
        <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe" class="bg-danger"> 
      </div>
      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
        <div class="input-group">
          <div class="input-group-text">@</div>
          <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
        </div>
      </div>
      <div class="col-auto">
        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
        <select class="form-select" id="autoSizingSelect">
          <option selected>Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="col-auto">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="autoSizingCheck">
          <label class="form-check-label" for="autoSizingCheck">
            Lembre me
          </label>
        </div>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>


<br><br><br>
<a href="index.php"><button type="button">INÍCIO</button></a><br><br><br>
<a href="saude_resultado.php"><button type="button">RESULTADO</button></a>
</body>
</html>