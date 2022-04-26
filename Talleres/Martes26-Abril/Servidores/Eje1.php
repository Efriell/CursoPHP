<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-xxl" style="margin: 14% auto;">
      <div class="row justify-content-md-center">
        <div class="col-md-6">
          <h1 class="text-center">CONSUMO DE AGUA</h1>
          <form class="d-flex justify-content-center flex-column">
            <div class="mb-3">
              <label for="alto" class="form-label">Alto de la piscina</label>
              <input type="number"  name="alto" class="form-control" id="alto1">
            </div>
            <div class="mb-3">
              <label for="largo" class="form-label">Largo de la piscina</label>
              <input type="number" name="largo" class="form-control" id="largo1">
            </div>
            <div class="mb-3">
              <label for="ancho" class="form-label">Ancho de la piscina</label>
              <input type="number" name="ancho" class="form-control" id="ancho1">
            </div>
            <div class="mb-3">
              <label for="estrato" class="form-label">Estrato</label>
              <select class="form-select" name="estrato">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <button type="" class="btn btn-outline-info">Calcular</button>
            <?php
            $alto = $_POST['alto'];
            $ancho = $_POST['ancho'];
            $largo = $_POST['largo'];
            $estrato = $_POST['estrato'];  
            $m3 = $alto*$ancho*$largo;
            $respuesta = 0;
            switch($estrato){
                case '1':
                    $respuesta = $m3*5000;
                    break;
                case '2':
                    $respuesta = $m3*6500;
                    break;
                case '3':
                    $respuesta = $m3*7000;
                    break;
                case '4':
                    $respuesta = $m3*8000;
                    break;
                case '5':
                    $respuesta = $m3*9200;
                    break;
            }
            ?>
            <div class="mb-3">
               <h1>Total de la factura:</h1>  $<?php echo $respuesta; ?>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>







