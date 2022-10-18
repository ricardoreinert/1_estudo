<?php

$dbHost = 'localhost';
$dbUsername = 'administrador';
$dbPassword = 'C@mp1n@s';
$dbName = 'bdTeste';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

/*if ($conexao ->connect_errno){

    echo "Erro de Conexão";
} else{

    echo "Sucesso na Conexão";
}
*/


?>