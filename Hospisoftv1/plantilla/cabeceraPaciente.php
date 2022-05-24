<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">C.M. La4ta - Panel De Administración</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link bg-dark text-light" aria-current="page" href="#">
      <?php 
        //Poner zona horaria
        date_default_timezone_set('America/Bogota');
        echo 'Fecha: '.date("d/m/Y h:i:s");
      ?>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark text-light" href="#"><i class="bi bi-person-circle">
    <b>
      <?php 
        //session_start();
        echo $_SESSION['usuarioActivo'];
      ?>
      </b>
    </i>
      
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark text-light" href="cerrarSistema.php"><i class="bi bi-box-arrow-right">  Salir del sistema</i></a>
  </li>
</ul>
</header>


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="panel.php">
              <span data-feather="home"></span>
              Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="app/paciente/listarMedicoEspecialidad.php">
              <span data-feather="file"></span>
              Listar medicos por especialidad
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="frmAgendarMedico.php">
              <span data-feather="shopping-cart"></span>
               Agendar cita con medicos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
               Imprimir historia clinica
            </a>
          </li>
        </ul>
      </div>
    </nav>