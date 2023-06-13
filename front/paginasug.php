<?php
    include '../back/paginasug.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./style/header.css">
  <title>Paginas UG</title>
</head>

<body style="background-color: #F1F6F9!important;">
  <header>
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container containertop">
            <a class="navbar-brand" href="./index.php">
              <img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/UGTO.png" alt="Logo" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin: 0; padding: 0;">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Menú
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./index.php">Inicio</a></li>
                    <li><a class="dropdown-item" href="./administracion.php">Agenda</a></li>
                    <li><a class="dropdown-item" href="./horarios/horarios.php">Horarios</a></li>
                    <li><a class="dropdown-item" href="./transporte.html">Transporte</a></li>
                    <li><a class="dropdown-item" href="./ubicacion.html">Ubicación</a></li>
                    <li><a class="dropdown-item" href="./servicios.php">Servicios</a></li>
                    <li><a class="dropdown-item" href="./tramites/tramites.php">Tramites</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
      </nav>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="text-center mb-3">Paginas UG</h2>
        </div>
      </div>
      <div class="row">
        <div class="col contenido" id="pags">
          <!-- Contenido del segundo contenedor -->
        </div>
      </div>
    </div>


    <template id="cardpags">
      <div class="cardstyle">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="" class="imgpag img-fluid rounded-start mt-5">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title nombre"></h5>
                <p class="card-text descripcion"></p>
                <a href="" class="pagina" target="_blank"><button class="btn btn-primary">Ir a la pagina</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>

  </main>



  <script src="../js/paginasug.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>