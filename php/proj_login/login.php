<?php

// $banco = new mysqli("localhost","root","","blog");

$con = mysqli_connect('localhost','root','','Blog');



function query ($query) {

    global $con;

return mysqli_query($con, $query);
}



?>