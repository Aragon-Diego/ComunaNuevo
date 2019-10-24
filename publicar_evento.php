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
        require('top.php');
    ?>
    <div class="bottom">
        <div class="menuIcons">
            <?php require('iconos.php');?>
        </div>
        <div class="detalles">
            <h1>Publicar evento</h1>
            <form action="ver_calendario.php" method="post">
                <label>Nombre del evento</label>
                <input type="text" name="nombreEvnt">
                <label>Dia en que inicia el evento</label>
                <input type="date" name="diaIn">
                <label>Hora de inicio del evento</label>
                <input type="time" name="horaIn">
                <label>Dia en que termina el evento</label>
                <input type="date" name="diaFin">
                <label>Hora de termino del evento</label>
                <input type="time" name="horaFin">
                <label>Precio del evento</label>
                <input type="number" name="precio"min="0" value="0" step="0.01">
                <label>Descripcion del evento</label>
                <textarea name="descr" rows="10" cols="50" placeholder="Describa el evento"></textarea>
                <label>Lugar del evento</label>
                <input type="text" name="Lugar"> 
                <input type="submit" name="formulario" >
            </form>
        </div>
    </div>
</body>
</html>
