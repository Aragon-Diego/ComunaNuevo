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
        <a class="dashbordA" href="login.php">Salir</a>

            <div class="dropdown">
                <button class="dropbtn">PUBLICAR</button>
                <div class="dropdown-content">
                    <a href="publicar_eveto">Evento</a>
                    <a href="publicar_favor">Favor</a>
                    <a href="publicar_producto">Producto</a>
                </div>
            </div>        
       
    </div>

    <div class="bottom">
        <div class="menuIcons">
            <?php require('iconos.php');?>
        </div>
        <div class="detalles">
            <a></a>
        </div>
    </div>
</body>
</html>