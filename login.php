<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="LoginDiv">
        <?php include("logo.php");?>
        <!-- 
            div para hacer el registro
        -->
        <div class="LoginIzq">
            <h1>Registro</h1>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $server = "localhost";
                $user = "basededatos";
                $pass ="ABC123";
                $dbase ="kiosco_intel";
                $conexion = mysqli_connect($server, $user, $pass, $dbase) or die ("Error de conexión ".mysqli_connect_error());
                $conexion->set_charset("utf8");
                $usuario = $_POST['usuario'];
                $contra = $_POST['contra'];
                $confContra = $_POST['confContra'];
                $contraEncrip = password_hash($contra, PASSWORD_DEFAULT);
                $consulta = mysqli_query ($conexion,"SELECT * FROM users WHERE usuario='$usuario'")
                or die ("Error en la consulta:".mysql_error());
                $tupla = mysqli_fetch_array ($consulta);

                //Solo saber si existe un usuario con el mismo nombre
                if(!empty($tupla)){
                    //echo "Ya existe";
                }else{
                    $query = "INSERT INTO users (usuario, contrasena)
                  VALUES ('$usuario', '$contraEncrip')";
                    if ($conexion->query($query) === TRUE) {
                        echo "Se creo el usuario correctamente";
                    } else {
                        
                    
                    }
                }



                $conexion->close();
            }
            ?>
            <form action="login.php" method="post">
                <label>Nombre Completo</label>
                <input type="text"  name="usuario">
                <label>Contraseña</label>
                <input type="password" name="contra">
                <label>Confirmar contraseña</label>
                <input type="password" name="confContra">
                <input type="submit" name="registro">
            </form>
        </div>
        <!-- 
            div para hacer el Login
        -->
        <div class="LoginDer">
            <h1>Login</h1>
            <form action="login.php" method="post">
                <label>Nombre</label>
                <input type="text" name="usuario">
                <label>Contraseña</label>
                <input type="text" name="contra">
                <input type="submit" name="login">
            </form>
            <a href="#">Se me olvidó la contraseña</a>
        </div>
    </div>
</body>
</html>