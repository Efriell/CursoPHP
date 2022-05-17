<?php 
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./images/nurse.ico" type="image/x-icon">

    <title>C.M. La 4ta</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <img src="./images/LOGO.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-2">
                Cra 100 con 98 <br>
                Edificio la Ceiba <br>
                Cali - Valle
            </div>
            <div class="col-md-2">
                Email: clinicala4ta@gmail.com <br>
                Citas medicas: 3032373277
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">+</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-heart-fill"> Inicio</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-info-square-fill"> Acerca de</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-journal-plus"> Citas</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-people-fill"> Contacto</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#frmLogin" href="panel.php"><i class="bi bi-key-fill"> Login</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-12 mt-3
             text-center">
                <h3>Registro del paciente</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Registro de Pacientes</h5>
                        <?php echo $resultado; ?>
                        <form action="app/paciente/insertarPaciente.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombres</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono1">
                            </div>
                            <div class="mb-3">
                                <label for="Movil" class="form-label">Movil</label>
                                <input type="text" class="form-control" name="movil" id="movil">
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="fechaNac" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="fechaNac" id="fechaNace">
                        </div>
                        <div class="mb-3">
                            <label for="epsPaciente" class="form-label">E.P.S</label>
                            <input type="text" class="form-control" name="epsPaciente" id="eps">
                        </div>
                        <div class="mb-3">
                            <label for="usuarioPaciente" class="form-label">Usuario del sistema</label>
                            <input type="text" class="form-control" name="usuarioPaciente" id="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="clave" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" name="clave" id="password">
                        </div>
                        <div class="mb-3 d-flex justify-content-evenly pt-4">
                            <button type="submit" class="btn btn-primary w-50"><i class="bi bi-save-fill"></i> Guardar</button>
                            <a class="btn btn-primary w-25" href="">Cancelar</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                Publicidad
            </div>
        </div>
        <div class="row mt-5 mx-1 p-5 bg-dark text-white">
            <div class="col-md-6">
                <i class="bi bi-hospital-fill"></i><br>
                Cra 100 con 98 <br>
                Edificio la Ceiba <br>
                Cali - Valle
            </div>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="frmLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Login del Sistema</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario: </label>
                            <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="Usuario">
                            <div id="usuario" class="form-text">Ingrese su usuario registrado en el sistema.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña: </label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <p class="w-100 text-center">¿Aún no tiene cuenta? <a href="frmRegistroPaciente.php">Registrese aquí.</a></p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>