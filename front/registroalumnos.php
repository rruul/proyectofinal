<?php
    include '../back/alumnos.php';
    include '../back/conexion.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Título de tu página</title>
</head>

<body style="background-color: #F1F6F9!important;">
  <?php include './headerservs.html';?>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
            <div>
                <h2 class="text-center mb-3">Alumnos</h2>
                <button type="button" class="btn btnregistrar" data-bs-toggle="modal" data-bs-target="#registraralumno" style="margin-top: 50px!important; margin-left: 28vw; background-color: #19A7CE; color: white; transition-duration: 0.1s!important;">
                    <i class="bi bi-plus-circle-fill" style="margin-right: 5px;"></i>Registrar persona
                </button>
            </div>
            <?php include '../back/registro.php'?>
        </div>
      </div>
      <div class="row">
        <div class="col contenido" id="servs">
          <!-- Contenido del segundo contenedor -->
        </div>
      </div>
    </div>


    <div class="modal fade" id="registraralumno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="validationCustom01" class="form-label">Nombre completo o con el que te identificaran las demas personas</label>
                    <input type="text" name="nombre" class="form-control" id="validationCustom01" require>
                    <label for="validationCustom03" class="form-label mt-3">Correo de contacto</label>
                    <input type="text" name="correo" class="form-control" id="validationCustom03"></textarea>
                    <label for="validationCustom02" class="form-label mt-3">Numero de contacto</label>
                    <input type="number" name="numero" class="form-control" id="validationCustom02" require>
                    <label for="validationCustom05" class="form-label mt-3">Producto, servicio que ofrescas o funcion que cumplas</label>
                    <textarea type="text" name="descripcion" class="form-control" id="validationCustom05" required></textarea>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="btnregistro" value="Aceptar" id="btnregcurso">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
                </div>
            </div>
        </div>

    <template id="cardservs">
      <div class="cardstyle">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/default.jpg" class="imgserv img-fluid rounded-start mt-5">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title nombre"></h5>
                <div class="divmail">
                  <p class="card-text correo"></p>
                  <a href="" class="mailto"><i class="fa-solid fa-envelope"></i></a>
                </div>
                <p class="card-text conmutador"></p>
                <p class="card-text descripcion"></p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </template>

  </main>



  <script src="../js/alumnos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>