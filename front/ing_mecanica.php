<?php
    include '../back/ing_mecanica.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Agenda de personal de ingenieria mecanica</title>
</head>

<body>
  <?php include './header.html';?>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="text-center mb-3">Personal del departamento de Ingenieria mecanica</h2>
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
              <img src="../img/preofe.png" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title nombre"></h5>
                <div class="divmail">
                  <p class="card-text correo"></p>
                  <a href="" class="mailto"><i class="fa-solid fa-envelope"></i></a>
                </div>
                <p class="card-text conmutador"></p>
                <p class="card-text extension"></p>
                <a href="" class="calif" target="_blank"><button class="btn btn-primary">Opiniones</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>

  </main>



  <script src="../js/ing_mecanica.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>