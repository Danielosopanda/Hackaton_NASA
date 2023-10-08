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
    
    echo "Número de viajes totales a este destino: ".$numViajes->numViajes."\n";

    //Numero de viajes por año
    $numViajesYearQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idDestino = $idDestination AND YEAR(v.fechaViaje) = YEAR(CURDATE());";
    $viajesYear = $conexion->query($numViajesYearQuery)->fetch_object();

    echo "Número de viajes de este año a este destino: ".$viajesYear->numViajes;

    //Numero de viajes ese mes
    $numViajesMonthQuery = "SELECT COUNT(*) numViajes FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idDestino = $idDestination AND MONTH(v.fechaViaje) = MONTH(CURDATE()) AND YEAR(v.fechaViaje) = YEAR(CURDATE());";
    $viajesMonth = $conexion->query($numViajesMonthQuery)->fetch_object();

    //echo $viajesMonth->numViajes;

    //Mes con mayor numero de viajeros
    $mesMaxViajesQuery = "SELECT MONTH(v.fechaViaje) mesMasVisitas, COUNT(*) numVisitas FROM viaje v, estacion e, destino d WHERE e.idEstacion = v.idEstacion AND e.idDestino = d.idDestino AND e.idDestino = $idDestination GROUP BY MONTH(v.fechaViaje) ORDER BY COUNT(*) DESC LIMIT 1;";
    $mesMaxViajes = $conexion->query($mesMaxViajesQuery)->fetch_object();

    echo "Mes con más viajes a este destino: ".$mesMaxViajes->mesMasVisitas;

    //Saldo promedio de usuario que viaja a un destino
    $saldoPromedioQuery = "SELECT ROUND(AVG(u.creditoUsuario), 2) saldoProm FROM viaje v, estacion e, destino d, usuario u WHERE u.destinoActualUsuario = d.idDestino AND e.idDestino = d.idDestino AND e.idDestino = $idDestination;";
    $saldoPromedio = $conexion->query($saldoPromedioQuery)->fetch_object();

    echo "Saldo promedio de usuarios que visitan ".$destination->nombreDestino.": ".$saldoPromedio->saldoProm;
?>