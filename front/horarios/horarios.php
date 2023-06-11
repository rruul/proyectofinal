<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Horarios</title>
</head>
<body style="background-color: #F1F6F9!important;">
  <?php include './headerhora.html';?>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="text-center mb-3" id="titulo" style="margin-top: 10px;"></h2>
        </div>
      </div>
      <div class="container">
        <div class="ratio" style="--bs-aspect-ratio: 39%;">
          <iframe src="" style="width:100%; height:80vh" id="pdf" frameborder="0" ></iframe>
        </div>
      </div>
    </div>
  <script src="./func.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>