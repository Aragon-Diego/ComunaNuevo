<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/dashbord.css">
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/iconos.css">
    <link rel="stylesheet" type="text/css" href="styles/vistas.css">    
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
    $consulta= mysqli_query ($conexion,"SELECT * FROM evento")
    or die ("Error en la consulta:".mysql_error());
    $nfilas = mysqli_num_rows ($consulta);
    
    
    

?>
    <?php
        require('top.php');
    ?>
    <div class="bottom">
        <div class="menuIcons">
            <?php require('iconos.php');?>
        </div>
        <div class="detalles">
           <h1>Calendario</h1>
           <br/>
           <br/>
           <div class="detalles2">
                <?php
                
                for($i=0;$i<$nfilas;$i++){
                    echo'<div class="contenido calendario">';
                    $tupla = mysqli_fetch_array ($consulta);
                    $hora = strtotime($tupla['horaINI']);
                    $hora2 = strtotime($tupla['horaFin']);
                    $date = date_create($tupla['fechaINI']);
                    $date2 = date_create($tupla['fechaFIN']);
                    $users = $tupla['propietarioID'];
                    $consultaF = mysqli_query ($conexion,"SELECT usuario FROM users WHERE id='$users'")
                    or die ("Error en la consulta:".mysql_error());
                    $tuplaF = mysqli_fetch_array ($consultaF);
                    $usuario = $tuplaF['usuario'];
                     
                    echo '<h3>', $tupla['titulo'] ,'</h3>';
                    echo '<h4 class="fecha"> Evento organizado por: ',$usuario,'</h4>';
                    echo '<h4 class="fecha"> Inicio: ',date_format($date, 'd/m/y'),'</h4>';
                    echo '<h4 class="fecha"> Fin: ',date_format($date2, 'd/m/y'),'</h4>';
                    echo '<h4 class="fecha"> De: ',date("h:i a", $hora),' a ', date("h:i a", $hora2) ,'</h4>';
                    echo '<p class="desc">',$tupla['contenido'],'</p>';
                    echo '<h4 class="lugar">Lugar: ',$tupla['lugar'],'</h4>';
                    echo '<h4 class="lugar">Precio: $',$tupla['precio'],'</h4>';
                    echo '</div>';
                } 
                
                ?>
           </div>
        </div>
    </div>
</body>
</html>