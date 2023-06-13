<?php
    include '../back/arteyempresa.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Agenda de personal de arte y empresa</title>
</head>

<body style="background-color: #F1F6F9!important;">
  <?php include './header.html';?>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="text-center mb-3">Personal del departamento de Arte y empresa</h2>
          <?php include '../back/encorreo.php';?>
        </div>
      </div>
      <div class="row">
        <div class="col contenido" id="profes">
          <!-- Contenido del segundo contenedor -->
        </div>
      </div>
    </div>

    <template id="cardprofes">
      <div class="cardstyle">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../img/preofe.png" class="img-fluid rounded-start mt-5">
            </div>
            <div class="col-md-8">
            
              <div class="card-body">
                <h5 class="card-title nombre"></h5>
                <div class="divmail">
                  <p class="card-text correo"></p>
                  <button id="botonm" class="mailto" data-bs-toggle="modal" data-bs-target="#modalcorreo"><i class="fa-solid fa-envelope"></i></button>
                </div>
                <p class="card-text conmutador"></p>
                <p class="card-text extension"></p>
                <a href="" class="calif" target="_blank"><button class="btn btn-primary">Opiniones</button></a>
              </div>
              <div class="card-footer text-muted cargo"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" id="modalcorreo" tabindex="-1" aria-labelledby="modalemail" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="modalemail">Envia correo</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form novalidate id="formulario" class="form" method="post">
                <div class="mb-3">
                  <label for="destinatario" class="col-form-label">Para: </label>
                  <input type="text" name="destinatario" id="destinatario" value="" readonly class="form-control correoauto">
                </div>
                <div class="mb-3">
                  <label for="correo" class="col-form-label" required>Tu correo: </label>
                  <input type="email" name="correo" id="correo" class="form-control mb-3">
                </div>
                <div class="mb-3">
                  <label for="asunto" class="col-form-label" required>Asunto:</label>
                  <textarea class="form-control mb-3" name="asunto" id="asunto"></textarea>
                </div>
                <div class="mb-3">
                  <label for="mensaje" class="col-form-label" required>Mensaje:</label>
                  <textarea class="form-control mb-3" name="mensaje" id="mensaje"></textarea>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary" id="enviar">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </template>

  </main>



  <script src="../js/arteyempresa.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>