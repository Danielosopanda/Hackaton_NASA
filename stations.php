<?php 
    require_once "conexion.php";

    $idDestination = $_GET['idDestination'];
    $destinationQuery = "SELECT * FROM Destino WHERE idDestino = $idDestination;";
    $destination = $conexion->query($destinationQuery)->fetch_object();

    $stationsQuery = "SELECT * FROM Estacion WHERE idDestino = $idDestination;";
    $stations = $conexion->query($stationsQuery);

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
    <video id="stationBackgroundVideo" src="./Videos/Space_3.mp4" class="video container__background-img container__background-img--dark" autoplay muted loop></video>

    <div class="window">
        <!-- Title -->
        <h1 class="window__title">Stations in <?php echo $destination->nombreDestino; ?></h1>

        <div class="stations-container">
            <div class="station-list">
                <?php 
                    while($station = $stations->fetch_object()) {
                ?>
                    <div class="station">
                        
                        <h2 class="station__name"><?php echo $station->nombreEstacion; ?></h2>
                        <h3 class="station__description"><?php echo $station->descripcionEstacion; ?></h3>
                    </div>  
                    
                <?php 
                    }  
                ?>
            </div>
            
            <div class="station-destination">
                <img src="./Images/Destinations/<?php echo $destination->nombreDestino; ?>.png" alt="<?php echo $destination->nombreDestino; ?>" class="img station-destination__img">
                <h3 class="station-destination__name"><?php echo $destination->nombreDestino; ?></h3>
                <h4 class="station-destination__detail">Gravity: <?php echo $destination->gravedadDestino; ?>m/s<sup>2</sup></h4>
                <h4 class="station-destination__detail">Average temperature: <?php echo $destination->temperaturaDestino; ?> °C</h4>
                <h4 class="station-destination__detail">Rotation time: <?php echo $destination->tiempoRotacionDestino; ?> terrestrial days</h4>
                <h4 class="station-destination__detail">Traslation time: <?php echo $destination->tiempoTraslacionDestino; ?> terrestrial days</h4>
                <h4 class="station-destination__detail">Distance to the Sun: <?php echo $destination->distanciaDestino; ?> ua</h4>
            </div>
    


        </div>
        <a href="javascript:history.back()" class="link link--return">Return</a>
    </div>
</div>
</body>
<script src="JS/station-background-speed.js"></script>
</html>