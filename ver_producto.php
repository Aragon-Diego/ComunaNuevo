
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
    $user = "root";
    $pass = "";
    $dbase ="kiosco_intel";

    $conexion = mysqli_connect ($server,$user,$pass,$dbase)
    or die ("Error de conexión:".mysqli_connect_error());
    mysqli_set_charset($conexion, "utf8");
    $consulta= mysqli_query ($conexion,"SELECT * FROM producto")
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
           <h1>Productos</h1>
           <br/>
           <br/>
           <div class="detalles2">
           <?php
                
                for($i=0;$i<$nfilas;$i++){
                    echo'<div class="contenido producto">';
                    $tupla = mysqli_fetch_array ($consulta);
                    $hora = strtotime($tupla['hora']);
                    $hora2 = strtotime($tupla['hora_fin']);
                    $date = date_create($tupla['fecha_ini']);
                    $date2 = date_create($tupla['fecha_fin']);
                    $users = $tupla['usuarioID'];
                    $consultaF = mysqli_query ($conexion,"SELECT usuario FROM users WHERE id='$users'")
                    or die ("Error en la consulta:".mysql_error());
                    $tuplaF = mysqli_fetch_array ($consultaF);
                    $usuario = $tuplaF['usuario'];
                     
                    echo '<h3>', $tupla['nombre'] ,'</h3>';
                    echo '<h4 class="fecha"> Lo vende: ',$usuario ,'</h4>';
                    echo '<h4 class="fecha"> Inicio: ',date_format($date, 'd/m/y'),' Fin: ',date_format($date2, 'd/m/y'),'</h4>';
                    echo '<h4 class="fecha">  De: ',date("h:i a", $hora),' a ', date("h:i a", $hora2) ,'</h4>';
                    echo '<h4 class="lugar">Telefono: ',$tupla['telefono'],'</h4>';
                    echo '<h4 class="lugar">Precio: $',$tupla['precio'],'</h4>';
                    echo '<p class="desc">',$tupla['descripcion'],'</p>';
                    echo '</div>';
                } 
                
                ?>
                
           </div>
        </div>
    </div>
</body>
</html>