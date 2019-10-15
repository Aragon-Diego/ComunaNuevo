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
            <h1>Pedir Favor</h1>
                <form action="ver_favores.php" method="post">
                    <label>Titulo del Favor</label>
                    <input type="text" name="nombreFav">
                    <label>Seleccione el tipo de favor:</label>
                      <input type="radio" name="gender" value="fis"> Físico<br>
                      <input type="radio" name="gender" value="Tec"> Tecnología<br>
                      <input type="radio" name="gender" value="bien"> Bienestar<br> 
                      <input type="radio" name="gender" value="hog"> Hogar<br> 
                      <input type="radio" name="gender" value="otro"> Otro<br>
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