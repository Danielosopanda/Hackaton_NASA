<?php 

    require_once "conexion.php";

    $user = 1;

    $destinationQuery = "SELECT * FROM Destino ORDER BY ordenDestino;";
    $destinations = $conexion->query($destinationQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Destinations</title>
</head>
<body>
<div class="container container--destinations">
    <!-- Background video -->
    <video src="./Videos/Space_1.mp4" class="video container__background-img" autoplay muted loop></video>
    <div class="window">
        <h1 class="window__title">Destinations</h1>
        <div class="profile">
            
        </div>
        <div class="grid">
            <?php 
                while($destination = $destinations->fetch_object()) {
            ?>
                <a href="stations.php?idDestination=<?php echo $destination->idDestino; ?>" class="link">
                    <div class="grid-option">
                        <img 
                        src="./Images/Destinations/<?php echo $destination->nombreDestino; ?>.png" 
                        alt="<?php echo $destination->nombreDestino; ?>" 
                        class="grid-option__img"
                        >
                        <h2 class="carrousel-option__title"><?php echo $destination->nombreDestino; ?></h2>
                    </div>  
                </a>
            <?php 
                }  
            ?>
        </div>
    </div>
</div>
</body>
</html>