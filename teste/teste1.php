
<html>
<head>
<script>
    function popup() {
        var x;
        var r = confirm("Tem certeza que deseja excluir?");
        if (r == true) {
         x = "Apertou OK!";
     } else {
         x = "Apertou Cancela!";
     }
        
     document.getElementById("demo").innerHTML = x;
}
</script>
</head>
<body>
<?php
?>
<button onclick="popup()">Click Aqui</button>
<p id="demo"></p>
</body>
</html>