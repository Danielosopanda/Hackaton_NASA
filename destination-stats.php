<?php 
    require_once "conexion.php";

    $idDestination = 2;
    
    //Destino
    $destinationQuery = "SELECT d.nombreDestino, COUNT(*) 
    FROM viaje v, estacion e, destino d 
    WHERE d.idDestino = $idDestination AND e.idDestino = d.idDestino AND v.idEstacion = e.idEstacion;";
    $destination = $conexion->query($destinationQuery)->fetch_object();

    echo $destination->nombreDestino;

?>