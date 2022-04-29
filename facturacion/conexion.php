<?php

$sername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";


$conection = new mysqli($sername, $username, $password, $dbname);

//verifivamos la conexion a la base de datos.

if ($conection->connect_error) {

    die("Error en la conexion: " . $conection->connect_error);
}

//echo "Conexion exitosa";


 ?>
