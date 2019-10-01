<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-<link rel="stylesheet" type="text/css" href="styles/login.css"> //aqui va el estilo>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <script>
    $(document).ready(function(){
      var errorNombre = false;
      var errorDesc = false;
      var errorLugar = false;  
      
      $("#favor_nombre").focusout(function(){
        checarNombre();
      });

      $("#fav_desc").focusout(function(){
        checarDescripcion();
      });
      
      $("#favor_lugar").focusout(function(){
          checarLugar();
      });

      $("#submitFavor").submit(function(e){
          validarSubmit(e);
      }); 

      function checarNombre(){
          var regex = /^[a-zA-ZáéíóúüÁÉÍÓÚÜ\s]+$/;
          if (regex.test($('#favor_nombre').val())){
            $("#errorNombre").text("");
          }
          else{
            alert('Nombre Incorrecto o vacío');
            $("#errorNombre").text("Nombre no válido. Solo puede utilizar letras, números no.");
            errorNombre = true;
          }
      }

      function checarDescripcion(){
        if($('#fav_desc').val().length === 0 ){
          alert('Vacío.');
          $("#errorDescripcion").text("No puede dejar el campo vacío");
          errorDescripcion = true;
        }
        else{
          $("#errorDescripcion").text("");
          errorDescripcion =  false;
        }
      }

      function checarLugar(){
        if($('#favor_lugar').val().length === 0 ){
          alert('Vacío.');
          $("#errorLugar").text("No puede dejar el campo vacío");
          errorLugar = true;
        }
        else{
          $("#errorLugar").text("");
          errorLugar =  false;
        }
      }

      function validarSubmit(e){
        var errorNombre = false;
        var errorDesc = false;
        var errorLugar = false;

          checarNombre();
          console.log("NOMBRE: " + errorNombre);
          checarDescripcion();
          console.log("DESCRIPCIÓN: " + errorDescripcion);
          checarLugar();
          console.log("LUGAR: " + errorLugar);

          if(errorNombre == false && errorDescripcion == false && errorLugar == false){
            //si no hay errores, hacer submit
            alert("Favor publicado en el mercado.");
          }
          else{
            alert("FAVOR NO PUBLICADO. Hay errores en uno o varios de los campos. Revise el texto en rojo y corríjalos antes de volver a intentar. No deje ningún campo vacío.");
            e.preventDefault();
          }
      }
    });
  </script>
</head>



<body>
    <main>
    <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4 id="titulo">Pedir un favor</h4>
            <form id="forma_favor" name="forma_favor" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="col-lg-12 formMargin">
          </div>
        </div>

        <div>
            <div class='col-lg-6'>
                <label for="favor_nombre">Titulo del favor</label>
                <input placeholder="Ejemplo: Ayuda para mover un sillon" name="favor_nombre" id="favor_nombre" type="text" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['favor_nombre'])."'"; ?> maxlength="50" required>
            </div>          
        </div>  

        <div>
          <div class='col-lg-6'>
            <i>Selecciona una categoría</i>
            <p>
              <label>
                <input class="with-gap col s12 post-form" name="categoria-favor" type="radio" value = "fisico" checked />
                <span>Físico</span>
              </label>
            </p>
            <p>
              <label>
                <input class="with-gap col s12 post-form" name="categoria-favor" type="radio" value = "tecnologia"  />
                <span>Tecnología</span>
              </label>
            </p>
            <p>
              <label>
                <input class="with-gap col s12 post-form" name="categoria-favor" type="radio" value = "bienestar"  />
                <span>Bienestar</span>
              </label>
            </p>
            <p>
              <label>
                <input class="with-gap col s12 post-form" name="categoria-favor" type="radio" value = "hogar" />
                <span>Hogar</span>
              </label>
            </p>
            <p>
              <label>
                <input class="with-gap col s12 post-form" name="categoria-favor" type="radio" value = "otros" />
                <span>Otros</span>
              </label>
            </p>
          </div>
        </div>

        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="fav_desc">Descripción del favor</label>
            <textarea placeholder="Ejemplo: Mi sillon esta muy pesado y necesito ayuda" name="fav_desc" id="fav_desc" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['fav_desc'])."'"; ?> maxlength="250" rows="2" required></textarea>
          </div>
          <div class='col-lg-6'>
            <span id="errorDescripcion" class="errorSpan"></span>
          </div>
        </div>

        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="evento_desc">Lugar del evento</label>
            <textarea placeholder="Ejemplo: En la iglesia." name="evento_lugar" id="evento_lugar" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['evento_lugar'])."'"; ?> maxlength="250" rows="2" required></textarea>
          </div>
          <div class='col-lg-6'>
            <span id="errorLugar" class="errorSpan"></span>
          </div>
        </div>

        <center class='formMargin'>
            <button name='submitFavor' type="submit" class='btn btn-warning btn-lg'>Publicar</button>
              <a href="#" class='btn btn-danger' role='button'>Cancelar</a>
        </center>

      </form>
      </div>
    </main>
  </body>
</html>