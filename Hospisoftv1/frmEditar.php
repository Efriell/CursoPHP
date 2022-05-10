<?php

$id = $_GET['id'];
// echo $id;

require_once 'app/medico/bd.php';
$sql = 'SELECT * FROM medico where id_medico = ?';
$sentencia = $pdo->prepare($sql);  //prepara consulta 
$sentencia->execute([$id]); //ejecuta la sentencia sql
$medico = $sentencia->fetch(PDO::FETCH_OBJ); //devuelve la fila con el resultado de la consulta
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Editar Contactos</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="app/medico/actualizarMedicos.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Id</label>
                                <input type="text" class="form-control" name="id" readonly value="<?php echo $medico->id_medico; ?>" id="id">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" value="<?php echo $medico->nombre_medico; ?>" name="nombre" id="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Apellido</label>
                                <input type="text" class="form-control" value="<?php echo $medico->apellidos_medico; ?>" name="apellido" id="apellidos">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Email</label>
                                <input type="text" class="form-control" value="<?php echo $medico->email; ?>" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Especialidad</label>
                                <input type="text" class="form-control" value="<?php echo $medico->especialidad; ?>" name="especialidad" id="especialidad">
                            </div>
                            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-save-fill"> Guardar</i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>