<!DOCTYPE html>
<html lang="PT-bR">
<head>

<meta charset="utf-8"






</head>

<body>
<h1>Formulario de Entrada</h1>

<form method ="POST" action="form.php">

<fieldset>

<legend><h2>Formulário</h2></legend>


<label for="usuario"><p>Qual seu nome:</p></label>

<input type= "text" class="form-control field" name = "usuario"><br><br>

<label for="generos"><p>Qual seu genero:</p></label>

<input type = "radio" name = "genero" value ="masculino">Masculino<br>
<input type = "radio" name = "genero" value ="feminino">Feminino<br>
<input type = "radio" name = "genero" value ="outros" checked>outros<br>
<br>

<input type= "submit" name="enviar" Value="Enviar">

</fieldset>
</form>




</body>

</html>