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
                    $archivo = file('./juego/actual.txt');
                    $lineas =   count($archivo);
                    $aDatos = array();
                    for($i = 0; $i<$lineas-1; $i+=2){ 
                        $aDatos[$archivo[$i]] = $archivo[$i+1];
                           
                    }
                    arsort($aDatos, SORT_NATURAL);
                    


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
                            foreach ($aDatos as $key => $val){  
                                echo "<tr>";
                                echo "<td>",$key,"</td>";
                                echo "<td>",$val,"</td>";
                                echo "</tr>";
                            }     
                        ?>
                    </table>  
                </div>
                <a class="boton" href="webrun:C:\xampp\htdocs\ComunaNuevo\juego\disparos.exe">JUEGAR</a>
            </div>
        </div>
    </div>
</body>
</html>