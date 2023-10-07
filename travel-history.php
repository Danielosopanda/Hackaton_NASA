<?php 
    require_once "conexion.php";

    $idUser = 1;

    $queryViajes = "";
    $viajes = $conexion->query($queryViajes);

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
    <img src="./Images/stations-background.jpg" alt="" class="container__background-img">
    <div class="window">
        <!-- Title -->
        <h1 class="container__title">Stations</h1>

        
    </div>
</div>
</body>
</html>