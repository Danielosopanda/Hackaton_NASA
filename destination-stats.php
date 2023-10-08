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

    //Numero de viajes totales
    $numViajesQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idDestino = $idDestination;";
    $numViajes = $conexion->query($numViajesQuery)->fetch_object();
    
    //echo $numViajes->numViajes;

    //Numero de viajes por año
    $numViajesYearQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idDestino = $idDestination AND YEAR(v.fechaViaje) = YEAR(CURDATE());";
    $viajesYear = $conexion->query($numViajesYearQuery)->fetch_object();

    //Numero de viajes ese mes
    $numViajesMonthQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idDestino = $idDestination AND MONTH(v.fechaViaje) = MONTH(CURDATE());";
    $viajesMonth = $conexion->query($numViajesMonthQuery)->fetch_object();

    //echo $viajesMonth->numViajes;
?>