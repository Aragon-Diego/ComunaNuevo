<?php
  session_start();
  if(isset($_SESSION['user']) && isset($_SESSION['pass']) ){ 
      session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">
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
            //REGISTRO
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $server = "localhost";
                $user = "root";
                $pass = "";
                $dbase ="kiosco_intel";
                if($_POST['login']){
                    $usuarioI = $_POST['usuarioI'];
                    $contraI = $_POST['contraI'];
                    $conexion = mysqli_connect ($server,$user,$pass,$dbase)
                    or die ("Error de conexion:".mysqli_connect_error());
                    mysqli_set_charset($conexion, "utf8");
                    $consulta = mysqli_query ($conexion,"SELECT * FROM users WHERE usuario='$usuarioI'")
                    or die ("Error en la consulta:".mysql_error());
                    $tupla = mysqli_fetch_array ($consulta);
                    if(!empty($tupla)){
                        if(password_verify($contraI, $tupla['contrasena'])){
                            //echo "Inicio de sesión exitoso";
                            
                            $_SESSION['user'] = $usuarioI;
                            echo "<script>
                            window.location.href='http://localhost/ComunaNuevo/ver_calendario.php';
                            </script>";
                            
                        }
                }
                }elseif($_POST['registro']){
                    $conexion = mysqli_connect($server, $user, $pass, $dbase) or die ("Error de conexión ".mysqli_connect_error());
                    $conexion->set_charset("utf8");
                
                    $usuario = $_POST['usuario'];
                    $contra = $_POST['contra'];
                    $confContra = $_POST['confContra'];
                    $contraEncrip = password_hash($contra, PASSWORD_DEFAULT);
                    $fecha =  $_POST['fecha'];
                    $consulta = mysqli_query ($conexion,"SELECT * FROM users WHERE usuario='$usuario'")
                    or die ("Error en la consulta:".mysql_error());
                    $tupla = mysqli_fetch_array ($consulta);
                    //Solo saber si existe un usuario con el mismo nombre
                    if(!empty($tupla)){
                        //echo "Ya existe un usuario con la contrasena";
                        $errores["usuario"] = "Ya existe el usuario con esta contrasena";
                        echo "<script>
                                alert('Ese usuario ya existe');
                                window.location= 'login.php'
                            </script>";
                    }elseif($contra != $confContra ){
                        $errores["contrasena"] = "Contrasenas no coinciden";
                        echo "<script>
                                alert('Las contraseñas no coinciden');
                                window.location= 'login.php'
                            </script>";
                    }else{
                        $query = "INSERT INTO users (usuario, contrasena, nacimiento)
                    VALUES ('$usuario', '$contraEncrip', $fecha)";
                        if ($conexion->query($query) === TRUE) {
                            $conexion->close();
                        }
                        echo "<script>
                                alert('Usuario creado con éxito');
                                window.location= 'login.php'
                            </script>";
                    }
                    
                } 
                }
                
                ?>



            <form action="login.php" method="post">
                <label>Nombre</label>
                <input type="text" name="usuario">
                <label>Fecha de nacimiento</label>
                <input type="date" name="fecha">
                <label>Contraseña</label>
                <input type="password" name="contra">
                <label>Confirmar contraseña</label>
                <input type="password" name="confContra">
                <input type="submit" name="registro" >
            </form>
        </div>
        <!-- 
            div para hacer el Login
        -->
        <div class="LoginDer">
            <h1>Inicio de Sesión</h1>
            <form action="login.php" method="post">
                <label>Nombre</label>
                <input type="text" name="usuarioI">
                <label>Contraseña</label>
                <input type="password" name="contraI">
                <input type="submit" name="login" class="loginBtn">
            </form>
            <a href="recuperar_contrasena.php">Se me olvidó la contraseña</a>
        </div>
    </div>
</body>
</html>