<?php 
    session_start();

    require_once "conexion.php";

    $idUser = $_SESSION['idUser'];

    $viajesQuery = "SELECT v.fechaViaje, d.nombreDestino, v.estacionOrigenViaje, e.nombreEstacion FROM Viaje v, Estacion e, destino d, usuario u WHERE e.idDestino = d.idDestino AND v.idEstacion = e.idEstacion AND u.idUsuario = v.idUsuario AND u.idUsuario = $idUser;";
    $viajes = $conexion->query($viajesQuery);
    
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
        <h1 class="window__title">Travel history</h1>

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
                        <h3 class="travel__text travel__date">Date: <?php echo $viaje->fechaViaje; ?></h3>
                        <h3 class="travel__text travel__date">Hour: <?php echo $viaje->fechaViaje; ?></h3>
                    </div>
                </div>  
                                    
            <?php 
                }
            ?>
        </div>

    </div>
</div>
</body>
<script src="JS/show-modal-window.js"></script>
</html>