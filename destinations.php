<?php 

    require_once "conexion.php";

    $destinationQuery = "SELECT * FROM Destino;";
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
    <h1 class="container__title">Destinations</h1>
    <img src="./Images/carrousel-background.jpg" alt="" class="container__background-img">
    <div class="carrousel">
    <?php 
        while($destination = $destinations->fetch_object()) {
    ?>
        <a href="stations.php?idDestination=<?php echo $destination->idDestino; ?>" class="link">
            <div class="carrousel-option">
                <img 
                src="./Images/Destinations/<?php echo $destination->nombreDestino; ?>.png" 
                alt="<?php echo $destination->nombreDestino; ?>" 
                class="carrousel-option__img"
                >
                <h2 class="carrousel-option__title"><?php echo $destination->nombreDestino; ?></h2>
            </div>  
        </a>
    <?php 
        }  
    ?>
    </div>
</div>
</body>
</html>