<?php

$conn = new mysqli('localhost', 'root', '', 'uptask');

if($conn->connect_error){
    echo $conn->connect_error;
}
/*else{
    echo 'Estamos Conectados';
}*/

$conn->set_charset('utf8');//para agragar el