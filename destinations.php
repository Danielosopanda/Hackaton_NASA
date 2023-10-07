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
    <title>Destinations</title>
</head>
<body>
<div class="container">
    <div class="window">
        <h1 class="window__title">Destinations</h1>
    </div>
</div>
</body>
</html>