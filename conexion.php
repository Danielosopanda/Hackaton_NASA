<?php 
    $host = "root";
    $pass = "";
    $server = "localhost";
    $db = "Hackaton_Nasa";

    $conexion = new mysqli($server, $host, $pass, $db);

    if($conexion->error) {
        echo "Error conectando a la base de datos";
    }
?>