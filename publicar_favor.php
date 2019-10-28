<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/dashbord.css">
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/iconos.css">
    <link rel="stylesheet" type="text/css" href="styles/forms.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Datos de la base
    $server = "localhost";
    $user = "basededatos";
    $pass ="ABC123";
    $dbase ="kiosco_intel";

    //Variables
    $nombreFav = $_POST['nombreFav'];
    $gender = $_POST['gender'];
    $fecha = $_POST['fecha'];
    $lugar = $_POST['lugar'];
    $descr = $_POST['descr']; 
    

    // Create connection
    $conn = new mysqli($server, $user, $pass, $dbase);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO favor (propietarioID, voluntarioID, titulo, contenido,lugar, categoria, fechaINI)
    VALUES ('1', '2', ' $nombreFav', '$descr','$lugar','$gender','$fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                                alert('Se publico con éxito el favor');
                                window.location= 'publicar_favor.php'
                            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    
}
?>

    <?php
        require('top.php');
    ?>
    <div class="bottom">
        <div class="menuIcons">
            <?php require('iconos.php');?>
        </div>
        <div class="detalles">
        <?php
                $hoy = getdate();
                $year = $hoy['year'];
                $day = $hoy['mday']-1;
                $month = $hoy['mon'];
                   
            ?>
            <h1>Pedir Favor</h1>
            <form action="publicar_favor.php" method="post">
                <label>Titulo del favor</label>
                <input type="text" name="nombreFav">
                <label>Seleccione el tipo de favor:</label>
                <input type="radio" name="gender" value="fisico"> Físico<br>
                <input type="radio" name="gender" value="tecnologico"> Tecnología<br>
                <input type="radio" name="gender" value="bienestar"> Bienestar<br> 
                <input type="radio" name="gender" value="hogar"> Hogar<br> 
                <input type="radio" name="gender" value="otro"> Otro<br>
                <label>Fecha del favor</label>
                <input type="date" name="fecha" min=<?php echo "$year-$month-$day";?>> 
                <label>Descripcion del Favor</label>
                <textarea name="descr" rows="10" cols="50" placeholder="Describa el Favor"></textarea>
                <label>Lugar del favor</label>
                <input type="text" name="Lugar"> 
                <input type="submit" name="formulario" >
            </form>
        </div>
    </div>
</body>
</html>