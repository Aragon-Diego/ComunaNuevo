<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/dashbord.css">
    <link rel="stylesheet" type="text/css" href="styles/general2.css">
    <link rel="stylesheet" type="text/css" href="styles/iconos.css">
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
           <h1>Puntuaciones</h1>
           <br/>
           <br/>
           <div class="detalles2">
           <?php
            $archivo = file('actual.txt');
            $lineas =   count($archivo);
            ?>
            <div class = "tabla">
           <table style="width:100%">
                <tr>
                    <th>Participantes</th>
                    <th>Puntaje</th> 
                </tr>
            <?php
            $k = 0;
            echo "<tr>";
            for($i = 0; $i<$lineas-1; $i+=2){ 
                echo "<tr>";
                echo "<td>",$archivo[$i],"</td>";
                echo "<td>",$archivo[$i+1],"</td>";
                echo "</tr>";
            }
            
           ?>
        </table>
            
        </div>
            <input type="submit" name="Jugar" class="loginBtn" value="Jugar!"">
           </div>
        </div>
    </div>
</body>
</html>