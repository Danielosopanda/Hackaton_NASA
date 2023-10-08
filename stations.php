<?php 
    session_start();

    require_once "conexion.php";

    $idUser = $_SESSION['idUser'];
    $idDestination = $_GET['idDestination'];

    $destinationQuery = "SELECT * FROM Destino WHERE idDestino = $idDestination;";
    $destination = $conexion->query($destinationQuery)->fetch_object();

    $currentDestinationQuery = "SELECT d.nombreDestino FROM Destino d, Usuario u WHERE u.destinoActualUsuario = d.idDestino AND u.idUsuario = $idUser";
    $currentDestination = $conexion->query($currentDestinationQuery)->fetch_object();

    $stationsQuery = "SELECT * FROM Estacion WHERE idDestino = $idDestination;";
    $stations = $conexion->query($stationsQuery);
    
    $attractionsQuery = "SELECT * FROM Atraccion WHERE idDestino = $idDestination;";
    $atracciones = $conexion->query($attractionsQuery);
    
    $userQuery = "SELECT idUsuario, nombreUsuario, estacionActualUsuario, creditoUsuario FROM Usuario WHERE idUsuario = $idUser";
    $user = $conexion->query($userQuery)->fetch_object();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Stations</title>
</head>
<body>
<div class="container container--station">

    <!-- Background video -->
    <video id="stationBackgroundVideo" src="./Videos/Space_3.mp4" class="video container__background-img container__background-img--dark" autoplay muted loop></video>

    <div class="window">
        
        <!-- Header -->
        <div class="window__header">
            <h1 class="window__title">Stations in <?php echo $destination->nombreDestino; ?></h1>
            <div class="profile">
                <div class="profile__left">
                    <a href="travel-history.php" class="link link--icon"><i class="fa-solid fa-plane-departure icon"></i></a>
                </div>
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

        <div class="stations-container">
            <div class="station-list">
                <?php 
                    while($station = $stations->fetch_object()) {
                        if ($station->nombreEstacion != $user->estacionActualUsuario) {
                ?>
                    <a href="station-details.php?idStation=<?php echo $station->idEstacion; ?>" class="link">
                        <div class="station">
                            <h2 class="station__name"><?php echo $station->nombreEstacion; ?></h2>
                            <h3 class="station__description"><?php echo $station->descripcionEstacion; ?></h3>
                        </div>  
                    </a>
                    
                <?php 
                        }  else {

                ?>
                    <button href="station-details.php?idStation=<?php echo $station->idEstacion; ?>" class="button button--locked">
                        <div class="station station--locked">
                            <h2 class="station__name"><?php echo $station->nombreEstacion; ?></h2>
                            <h3 class="station__description">You are in this station</h3>
                        </div>  
                    </button>
                <?php
                        }
                    }
                ?>
            </div>
            
            <div class="station-destination">
                <h3 class="station-destination__name"><?php echo $destination->nombreDestino; ?></h3>
                <img src="./Images/Destinations/<?php echo $destination->nombreDestino; ?>.png" alt="<?php echo $destination->nombreDestino; ?>" class="img station-destination__img">
                <h4 class="station-destination__detail">Gravity: <?php echo $destination->gravedadDestino; ?>m/s<sup>2</sup></h4>
                <h4 class="station-destination__detail">Average temperature: <?php echo $destination->temperaturaDestino; ?> °C</h4>
                <h4 class="station-destination__detail">Rotation time: <?php echo $destination->tiempoRotacionDestino; ?> terrestrial days</h4>
                <h4 class="station-destination__detail">Traslation time: <?php echo number_format($destination->tiempoTraslacionDestino); ?> terrestrial days</h4>
                <h4 class="station-destination__detail">Distance to the Sun: <?php echo $destination->distanciaDestino; ?> ua</h4>
            </div>

            <!-- Atracciones -->
            <div class="station-destination__attractions">
                <h3 class="station-destination__subtitle">Attractions</h3>
                    <?php 
                        while($atraccion = $atracciones->fetch_object()) {
                    ?>  
                        <div class="station-destination__attraction">
                            <p class="station-destination__attraction-name"><?php echo $atraccion->nombreAtraccion; ?></p>
                            <p class="station-destination__attraction-description"><?php echo $atraccion->descripcionAtraccion; ?></p>
                        </div>
                    <?php 
                        }
                    ?>
                
                </div>
    
        </div>
        <a href="javascript:history.back()" class="link link--return">Return to destinations</a>
    </div>
</div>
</body>
</html>