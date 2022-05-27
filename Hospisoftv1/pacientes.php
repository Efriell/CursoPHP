<?php
require_once 'plantilla/cabecera.php';
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Crud de Contactos</h5>
    </div>
<!-- INICIO DEL CONTENIDO -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="crud/insertarPaciente.php" method="POST">
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
                                <label for="nombre" class="form-label">clave</label>
                                <input type="text" class="form-control" name="clave" id="telefono1">
                            </div>

                            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-save-fill"></i>  Guardar</button>
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
                            <th scope="col">Clave</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'app/paciente/listarPaciente.php';
                        foreach ($pacientes as $i) {
                        ?>
                            <tr>
                                <td><?php echo $i->idPaciente; ?> </td>
                                <td><?php echo $i->nombrePaciente; ?> </td>
                                <td><?php echo $i->apellidosPaciente; ?> </td>
                                <td><?php echo $i->email; ?> </td>
                                <td><?php echo $i->passwordPaciente; ?> </td>
                                <td><a href="frmEditar.php?id=<?php echo $i->idPaciente ?>" type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
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
                                        ¿Está seguro de eliminar el Paciente?
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

    <!-- FIN DEL CONTENIDO -->
    <?php
    require_once 'plantilla/footer.php';
    ?>