<?php 
    session_start();

    require_once "conexion.php";

    $idStation = $_GET['idStation'];
    $idUser = $_SESSION['idUser'];
    $costPerUA = 25000;

    $queryStation = "SELECT * FROM Estacion WHERE idEstacion = $idStation;";
    $station = $conexion->query($queryStation)->fetch_object();
    
    $servicesQuery = "SELECT * FROM Servicio WHERE idEstacion = $idStation;";
    $services = $conexion->query($servicesQuery);

    $userQuery = "SELECT destinoActualUsuario, estacionActualUsuario, creditoUsuario FROM Usuario WHERE idUsuario = $idUser;";
    $user = $conexion->query($userQuery)->fetch_object();
    
    $destinationQuery = "SELECT d.idDestino, d.distanciaDestino, d.nombreDestino FROM Destino d, Estacion e WHERE d.idDestino = e.idDestino AND e.idEstacion = $idStation;";
    $destination = $conexion->query($destinationQuery)->fetch_object();
    
    $travelDistance = abs($destination->distanciaDestino - $user->destinoActualUsuario);
    $travelCost =  0;
    
    if ($travelDistance == 0) {
        $travelCost = 3000;
    } else {
        $travelCost = $travelDistance  * $costPerUA;
    }

    /* Submit form */
    if (isset($_POST['submitFormBtn'])) {
        $createTravelQuery = "INSERT INTO Viaje VALUES (NULL, NOW(), '{$user->estacionActualUsuario}', $idUser, $idStation);";
        $updateUserQuery = "UPDATE Usuario SET creditoUsuario = (creditoUsuario - $travelCost), destinoActualUsuario = $destination->idDestino, estacionActualUsuario = '{$station->nombreEstacion}' WHERE idUsuario = $idUser;";
        $createTravel = $conexion->query($createTravelQuery);
        $updateUser = $conexion->query($updateUserQuery);
        header("Location: destinations.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Stations</title>
</head>
<body>
<div class="container container--station">

    <!-- Background video -->
    <video id="stationBackgroundVideo" src="./Videos/Worm_Hole.mp4" class="video container__background-img container__background-img--dark" autoplay muted loop></video>

    <form class="window form" action="#" method="POST">
        <!-- Title -->
        <h1 class="window__title"><?php echo $station->nombreEstacion; ?></h1>

        <div class="services-container">
            
            <div class="station-details">
                <h4 class="station__detail station__detail--description"><?php echo $station->descripcionEstacion; ?></h4>
                <h4 class="station__detail station__detail--population"><?php 
                    if ($station->poblacionEstacion != 0) {
                        echo "Population: ".number_format($station->poblacionEstacion); 
                    }
                ?></h4>
                <h4 class="station__detail station__detail--type">Station type: <?php 
                    if($station->tipoEstacion == "S") {
                        echo "Surface"; 
                    } else {
                        echo "Orbital";
                    }
                ?></h4>
            </div>

            <!-- Servicios -->
            <div class="station-services">
                <h3 class="station-destination__subtitle">Services</h3>

                <!-- Lista de servicios -->
                <?php 
                    while($servicio = $services->fetch_object()) {
                ?>  
                    <div class="station-service">
                        <p class="station-service-name"><?php echo $servicio->nombreServicio; ?></p>
                    </div>
                <?php 
                    }
                ?>
                
            </div>
    
        </div>
        <a href="javascript:history.back()" class="link link--return">Return to <?php echo $destination->nombreDestino; ?>'s stations</a>
        
        <?php 
            /* If user has enough credits */
            if($travelCost <= $user->creditoUsuario) {
        ?>
            <button class="button button--confirmTravel" id="confirmTravelBtn" type="button">Buy ticket for <?php echo number_format($travelCost); ?> credits</button>
        <?php 
            /* If not */
            } else {
        ?>
            <button class="button button--confirmTravel button--locked" type="button">Not enough credits</button>
        <?php 
            }
        ?>

        <div class="modal-window__background">
            <div class="modal-window">
                <h2 class="modal-window__title">Confirm ticket purchase</h2>
                <h3 class="modal-window__text">Your balance after the transaction will be <?php echo number_format($user->creditoUsuario - $travelCost); ?> credits</h3>
                <div class="modal-window__buttons">
                    <button class="button button--cancel" type="button">Cancel</button>
                    <button id="confirmBuyBtn" class="button button--confirm" type="submit" name="submitFormBtn">Confirm</button>
                </div>
            </div>
        </div>

    </form>
</div>
</body>
<script src="JS/show-modal-window.js"></script>
</html>