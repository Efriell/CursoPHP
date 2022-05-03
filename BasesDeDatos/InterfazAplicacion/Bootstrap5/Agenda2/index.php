<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>Hello, world!</title>
</head>

<body class="bg-secondary">
  <div class="container">
    <div class="row text-center mb-5">
      <h1>Agenda de contactos</h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card bg-success rounded-circle text-info">
          <div class="card-body">
            <h5 class="card-title text-center">Ingrese sus datos</h5>
            <form action="./Crud/insertarContacto.php" method="POST">
              <div class="mb-3">
                <label for="exampleInputNombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control rounded-circle" id="exampleInputNombre">
              </div>
              <div class="mb-3">
                <label for="exampleInputApellido" class="form-label">Apellidos:</label>
                <input type="text" name="apellido" class="form-control rounded-circle" id="exampleInputApellido">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control rounded-circle" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">No comparta su email.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputTele" class="form-label">Telefono 1:</label>
                <input type="text" name="tele" class="form-control rounded-circle" id="exampleInputTele">
              </div>
              <div class="mb-3">
                <label for="exampleInputMovil" class="form-label">Móvil:</label>
                <input type="text" name="movil" class="form-control rounded-circle" id="exampleInputMovil">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-secondary w-100 rounded-circle">Guardar <i class="bi bi-download"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <table class="table text-center bg-black rounded-circle text-warning">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Email</th>
              <th scope="col">Telefono1</th>
              <th scope="col">Movil</th>
              <th scope="col">Activo</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once 'crud/listarContactos.php';
            foreach ($resultado as $i) {
            ?>
              <tr>
                <td><?php echo $i->Id; ?> </td>
                <td><?php echo $i->Nombre; ?> </td>
                <td><?php echo $i->Apellidos; ?> </td>
                <td><?php echo $i->Email; ?> </td>
                <td><?php echo $i->Telefono1; ?> </td>
                <td><?php echo $i->Movil; ?> </td>
                <td><?php echo $i->Activo; ?> </td>
                <td><a href="frmEditar.php?id=<?php echo $i->Id ?>" type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-dash"></i></button></td>
              </tr>
            <?php } ?>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade rounded-1" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ¿Está seguro de eliminar el contacto?
                  </div>
                  <div class="modal-footer">
                    <a href="Crud/borrarContacto.php?id=<?php echo $i->Id ?>" type="button" class="btn btn-danger">Eliminar <i class="bi bi-person-dash"></i></a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>


          </tbody>
        </table>
      </div>
    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>