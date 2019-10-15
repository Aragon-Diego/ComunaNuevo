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