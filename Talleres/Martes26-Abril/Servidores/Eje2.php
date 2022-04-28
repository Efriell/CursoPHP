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
            <h1 class="text-center">LA LANGOSTA AHUMADA   </h1>
            <form class="d-flex justify-content-center flex-column">
              <div class="mb-3">
                <label for="personas" class="form-label">Cantidad de personas:</label>
                <input type="number" name="personas" class="form-control" id="personas1">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Plato por persona menor a 200 personas: $14.000</b> </label>
                <label class="form-label"><b>Plato por persona entre 200 y 300 personas: $11.000</b> </label>
                <label class="form-label"><b>Plato por persona mayor a 300 personas: $9.000</b> </label>
              </div>
              <?php 
                $cantidadPersonas = $_POST['personas'];
                $coste = 0;
                if($cantidadPersonas<200){
                  $coste = $cantidadPersonas*14000;
                }elseif($cantidadPersonas>=200 and $cantidadPersonas<=300){
                  $coste = $cantidadPersonas*11000;
                }elseif($cantidadPersonas>=300){
                  $coste = $cantidadPersonas*9000;
                }
              ?>
              <button type="" class="btn btn-outline-danger">Calcular</button>
              <div class="mb-3">
                <label class="form-label"><b>El coste total es: $<?php echo $coste;?></b> </label>
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