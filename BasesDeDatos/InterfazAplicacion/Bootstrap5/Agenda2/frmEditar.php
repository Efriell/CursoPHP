<?php

$id = $_GET['id'];
/* echo $id; */

require_once 'Crud/bd.php';

$sql = 'Select * from contactos where id = ?;';
$sentencia = $pdo->prepare($sql); //Preparar la consulta
$sentencia->execute([$id]); //Ejecuta la consulta
$contacto = $sentencia->fetch(PDO::FETCH_OBJ); //Devuelve la fila con el resultado de la consulta


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

    <title>Contacto</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="Crud/actualizarContactos.php">
                    <div class="mb-3">
                        <input type="text" name="id" value="<?php echo $contacto->Id; ?>"  class="form-control" id="exampleInputPassword1" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $contacto->Nombre; ?>" class="form-control" id="exampleInputPassword2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword3" class="form-label">Apellidos</label>
                        <input type="text" name="apellido" value="<?php echo $contacto->Apellidos; ?>" class="form-control" id="exampleInputPassword3">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword4" class="form-label">Email</label>
                        <input type="text" name="email" value="<?php echo $contacto->Email; ?>" class="form-control" id="exampleInputPassword3">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword5" class="form-label">Telefono 1</label>
                        <input type="text" name="tele" value="<?php echo $contacto->Telefono1; ?>" class="form-control" id="exampleInputPassword3">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword5" class="form-label">Movil</label>
                        <input type="text" name="movil" value="<?php echo $contacto->Movil; ?>" class="form-control" id="exampleInputPassword3">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>