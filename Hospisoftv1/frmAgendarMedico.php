<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['usuarioActivo'])) {
    header('Location:index.php');
} else {
    require_once 'app/medico/listarMedicos.php';
    require_once 'plantilla/cabeceraPaciente.php';
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h5>Agendar Citas</h5>
        </div>
        <!-- INICIO DEL CONTENIDO -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agendar cita</h5>
                            <div class="alert alert-<?php echo $_SESSION['tipo']; ?> alert-dismissible fade show" role="alert">
                                <?php echo $_SESSION['mensaje'];
                                
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <form action="app/paciente/insertarCita.php" method="POST">
                                <div class="mb-3">
                                    <label for="fechaCita" class="form-label">Fecha de la cita</label>
                                    <input type="date" class="form-control" id="fechaCita" name="fechaCita">
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="horaCita" class="form-label">Hora</label>
                                    <input type="time" class="form-control" id="horaCita" name="horaCita">
                                </div> -->
                                <div class="mb-3">
                                    <label class="form-check-label" for="horaCita">Hora Cita</label>
                                    <select class="form-select" name="horaCita" id="">
                                        <option value="0800">8:00 AM</option>
                                        <option value="0900">9:00 AM</option>
                                        <option value="1000">10:00 AM</option>
                                        <option value="1100">11:00 AM</option>
                                        <option value="1300">1:00 PM</option>
                                        <option value="1400">2:00 PM</option>
                                        <option value="1500">3:00 PM</option>
                                        <option value="1600">4:00 PM</option>
                                        <option value="1700">5:00 PM</option>
                                        <option value="1700">5:00 PM</option>
                                    </select>
                                    <br>
                                    <label for="medico">Medico</label>
                                    <select class="form-select" name="medico" id="">
                                        <?php foreach ($medico as $i) : ?>
                                            <option value="<?php echo $i->idMedico; ?>"><?php echo $i->nombreMedico . ' ' . $i->apellidosMedico . ' - ' . $i->especialidad; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <br>
                                    <label for="motivoCita">Motivo de la consulta</label>
                                    <br>
                                    <textarea name="motivoCita" id="motivoCita" cols="60" rows="10"></textarea>
                                    <br>
                                    <input type="text" name="idPaciente" hidden value="<?php echo $_SESSION['idUsuario'];?>" id="idPaciente">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="images/médicos-influencers-en-Instagram.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- FIN DEL CONTENIDO -->
    <?php
    require_once 'plantilla/footer.php';
};
    ?>