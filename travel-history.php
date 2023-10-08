<?php 
    session_start();

    require_once "conexion.php";

    $idUser = $_SESSION['idUser'];

    $viajesQuery = "SELECT v.fechaViaje, d.nombreDestino, v.estacionOrigenViaje, e.nombreEstacion FROM Viaje v, Estacion e, destino d, usuario u WHERE e.idDestino = d.idDestino AND v.idEstacion = e.idEstacion AND u.idUsuario = v.idUsuario AND u.idUsuario = $idUser ORDER BY v.fechaViaje DESC;";
    $viajes = $conexion->query($viajesQuery);

    $getUserQuery = "SELECT idUsuario, nombreUsuario, estacionActualUsuario, creditoUsuario FROM Usuario WHERE idUsuario = $idUser";
    $user = $conexion->query($getUserQuery)->fetch_object();

    $destinationQuery = "SELECT * FROM Destino ORDER BY ordenDestino;";
    $destinations = $conexion->query($destinationQuery);
    
    $currentDestinationQuery = "SELECT d.nombreDestino FROM Destino d, Usuario u WHERE u.destinoActualUsuario = d.idDestino AND u.idUsuario = $idUser";
    $currentDestination = $conexion->query($currentDestinationQuery)->fetch_object();

    $extraYears = 200;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    
    <title>Travel history</title>
</head>
<body>
<div class="container container--station">

    <!-- Background video -->
    <video id="stationBackgroundVideo" src="./Videos/Worm_Hole.mp4" class="video container__background-img container__background-img--dark" autoplay muted loop></video>

    <div class="window">
        <!-- Header -->
        <div class="window__header">
            <h1 class="window__title">Travel history</h1>
            <div class="profile">
                <div class="profile__center">
                    <h2 class="profile__name"><?php echo $user->nombreUsuario; ?></h2>
                    <p class="profile__station">Current station: <?php echo $user->estacionActualUsuario; ?>, <?php echo $currentDestination->nombreDestino; ?></p>
                    <p class="profile__balance">Balance: <?php echo number_format($user->creditoUsuario); ?> credits</p>
                </div>
                <div class="profile__right">
                    <img src="./Images/Profile_Pictures/<?php echo $user->idUsuario; ?>.jpeg" alt="Profile Picture" class="profile__img">
                </div>
            </div>
        </div>

        <div class="travel-container">
            <?php 
                while($viaje = $viajes->fetch_object()) {
                            
            ?>

                <div class="travel">
                    <div class="travel__left">
                        <h2 class="travel__title travel__destination"><?php echo $viaje->nombreDestino; ?></h2>
                        <h3 class="travel__text travel__station">Departure station: <?php echo $viaje->nombreEstacion; ?></h3>
                        <h3 class="travel__text travel__date">Arrival station: <?php echo $viaje->estacionOrigenViaje; ?></h3>
                    </div>
                    <div class="travel__right">
                        <h3 class="travel__text travel__date">Date: <?php 
                             
                            $date = $viaje->fechaViaje; 
                            $year = substr($date, 0, 4) + $extraYears;
                            $month = substr($date, 5, 2);
                            $day = substr($date, 8, 2);
                            echo $newDate = $day."/".$month."/".$year;
                        
                            ?>
                        </h3>
                        <h3 class="travel__text travel__date">Hour: <?php 
                             
                             $date = $viaje->fechaViaje; 
                             $hour = substr($date, 11, 2);
                             $minute = substr($date, 14, 2);
                             echo $newHour = $hour.":".$minute;
                         
                             ?></h3>
                    </div>
                </div>  
                                    
            <?php 
                }
            ?>
        </div>

        <a href="javascript:history.back()" class="link link--return">Return to destinations</a>
    </div>
</div>
</body>
<script src="JS/show-modal-window.js"></script>
</html>