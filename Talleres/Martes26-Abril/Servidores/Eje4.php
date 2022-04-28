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
          <h1 class="text-center">Uveria   </h1>
          <form class="d-flex justify-content-center flex-column">
            <?php 
                $cantidadAlumnos = $_POST['cantidadAlumnos'];
                $renta = 0;
                $rentaTotal = 0;
                if($cantidadAlumnos>=100){
                    $renta = $cantidadAlumnos*6500;
                }elseif($cantidadAlumnos>=50 and $cantidadAlumnos<=99){
                    $renta = $cantidadAlumnos*7000;
                }elseif($cantidadAlumnos>=30 and $cantidadAlumnos<=49){
                    $renta = $cantidadAlumnos*9500;
                }elseif($cantidadAlumnos<30){
                    $renta = 400000/$cantidadAlumnos;
                }
                $rentaTotal = $renta*$cantidadAlumnos;
            ?>
            <div class="mb-3">
            <label class="form-label"><b>El coste de la renta del bus por persona es: $<?php echo $renta."<br>"."El precio total de la renta es: $".$rentaTotal;?></b></label>
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