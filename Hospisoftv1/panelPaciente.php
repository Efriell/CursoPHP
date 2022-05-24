<?php
session_start();
if(!isset($_SESSION['usuarioActivo'])){
    header('Location:index.php');
}else{
    require_once 'plantilla/cabeceraPaciente.php';

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Gráficas</h5>
    </div>
<!-- INICIO DEL CONTENIDO -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    Hola
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, pariatur vel a quidem ea necessitatibus similique est alias blanditiis adipisci quisquam facere suscipit quasi repellat laborum eligendi incidunt assumenda cum.
                    Libero corporis, magnam quam asperiores distinctio reprehenderit. Eligendi, sapiente incidunt sequi temporibus suscipit illo, optio, aperiam inventore maxime culpa tempora molestias dolorem ad eaque perspiciatis veniam ex facere veritatis vero?
                    Exercitationem molestias in unde quisquam voluptates deleniti delectus necessitatibus, cumque excepturi dolorum quaerat quam, iste earum consectetur natus eius pariatur, quod maiores eum accusantium ullam sapiente! Quod soluta ducimus corrupti!
                    Natus praesentium autem qui obcaecati quis debitis cupiditate repellat facilis sit recusandae similique dolorum nostrum architecto ex, optio voluptas ea, quam fuga corporis. Dolores facere iste, nisi architecto quod nulla.
                    Est consequuntur doloremque commodi sit fugit, voluptatem minus delectus, itaque reprehenderit cum ipsam quis odio excepturi saepe sed ad repellendus explicabo tenetur. Corporis ad illum unde doloribus quos sapiente quasi!
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="images/médicos-influencers-en-Instagram.jpg" alt="">
            </div>
        </div>

    </div>
    <!-- FIN DEL CONTENIDO -->
    <?php
        require_once 'plantilla/footer.php';
        };
    ?>