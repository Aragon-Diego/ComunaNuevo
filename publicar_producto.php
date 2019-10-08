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
      var errorTelefono = false;
      var errorHora =  false;
      var errorFechaInicio = false;
      var errorFechaFin = false;
      var errorPrecio = false;
      var errorDescripcion = false;

      $("#producto_nombre").focusout(function(){
          checarNombre();
      });

      $("#producto_tele").focusout(function(){
          checarTelefono();
      });

      $("#producto_dias_inicio").focusout(function(){
          checarInicio();
      });

      $("#producto_horai").change(function(){
          checarHorai();
      });

      $("#producto_dias_fin").focusout(function(){
          checarFin();
      });

      $("#producto_horaf").change(function(){
          checarHoraf();
      });

      $("#producto_precio").focusout(function(){
          checarPrecio();
      });

      $("#producto_desc").focusout(function(){
          checarDescripcion();
      });

      $("#submitProduct").submit(function(e){
          validarSubmit(e);
      });

      function checarNombre(){
          var regex = /^[a-zA-ZáéíóúüÁÉÍÓÚÜ\s]+$/;
          if (regex.test($('#producto_nombre').val())){
            $("#errorNombre").text("");
          }
          else{
            alert('Nombre Incorrecto o vacío');
            $("#errorNombre").text("Nombre no válido. Solo puede utilizar letras, números no.");
            errorNombre = true;
          }
      }

      function checarTelefono(){
          var regex = /^\d+(-\d+)*$/;
          if (regex.test($('#producto_tele').val())){
            $("#errorTelefono").text("");
          }
          else{
            alert('Teléfono inválido');
            $("#errorTelefono").text("Teléfono no válido. Solo puede usar números y guiones (-), letras no.");
            errorTelefono = true;
          }
      }

      function checarInicio(){
          var now = new Date();
          var day = ("0" + now.getDate()).slice(-2);
          var month = ("0" + (now.getMonth() + 1)).slice(-2);
          var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
          var fechaInput = new Date($('#producto_dias_inicio').val());

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
          if($('#producto_horai').val().length === 0 ){
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
        var fechaInput = new Date($('#producto_dias_fin').val());

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
        if($('#producto_horaf').val().length === 0 ){
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
        if($('#producto_precio').val() > 0){
          $("#errorPrecio").text("");
        }
        else{
          alert('Error en precio');
          $("#errorPrecio").text("El precio debe ser mayor que cero.");
          errorPrecio = true;
        }
      }

      function checarDescripcion(){
        if($('#producto_desc').val().length === 0 ){
          alert('Vacío.');
          $("#errorDescripcion").text("No puede dejar el campo vacío");
          errorDescripcion = true;
        }
        else{
          $("#errorDescripcion").text("");
          errorDescripcion =  false;
        }
      }

      function validarSubmit(e){
          var errorNombre = false;
          var errorTelefono = false;
          var errorHora =  false;
          var errorFechaInicio = false;
          var errorFechaFin = false;
          var errorPrecio = false;
          var errorDescripcion = false;

          checarNombre();
          console.log("NOMBRE: " + errorNombre);
          checarTelefono();
          console.log("TELEFONO: " + errorTelefono);
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

          if(errorNombre == false && errorTelefono == false && errorHora ==  false && errorFechaInicio == false && errorFechaFin == false && errorPrecio == false && errorDescripcion == false){
            //si no hay errores, hacer submit
            alert("Producto publicado en el mercado.");
          }
          else{
            alert("PRODUCTO NO PUBLICADO. Hay errores en uno o varios de los campos. Revise el texto en rojo y corríjalos antes de volver a intentar. No deje ningún campo vacío.");
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
            <h4 id="titulo">Agregar Nuevo Producto</h4>
            <form id="forma_producto" name="forma_producto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="col-lg-12 formMargin">
          </div>
        </div>

        <div>
            <div class='col-lg-6'>
                <label for="producto_nombre">Nombre del producto</label>
                <input placeholder="Ejemplo: Churros" name="producto_nombre" id="producto_nombre" type="text" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['producto_nombre'])."'"; ?> maxlength="50" required>
            </div>
          <div class='col-lg-6'>
            <span id="errorNombre" class="errorSpan"></span>
          </div>            
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="producto_tele">Teléfono de contacto</label>
            <input placeholder="Ejemplo: 811 123 4567" name="producto_tele" id="producto_tele" type="text" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['producto_tele'])."'"; ?> maxlength="15" required>
          </div>
          <div class='col-lg-6'>
            <span id="errorTelefono" class="errorSpan"></span>
          </div>
        </div>
                <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="producto_dias_inicio">Día en que inicia la venta</label>
            <input name="producto_dias_inicio" id="producto_dias_inicio" type="date" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['producto_dias_inicio'])."'"; ?> min=<?php echo date("Y-m-d"); ?> max="2020-12-31" required>
          </div>
          <div class='col-lg-6'>
            <span id="errorFechaInicio" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="producto_horai">Hora de inicio de la venta</label>
            <input name="producto_horai" id="producto_horai" type="time" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['producto_horai'])."'"; ?> required>
          </div>
          <div class='col-lg-6'>
            <span id="errorHora" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="producto_dias_fin">Día en que termina la venta</label>
            <input name="producto_dias_fin" id="producto_dias_fin" type="date" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['producto_dias_fin'])."'"; ?> min=<?php echo date("Y-m-d"); ?> max="2020-12-31" required>
          </div>
          <div class='col-lg-6'>
            <span id="errorFechaFin" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="producto_horaf">Hora de fin de la venta</label>
            <input name="producto_horaf" id="producto_horaf" type="time" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['producto_horaf'])."'"; ?> required>
          </div>
          <div class='col-lg-6'>
            <span id="errorHora" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="producto_precio">Precio del producto</label>
            <input placeholder="Ejemplo: 20" name="producto_precio" id="producto_precio" type="number" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['producto_precio'])."'"; ?> min="0" step="1" max="5000" required>
          </div>
          <div class='col-lg-6'>
            <span id="errorPrecio" class="errorSpan"></span>
          </div>
        </div>
        <div class='row formMargin'>
          <div class='col-lg-6'>
            <label for="producto_desc">Descripción del producto</label>
            <textarea placeholder="Ejemplo: Vendo churros hechos en casa afuera de la escuela." name="producto_desc" id="producto_desc" class="form-control validate" <?php if (!empty($confirm_password_err)) echo "value= '".trim($_POST['producto_desc'])."'"; ?> maxlength="250" rows="2" required></textarea>
          </div>
          <div class='col-lg-6'>
            <span id="errorDescripcion" class="errorSpan"></span>
          </div>
        </div>

        <center class='formMargin'>
            <button name='submitProduct' type="submit" class='btn btn-warning btn-lg'>Publicar</button>
              <a href="#" class='btn btn-danger' role='button'>Cancelar</a>
        </center>

      </form>
      </div>
    </main>
  </body>
</html>