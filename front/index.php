<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/modal.css">
    <link rel="stylesheet" href="./style/index.css">
    <title>Bienvenido a DICIS!</title>
  </head>
  <body>
    <?php include './headeri.html';?>
    <main>
      <!--Carousel section-->
      <section id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class = "carousel-indicators">
              <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                  aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-current="true"
                  aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-current="true"
                  aria-label="Slide 3"></button>
          </div>
          <!--Carousel content-->
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="carousel-image d-block w-100" src="../img/1.jpg">
                  <span class="carousel-caption">
                      <h5>
                          ¡Bienvenido a la Guia DICIS, abeja!
                      </h5>
                      <p>
                          Encuentra la información necesaria para tu trayectoria en DICIS
                      </p>
                  </span>
              </div>
              <div class="carousel-item">
                  <img class="carousel-image d-block w-100" src="../img/dicis.jpg">
                  <span class="carousel-caption">
                  <h5>
                          ¡Bienvenido a la Guia DICIS, abeja!
                      </h5>
                      <p>
                          Encuentra la información necesaria para tu trayectoria en DICIS
                      </p>
                  </span>
              </div>
              <div class="carousel-item">
                  <img class="carousel-image d-block w-100" src="../img/2.jpg">
                  <span class="carousel-caption">
                  <h5>
                          ¡Bienvenido a la Guia DICIS, abeja!
                      </h5>
                      <p>
                          Encuentra la información necesaria para tu trayectoria en DICIS
                      </p>
                  </span>
              </div>
          </div>
          <!--Carousel prev and next buttons-->
          <button class = "carousel-control-prev" type = "button"
              data-bs-target="#mainCarousel"
              data-bs-slide="prev"
          >
              <span class = "carousel-control-prev-icon" aria-hidden="true"></span>
              <span class = "visually-hidden">Previous</span>
          </button>
          <button class = "carousel-control-next" type = "button"
              data-bs-target="#mainCarousel"
              data-bs-slide="next"
          >
              <span class = "carousel-control-next-icon" aria-hidden="true"></span>
              <span class = "visually-hidden">Next</span>
          </button>
      </section>
  </main>

    <section class="modal ">
        <div class="modalContainer container">
            <div class="position-absolute top-50 start-50 translate-middle text-center">
              <p class="division fs-2 fw-bolder">División de Ingenierías</p>
              <p class="sede fs-3 fw-bolder">Sede Salamanca</p>
            </div>
            <img src="../img/dicis.jpg" class="imgModal mt-3">
            <button class="btnModal" id="btnModal">Inicio</button>
        </div>
    </section>

    <script src="../js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>