<?php

$conex = mysqli_connect("localhost","root","","deli-house");

if(mysqli_connect_errno()){
    echo "Error al conectar con la base de datos: " . mysqli_connect_error();
}
?>