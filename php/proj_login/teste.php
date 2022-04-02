<?php

include("login.php");
include("header.php");

//query("INSERT INTO `tab_usuario`(`nome`, `data`) VALUES ('Renatoo','10/10/2010')");


//$crypto = "bitcoin";

function body(){

    global $crypto;

    echo "a palvra é $crypto";


}


body();



?>