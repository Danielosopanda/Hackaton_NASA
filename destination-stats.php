<?php 
    require_once "conexion.php";

    $idDestination = 2;
    
    //Destino
    $destinationQuery = "SELECT d.nombreDestino, COUNT(*) 
    FROM viaje v, estacion e, destino d 
    WHERE d.idDestino = $idDestination AND e.idDestino = d.idDestino AND v.idEstacion = e.idEstacion;";
    $destination = $conexion->query($destinationQuery)->fetch_object();

    $destinationName = $destination->nombreDestino;
    // echo $destinationName;

    $numViajesQuery = "SELECT COUNT(*) FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = '{$destinationName}';";
    $numViajes = $conexion->query($numViajesQuery)->fetch_object();
    echo $numViajes;
?>