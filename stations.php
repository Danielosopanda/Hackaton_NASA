<?php 
    require_once "conexion.php";

    $idDestination = $_GET['idDestination'];

    $destinationQuery = "SELECT * FROM Destino WHERE idDestino = $idDestination;";
    $destination = $conexion->query($destinationQuery)->fetch_object();

    $stationsQuery = "SELECT * FROM Estacion WHERE idDestino = $idDestination;";
    $stations = $conexion->query($stationsQuery);
    
    $attractionsQuery = "SELECT * FROM Atraccion WHERE idDestino = $idDestination;";
    $atracciones = $conexion->query($attractionsQuery);
    
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
                    <a href="station-details.php?idStation=<?php echo $station->idEstacion; ?>" class="link">
                        <div class="station">
                            <h2 class="station__name"><?php echo $station->nombreEstacion; ?></h2>
                            <h3 class="station__description"><?php echo $station->descripcionEstacion; ?></h3>
                        </div>  
                    </a>
                    
                <?php 
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
        <a href="javascript:history.back()" class="link link--return">Return to destinations list</a>
    </div>
</div>
</body>
</html>