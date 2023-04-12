<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active animated fadeInLeft">Inicio</li>
      </ol>
      <section class="header animated fadeInDown">
        <h1>Login</h1>
      </section>
      <div class="main">
        <form action="index.php" method="post">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
              <input name="nombre" class="form-control" type="text" placeholder="Nombre Usuario" required="">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
              <input name="password" class="form-control" type="password" placeholder="Password" required="">
            </div>
          </div>
          <?php 
            $ingreso = new Ingreso();
            $ingreso->ingresoController();
          ?>
          <?php if (!isset($_SESSION['nombreAdmin'])) { ?>
            <button type="submit" class="btn btn-primary">Ingresar</button>
          <?php } ?>
        </form>
      </div>
    </div>
  </div>
</div>