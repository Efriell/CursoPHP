<?php

$id = $_GET['id'];
echo $id;

require_once 'Crud/bd.php';

$sql = 'Select * from contactos where id = ?;';
$sentencia = $pdo->prepare($sql); //Preparar la consulta
$sentencia->execute([$id]); //Ejecuta la consulta
$resultado = $sentencia->fetch(); //Devuelve la fila con el resultado de la consulta


/* echo '<pre>';
var_dump($resultado);
echo '</pre>'; */

?>

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
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Id</label>
                        <input type="text" value="<?php echo $resultado[0];?>" class="form-control" id="exampleInputPassword1">
                        <label for="exampleInputPassword2" class="form-label">Nombre</label>
                        <input type="text" value="<?php echo $resultado[1];?>" class="form-control" id="exampleInputPassword2">
                        <label for="exampleInputPassword3" class="form-label">Apellidos</label>
                        <input type="text" value="<?php echo $resultado[2];?>" class="form-control" id="exampleInputPassword3">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>