<?php 
    require_once "conexion.php";

    $idStation = 2;
    
    //Estación
    $stationQuery = "SELECT d.nombreDestino, e.nombreEstacion, COUNT(*) FROM viaje v, estacion e, destino d WHERE e.idEstacion = $idStation AND e.idDestino = d.idDestino;";
    $station = $conexion->query($stationQuery)->fetch_object();

    echo $station->nombreDestino;
    echo $station->nombreEstacion;

    //Numero de viajes totales a la estacion
    $numViajesQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idEstacion = $idStation;";
    $numViajes = $conexion->query($numViajesQuery)->fetch_object();

    //Numero de viajes por año
    $numViajesYearQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idEstacion = $idStation AND YEAR(v.fechaViaje) = YEAR(CURDATE());";
    $viajesYear = $conexion->query($numViajesYearQuery)->fetch_object();

    //Numero de viajes ese mes
    $numViajesMonthQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idEstacion = $idStation AND MONTH(v.fechaViaje) = MONTH(CURDATE()) AND YEAR(v.fechaViaje) = YEAR(CURDATE());";
    $viajesMonth = $conexion->query($numViajesMonthQuery)->fetch_object();

    //echo $viajesMonth->numViajes;
?>