<?php 
    require_once "conexion.php";

    $idDestination = $_GET['idDestination'];

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
<div class="container container--destinations">
    <div class="window">
        <h1 class="container__title">Stations</h1>
        <img src="./Images/stations-background.jpg" alt="" class="container__background-img">
        <div class="station-list">
        <?php 
            while($station = $stations->fetch_object()) {
        ?>
            <div class="station">
                
                <h2 class="station__name"><?php echo $station->nombreEstacion; ?></h2>
                <h3 class="station__description"><?php echo $station->nombreEstacion; ?></h3>
            </div>  
            
        <?php 
            }  
        ?>
        </div>
    </div>
</div>
</body>
</html>