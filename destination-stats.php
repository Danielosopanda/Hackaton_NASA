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

    $numViajesQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idDestino = $idDestination;";
    $numViajes = $conexion->query($numViajesQuery)->fetch_object();
    
    echo "Número de viajes totales a este destino: ".$numViajes->numViajes."\n";

    $numViajesYearQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idDestino = $idDestination AND YEAR(v.fechaViaje) = YEAR(CURDATE());";
    $viajesYear = $conexion->query($numViajesYearQuery)->fetch_object();

    echo "Número de viajes de este año a este destino : ".$viajesYear->numViajes;

?>