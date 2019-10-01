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
      var errorHora =  false;
      var errorFechaInicio = false;
      var errorFechaFin = false;
      var errorPrecio = false;
      var errorDescripcion = false;
      var errorLugar = false;  
      
      $("#evento_nombre").focusout(function(){
          checarNombre();
      });

      $("#evento_dias_inicio").focusout(function(){
          checarInicio();
      });

      $("#evento_horai").change(function(){
          checarHorai();
      });

      $("#evento_dias_fin").focusout(function(){
          checarFin();
      });

      $("#evento_horaf").change(function(){
          checarHoraf();
      });

      $("#evento_precio").focusout(function(){
          checarPrecio();
      });

      $("#evento_desc").focusout(function(){
          checarDescripcion();
      });

      $("#evento_lugar").focusout(function(){
          checarLugar();
      });

      $("#submitEvento").submit(function(e){
          validarSubmit(e);
      });  

      function checarNombre(){
          var regex = /^[a-zA-ZáéíóúüÁÉÍÓÚÜ\s]+$/;
          if (regex.test($('#evento_nombre').val())){
            $("#errorNombre").text("");
          }
          else{
            alert('Nombre Incorrecto o vacío');
            $("#errorNombre").text("Nombre no válido. Solo puede utilizar letras, números no.");
            errorNombre = true;
          }
      }

      function checarInicio(){
          var now = new Date();
          var day = ("0" + now.getDate()).slice(-2);
          var month = ("0" + (now.getMonth() + 1)).slice(-2);
          var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
          var fechaInput = new Date($('#evento_dias_inicio').val());

          if(fechaInput < now){ //si la fechaInput es menor que now, es un error, porque es pasada
            alert('Fecha del pasado Inicio error.');
            $("#errorFechaInicio").text("No puede establecer una fecha anterior a hoy.");
            errorFechaInicio = true;
          }
          else{
            $("#errorFechaInicio").text("");
            errorFechaInicio =  false;
          }
      }

      function checarHorai(){
          if($('#evento_horai').val().length === 0 ){
            alert('Vacío.');
            $("#errorHora").text("Introduzca una hora completa (Hora:Minuto AM/PM");
            errorHora = true;
          }
          else{
            $("#errorHora").text("");
            errorHora =  false;
          }
      }

      function checarFin(){
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear()+"-"+(month)+"-"+(day);
        var fechaInput = new Date($('#evento_dias_fin').val());

        if(fechaInput < now){ //si la fechaInput es menor que now, es un error, porque es pasada
          alert('Fecha erronea.');
          $("#errorFechaFin").text("No puede establecer una fecha demasiado lejana a hoy.");
          errorFechaInicio = true;
        }
        else{
          $("#errorFechaFin").text("");
          errorFechaInicio =  false;
        }
      }

      function checarHoraf(){
        if($('#evento_horaf').val().length === 0 ){
          alert('Vacío.');
          $("#errorHora").text("Introduzca una hora completa (Hora:Minuto AM/PM");
          errorHora = true;
        }
        else{
          $("#errorHora").text("");
          errorHora =  false;
        }
      }

      function checarPrecio(){
        if($('#evento_precio').val() > 0){
          //alert('Contraseñas coinciden.');
          $("#errorPrecio").text("");
        }
        else{
          alert('Error en precio');
          $("#errorPrecio").text("El precio debe ser mayor que cero.");
          errorPrecio = true;
        }
      }

      function checarDescripcion(){
        if($('#evento_desc').val().length === 0 ){
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
        if($('#evento_lugar').val().length === 0 ){
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
          var errorHora =  false;
          var errorFechaInicio = false;
          var errorFechaFin = false;
          var errorPrecio = false;
          var errorDescripcion = false;
          var errorLugar = false;

          checarNombre();
          console.log("NOMBRE: " + errorNombre);
          checarInicio();
          console.log("FECHA INI: " + errorFechaInicio);
          checarHorai();
          console.log("HORA: " + errorHora);
          checarFin();
          console.log("FECHA FIN: " + errorFechaFin);
          checarHoraf();
          console.log("HORA: " + errorHora);
          checarPrecio();
          console.log("PRECIO: " + errorPrecio);
          checarDescripcion();
          console.log("DESCRIPCIÓN: " + errorDescripcion);
          checarLugar();
          console.log("LUGAR: " + errorLugar);

          if(errorNombre == false && errorHora ==  false && errorFechaInicio == false && errorFechaFin == false && errorPrecio == false && errorDescripcion == false && errorLugar == false){
            //si no hay errores, hacer submit
            alert("Evento publicado en el mercado.");
          }
          else{
            alert("EVENTO NO PUBLICADO. Hay errores en uno o varios de los campos. Revise el texto en rojo y corríjalos antes de volver a intentar. No deje ningún campo vacío.");
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
            <h4 id="titulo">Agregar Nuevo Evento</h4>
            <form id="forma_evento" name="forma_evento" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="col-lg-12 formMargin">
          </div>
        </div>

        <div>
            <div class='col-lg-6'>
                <label for="evento_nombre">Nombre del evento</label>
                <input placeholder="Ejemplo: Churros" name="evento_nombre" id="evento_nombre" type="text" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['evento_nombre'])."'"; ?> maxlength="50" required>
            </div>
          <div class='col-lg-6'>
            <span id="errorNombre" class="errorSpan"></span>
          </div>            
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="evento_dias_inicio">Día en que inicia el evento</label>
            <input name="evento_dias_inicio" id="evento_dias_inicio" type="date" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['evento_dias_inicio'])."'"; ?> min=<?php echo date("Y-m-d"); ?> max="2020-12-31" required>
          </div>
          <div class='col-lg-6'>
            <span id="errorFechaInicio" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="evento_horai">Hora de inicio del evento</label>
            <input name="evento_horai" id="evento_horai" type="time" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['evento_horai'])."'"; ?> required>
          </div>
          <div class='col-lg-6'>
            <span id="errorHora" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="evento_dias_fin">Día en que termina el evento</label>
            <input name="evento_dias_fin" id="evento_dias_fin" type="date" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['evento_dias_fin'])."'"; ?> min=<?php echo date("Y-m-d"); ?> max="2020-12-31" required>
          </div>
          <div class='col-lg-6'>
            <span id="errorFechaFin" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="evento_horaf">Hora de fin del evento</label>
            <input name="evento_horaf" id="evento_horaf" type="time" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['evento_horaf'])."'"; ?> required>
          </div>
          <div class='col-lg-6'>
            <span id="errorHora" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="evento_precio">Precio del evento</label>
            <input placeholder="Ejemplo: 20" name="evento_precio" id="evento_precio" type="number" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['evento_precio'])."'"; ?> min="0" step="1" max="5000" required>
          </div>
          <div class='col-lg-6'>
            <span id="errorPrecio" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="evento_desc">Descripción del evento</label>
            <textarea placeholder="Ejemplo: Vendo churros hechos en casa afuera de la escuela." name="evento_desc" id="evento_desc" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['evento_desc'])."'"; ?> maxlength="250" rows="2" required></textarea>
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
            <button name='submitEvento' type="submit" class='btn btn-warning btn-lg'>Publicar</button>
              <a href="#" class='btn btn-danger' role='button'>Cancelar</a>
        </center>

      </form>
      </div>
    </main>
  </body>
</html>