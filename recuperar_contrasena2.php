<!Escribe una nueva contraseña y luego entra al sistema>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/recuperar.css">
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="RecDiv">
        <?php include("logo.php");?>
        <div class="Reccuadro2">
            <h1>Recuperar Contraseña</h1>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    $dbase ="kiosco_intel";
                    if($_POST['registro']){
                        $contra = $_POST['contra'];
                        $confContra = $_POST['confContra'];
                        $contraEncrip = password_hash($contra, PASSWORD_DEFAULT);

                        $conexion = mysqli_connect ($server,$user,$pass,$dbase)
                        or die ("Error de conexion:".mysqli_connect_error());
                        mysqli_set_charset($conexion, "utf8");
                        $consulta = mysqli_query ($conexion,"SELECT * FROM users WHERE usuario='$usuario'")
                        or die ("Error en la consulta:".mysql_error());
                        $tupla = mysqli_fetch_array ($consulta);
                        if(!empty($tupla)){
                            if(password_verify($nacimiento, $tupla['nacimiento'])){
                                $_SESSION['user'] = $usuario;
                                echo "<script>
                                window.location.href='http://localhost/ComunaNuevo/ver_calendario.php';
                                </script>";
                                
                            }
                        }
                    }
                }
            ?>



            <form action="recuperar_contrasena2.php" method="post">
                <label>Contraseña Nueva</label>
                <input type="text" name="contra">
                <label>Confirmar Nueva Contraseña</label>
                <input type="text" name="confContra">
                <input type="submit" name="registro">
            </form>
        </div>
       
    </div>
</body>
</html>