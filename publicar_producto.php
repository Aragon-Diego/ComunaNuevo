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
    <div class="top">
        <?php require('logo.php'); ?>
        <a class="dashbordA">Salir</a>
        <a class="dashbordA">Mi cuenta</a>
        <button class="btnPublicar">Publicar ▼</button>        
    </div>
  <div class="bottom">
        <div class="menuIcons">
            <?php require('iconos.php');?>
        </div>
        <div class="detalles">
            <h1>Publicar evento</h1>
                <form action="publicar_evento.php" method="post">
                    <label>Nombre del producto</label>
                    <input type="text" name="nombreEvnt">
                    <label>Telefono de contacto</label>
                    <input type="number" name="Lugar"> 
                    <label>Dia en que inicia el producto</label>
                    <input type="date" name="diaIn">
                    <label>Hora de inicio del producto</label>
                    <input type="time" name="horaIn">
                    <label>Dia en que termina el producto</label>
                    <input type="date" name="diaFin">
                    <label>Hora de termino del producto</label>
                    <input type="time" name="horaFin">
                    <label>Precio del producto</label>
                    <input type="number" name="precio"min="0" value="0" step="0.01">
                    <label>Hora de termino del evento</label>
                    <input type="time" name="horaFin">
                    <label>Descripcion del evento</label>
                    <textarea name="descr" rows="10" cols="50" placeholder="Describa el evento"></textarea>
                    
                    <input type="submit" name="formulario" >
                </form>
          </div>
    </div>
</body>
</html>