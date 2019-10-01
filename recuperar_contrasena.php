<!Confirma la identidad de la persona>
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
        <div class="Reccuadro1">
            <h1>Recuperar Contraseña</h1>
            <form action="recuperar_contrasena2.php" method="post">
                <label>Nombre</label>
                <input type="text" pattern="[A-Za-z]" title="NO USES NÚMEROS :)" name="usuario">
                <label>Escribe tu nombre y fecha (día mes año) de nacimiento sin espacios (ej AnaMariaGarzaGarcia10121959)</label>
                <input type="text" name="contra">
                <input type="submit" name="registro" href="recuperar_contrasena2.php">
            </form>
        </div>
       
    </div>
</body>
</html>