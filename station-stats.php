<?php 
    require_once "conexion.php";

    $idStation = 2;
    
    //Estación
    $stationQuery = "SELECT d.nombreDestino, e.nombreEstacion, COUNT(*) FROM viaje v, estacion e, destino d WHERE e.idEstacion = $idStation AND e.idDestino = d.idDestino;";
    $station = $conexion->query($stationQuery)->fetch_object();

    echo $station->nombreDestino;
    echo $station->nombreEstacion;

?>