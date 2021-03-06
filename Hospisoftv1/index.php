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
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#frmLogin"><i class="bi bi-key-fill"> Login pacientes</i></a>
                        </li>
                    </ul>
                    <a class="nav-link text-light" data-bs-toggle="modal" data-bs-target="#frmLoginMedico"><i class="bi bi-person-rolodex"> M??dicos</i></a>
                </div>
            </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/hms.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black">
                        <h5>Laboratorios de ??ltima tecnolog??a</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/hms2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black">
                        <h5>M??dicos especialistas</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/hms3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-black">
                        <h5>Atenci??n Personalizada</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row mt-3 p-3">
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/especialista.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Especialistas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver m??s...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/hospitaliza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Servicio al cliente</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/Microscopio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laboratorio</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 p-5 bg-dark text-white">
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
    <!-- Modal login paciente -->
    <div class="modal fade" id="frmLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Login del Sistema</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="app/paciente/validarSesionPaciente.php" method="POST">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario: </label>
                            <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="Usuario">
                            <div id="usuario" class="form-text">Ingrese su usuario registrado en el sistema.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contrase??a: </label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <p class="w-100 text-center">??A??n no tiene cuenta? <a href="frmRegistroPaciente.php">Registrese aqu??.</a></p>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-secondary" value="Cancelar" data-bs-dismiss="modal">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal login medico -->
    <div class="modal fade" id="frmLoginMedico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Acceso de Medicos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="app/medico/validarSesionMedico.php" method="POST">
                        <div class="mb-3">
                            <label for="idMedico" class="form-label">Identificacion: </label>
                            <input type="text" name="idMedico" class="form-control" id="idMedico" aria-describedby="Usuario">
                            <div id="idMedico" class="form-text">Ingrese su usuario registrado en el sistema.</div>
                        </div>
                        <div class="mb-3">
                            <label for="passwordMedico" class="form-label">Contrase??a: </label>
                            <input type="password" name="passwordMedico" class="form-control" id="passwordMedico">
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-secondary" value="Cancelar" data-bs-dismiss="modal">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
                </form>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>