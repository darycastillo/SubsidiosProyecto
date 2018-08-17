<?php
$parametro = parse_ini_file("../FuncionesBD/settings.ini.php");
//$conn = new mysqli('localhost', 'root', '', 'uptask');
$conn=new mysqli($parametro['host'],$parametro['user'],$parametro['password'],$parametro['dbname']);
if($conn->connect_error){
    echo $conn->connect_error;
}


$conn->set_charset('utf8');//para agregar  el conjuto de caracteres