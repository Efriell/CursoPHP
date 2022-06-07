<?php
session_start();
require_once 'plantilla/cabeceraMedico.php';
/* if(!isset($_SESSION['usuarioActivo'])){
    header('Location:index.php');
}else{
    require_once 'plantilla/cabecera.php';
 */
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Gráficas</h5>
    </div>
    <!-- INICIO DEL CONTENIDO -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3">
                <div class="card">
                    <div class="card-header">
                        Datos Generales
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="fecha" class="form-label">Fecha</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha">
                                </div>
                                <div class="col-md-4">
                                    <label for="Medico" class="form-label">Médico:</label>
                                    <input type="text" class="form-control" id="Medico" name="Medico">
                                </div>
                                <div class="col-md-4">
                                    <label for="idPaciente" class="form-label">Identificacion paciente:</label>
                                    <input type="text" class="form-control" id="idPaciente" name="idPaciente">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <label for="fecha" class="form-label">Nombre Paciente:</label>
                                    <input type="text" class="form-control" id="fecha" name="fecha">
                                </div>
                                <div class="col-md-4">
                                    <label for="fechaNacimientoPaciente" class="form-label">Fecha Nacimiento del Paciente:</label>
                                    <input type="date" class="form-control" id="fechaNacimientoPaciente" name="fechaNacimientoPaciente">
                                </div>
                                <div class="col-md-4">
                                    <label for="edadPaciente" class="form-label">Edad del Paciente:</label>
                                    <input type="text" class="form-control" id="edadPaciente" name="edadPaciente">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-3">
                <div class="card">
                    <div class="card-header">
                        Precondiciones
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Diabetes
                                </div>
                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Colesterol
                                </div>
                                <div class="col-md-3">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Hipertensión
                                </div>
                                <div class="col-md-3">
                                    <label for="">Otra Condicion:</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-3">
                <div class="card">
                    <div class="card-header">
                        Chequeo Básico
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="presionAlta" class="form-label">Presión Alta:</label>
                                    <input type="text" class="form-control" id="presionAlta" name="presionAlta">
                                </div>
                                <div class="col-md-4">
                                    <label for="presionBaja" class="form-label">Presión Baja:</label>
                                    <input type="text" class="form-control" id="presionBaja" name="presionBaja">
                                </div>
                                <div class="col-md-4">
                                    <label for="saturacion" class="form-label">Saturación:</label>
                                    <input type="text" class="form-control" id="saturacion" name="saturacion">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-3">
                <div class="card">
                    <div class="card-header">
                        Informe
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Reporte del paciente:</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Diagnostico Medico:</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary"><i class="bi bi-box-arrow-right">  Formula Medica</i></button>
                                    <button type="button" class="btn btn-secondary">Cancelar</button>
                                    <button type="button" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- FIN DEL CONTENIDO -->
    <?php
    require_once 'plantilla/footer.php';
        /* } */;
    ?>