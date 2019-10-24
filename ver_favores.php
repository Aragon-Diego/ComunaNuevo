<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/dashbord.css">
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/iconos.css">
    <link rel="stylesheet" type="text/css" href="styles/vistas.css">    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        require('top.php');
    ?>
    <div class="bottom">
        <div class="menuIcons">
            <?php require('iconos.php');?>
        </div>
        <div class="detalles">
           <h1>Favores</h1>
           <br/>
           <br/>
           <div class="detalles2">
                <?php 
                    for($i=0;$i<20;$i++){
                        echo('<div class="contenido favor">
                                <h3>{variable con el titulo}</h3>
                                <h4 class="fecha">dd/mm/aa</h4>
                                <p class="desc">{variable con descripcion del evento}</p>
                                <h4 class="lugar">{variable del lugar del evento}</h4>
                            </div>');
                    }
                ?>
           </div>
        </div>
    </div>
</body>
</html>