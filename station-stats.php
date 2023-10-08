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

    //Mes con mayor numero de viajeros
    $mesMaxViajesQuery = "SELECT MONTH(v.fechaViaje) mesMasVisitas, COUNT(*) numVisitas FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idEstacion = $idStation GROUP BY MONTH(v.fechaViaje) ORDER BY COUNT(*) DESC LIMIT 1;";
    $mesMaxViajes = $conexion->query($mesMaxViajesQuery)->fetch_object();

    echo "Mes con más viajes a este destino: ".$mesMaxViajes->mesMasVisitas;

    //Saldo promedio de usuario que viaja a una estacion
    $saldoPromedioQuery = "SELECT ROUND(AVG(u.creditoUsuario), 2) saldoProm FROM viaje v, estacion e, destino d, usuario u WHERE u.destinoActualUsuario = d.idDestino AND e.idDestino = d.idDestino AND e.idEstacion = $idStation  AND u.estacionActualUsuario = e.nombreEstacion;";
    $saldoPromedio = $conexion->query($saldoPromedioQuery)->fetch_object();

    //Edad promedio de usuarios que se encuentran en una estacion
    $edadPromedioQuery = "SELECT ROUND(AVG(u.edadUsuario), 0) edadProm FROM viaje v, estacion e, destino d, usuario u WHERE u.destinoActualUsuario = d.idDestino AND e.idDestino = d.idDestino AND e.idEstacion = $idStation AND u.estacionActualUsuario = e.nombreEstacion;";
    $edadPromedio = $conexion->query($edadPromedioQuery)->fetch_object();

    echo "Edad promedio de usuarios que visitan ".$destination->nombreDestino.": ".$edadPromedio->edadProm;
?>