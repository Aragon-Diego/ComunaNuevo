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
            <form action="login.php" method="post">
                <label>Nombre</label>
                <input type="text" name="usuario">
                <label>Contraseña</label>
                <input type="text" name="contra">
                <label>Confirmar contraseña</label>
                <input type="text" name="confContra">
                <input type="submit" name="registro" >
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
                <input type="submit" name="login" class="loginBtn">
            </form>
            <a href="recuperar_contrasena.php">Se me olvidó la contraseña</a>
        </div>
    </div>
</body>
</html>