<?php
    include '../back/administracion.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h2 class="text-center mb-3">Maestros del departamento de Administracion</h2>
    <div class="container mb-4" style="display: flex;justify-content: flex-end;">
      <input type="text" id="barra" placeholder="Realiza tu busqueda"> 
    </div>
    <div class="container">

    
  <table class="table table-bordered border-black text-center">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Conmutador</th>
            <th scope="col">Extension</th>
          </tr>
        </thead>
        <tbody id="profes">

        </tbody>
      </table>
      </div>
    
    <template id="cardprofes">
          <tr>
            <td class="nombre"></td>
            <td class="correo"></td>
            <td class="conmutador"></td>
            <td class="extension"></td>
          </tr>
    </template>
    

    <script src="../js/administracion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>