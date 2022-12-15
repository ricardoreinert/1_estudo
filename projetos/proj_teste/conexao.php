<?php
$banco = new mysqli("localhost","ricardoreinert","C@mp1n@s","blog");
//checar conexao
If ($banco->connect_errno){
    echo 'Falha na conecxão com';
    exit();
} 


?>