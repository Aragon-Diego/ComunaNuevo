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
    //Datos de la base
    $server = "localhost";
    $user = "basededatos";
    $pass ="ABC123";
    $dbase ="kiosco_intel";

    $conexion = mysqli_connect ($server,$user,$pass,$dbase)
    or die ("Error de conexión:".mysqli_connect_error());
    mysqli_set_charset($conexion, "utf8");
    $consulta= mysqli_query ($conexion,"SELECT * FROM favor")
    or die ("Error en la consulta:".mysql_error());
    $nfilas = mysqli_num_rows ($consulta);
    $sum = 0;

    

?>
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
                
                for($i=0;$i<$nfilas;$i++){
                    echo'<div class="contenido favor">';
                    $tupla = mysqli_fetch_array ($consulta);
                    $date = date_create($tupla['fechaINI']);
                     
                    echo '<h3>', $tupla['titulo'] ,'<h3>';
                    echo '<br>';
                    echo '<h4 class="fecha"> Inicio: ',date_format($date, 'd/m/y'),'</h4>';
                    echo '<p class="desc">',$tupla['contenido'],'</p>';
                    echo '<h4 class="lugar">Contacto: ',$tupla['lugar'],'</h4>';
                    echo '<h4 class="lugar">Categoria: ',$tupla['categoria'],'</h4>';
                    echo '</div>';
                } 
                
                ?>
                
           </div>
        </div>
    </div>
</body>
</html>