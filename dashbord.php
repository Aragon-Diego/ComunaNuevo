<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/dashbord.css">
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/iconos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="top">
        <?php require('logo.php'); ?>
        <a class="dashbordA">salir</a>
        <a class="dashbordA">mi cuenta</a>
        <button class="btnPublicar">Publicar ▼</button>        
    </div>
    <div class="bottom">
        <div class="menuIcons">
            <?php require('iconos.php');?>
        </div>
        <div class="detalles">

        </div>
    </div>
</body>
</html>