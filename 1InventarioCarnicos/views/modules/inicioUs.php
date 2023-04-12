<?php

session_start();

if(!$_SESSION["nombreAdmin"]){

	header("location:ingreso");

	exit();

}

?>
<body class="body">
    <div class="mains">
        <div class="card bg-info">
            <div class="card-block text-center">
                Esta sección es exclusiva para  Usuarios del sistema.
            </div>
        </div>
        <br>
            <div class="row">
                <!-- <center> -->


            </div>














     <!-- Page Content-->
     <div class="container px-4 px-lg-5 -center">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="views/bootstrap/img/logsin.png" alt="..." /></div>
                <div class="col-lg-7">
                    <div class="card">
                    <div class="card-block text-center">
                            <h2>
                                Bienvenido Usuario
                            </h2>
                            <div class="alert alert-info ">
                                <h3>
                                    <strong>
                                        <?php echo strtoupper($_SESSION['nombreAdmin']); ?>
                                    </strong>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- llamada a la accion-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">¡Ven a nuestra carnicería y descubre por ti mismo la variedad de opciones frescas y deliciosas que tenemos para ofrecerte!</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Card One</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Card Two</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Card Three</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>













            <?php 
		$admin = new Admin();
		$admin->
            fecha();
		?>
        </br>
    </div>
</body>