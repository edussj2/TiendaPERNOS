<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Pernos & Pernos | Contácto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="icon" type="image/png" href="./images/img/icono.png"/>

    <?php include("./layouts/estilos.php"); ?> 
    
  </head>
  <body>
  
  <div class="site-wrap">

    <?php include("./layouts/header.php"); ?>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="./">Inicio</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Contacto</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Ponerse en contacto</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombres <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Correo <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Asunto </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Mensaje </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar Mensaje">
                  </div>
                </div>
              </div>
              
            </form>

          </div>

          <div class="col-md-5 ml-auto">

            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Dirección</span>
              <p class="mb-0">Taymi 127, Chiclayo 14002, Lambayeque, Perú</p>
            </div>

            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Razón Social</span>
              <p class="mb-0">"J ORTIZ INVERSIONES EIRL"</p>
            </div>

            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Administrador</span>
              <p class="mb-0">Renato Tapia Gonzales</p>
            </div>

          </div>

        </div>
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 
  </div>

  <?php include("./layouts/scripts.php"); ?> 
    
  </body>
</html>