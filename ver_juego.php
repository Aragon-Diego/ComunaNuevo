<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/dashbord.css">
    <link rel="stylesheet" type="text/css" href="styles/iconos.css">
    <link rel="stylesheet" type="text/css" href="styles/general2.css">
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
            <h1 class="titulo">Puntuaciones</h1>
            <br/>
            <br/>
            <div class="detalles2">
                <?php
                    $archivo = file('actual.txt');
                    $lineas =   count($archivo);
                    $aDatos = array();
                    $k = 0;
                    for($i = 0; $i<$lineas-1; $i+=2){ 
                        $palabra = $archivo[$i].$archivo[$i+1];
                        $aDatos[$k] = $palabra;
                        $k++; 
                    }
                    rsort($aDatos);
                ?>
                <div class = "tabla">
                    <table style="width:100%">
                        <tr>
                            <th>Participantes</th>
                            <th>Puntaje</th>
                            </tr>
                        <?php
                           //$aPalabra = array();
                            echo "<tr>";
                            for($i = 0; $i<count($aDatos); $i++){ 
                                $puntaje = intval(preg_replace('/[^0-9]+/', '', $aDatos[$i]), 10); 
                                $nombre = preg_replace('/[0-9]/', '', $aDatos[$i]); 
                                echo "<tr>";
                                echo "<td>",$nombre,"</td>";
                                echo "<td>",$puntaje,"</td>";
                                echo "</tr>";
                            }     
                        ?>
                    </table>  
                </div>
                <a class="boton" href="webrun:C:\xampp\htdocs\ComunaNuevo\juego\disparos.exe">JUEGA!</a>
            </div>
        </div>
    </div>
</body>
</html>