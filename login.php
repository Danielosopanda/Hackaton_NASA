<?php 
    require_once "conexion.php";

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login</title>
</head>
<body>
<div class="container container--station">

    <!-- Background video -->
    <video id="stationBackgroundVideo" src="./Videos/Space_3.mp4" class="video container__background-img container__background-img--dark" autoplay muted loop></video>

    <form class="window window--login form">
        <!-- Title -->
        <h1 class="form__title">Login</h1>

        <div class="form__field">
            <label for="" class="form__label">Universal Population Identificator (UPI)</label>
            <input type="text" class="form__input" maxlength=8>
        </div>
        <div class="form__field">
            <label for="" class="form__label">Password</label>
            <input type="password" class="form__input">
        </div>
        <button class="button button--confirm button--form" type="submit">Login</button>
    </form>
</div>
</body>
</html>