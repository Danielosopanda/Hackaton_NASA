<?php 
    session_start();

    require_once "conexion.php";

    $idUser = $_SESSION['idUser'];

    $getUserQuery = "SELECT idUsuario, nombreUsuario, estacionActualUsuario, creditoUsuario FROM Usuario WHERE idUsuario = $idUser";
    $user = $conexion->query($getUserQuery)->fetch_object();

    $destinationQuery = "SELECT * FROM Destino ORDER BY ordenDestino;";
    $destinations = $conexion->query($destinationQuery);
    
    $currentDestinationQuery = "SELECT d.nombreDestino FROM Destino d, Usuario u WHERE u.destinoActualUsuario = d.idDestino AND u.idUsuario = $idUser";
    $currentDestination = $conexion->query($currentDestinationQuery)->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Destinations</title>
</head>
<body>
<div class="container container--destinations">
    <!-- Background video -->
    <video src="./Videos/Space_1.mp4" class="video container__background-img" autoplay muted loop></video>
    <div class="window">

        <!-- Header -->
        <div class="window__header">
            <h1 class="window__title">Destinations</h1>
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


        <div class="grid">
            <?php 
                while($destination = $destinations->fetch_object()) {
            ?>
                <a href="stations.php?idDestination=<?php echo $destination->idDestino; ?>" class="link">
                    <div class="grid-option">
                        <!-- Background img -->
                        <img 
                        src="./Images/Destinations_Logos/<?php echo $destination->nombreDestino; ?>.png" 
                        alt="<?php echo $destination->nombreDestino; ?>" 
                        class="grid-option__img"
                        >
                        <h2 class="grid-option__title"><?php echo $destination->nombreDestino; ?></h2>
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