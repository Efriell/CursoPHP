<?php
require_once 'plantilla/cabecera.php';
?>
<!-- INICIO DEL CONTENIDO -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crud de Contactos</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h3>Registro de Contactos</h3>
                    <div class="card-body">
                        <form action="crud/insertarContacto.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono1">
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Movil</label>
                                <input type="text" class="form-control" name="movil" id="movil">
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="bi bi-save-fill"></i></button>
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
    <!-- FIN DEL CONTENIDO -->
    <?php
    require_once 'plantilla/footer.php';
    ?>