<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="inicio">Inventario</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="categorias" id="cate">Productos <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <?php if ($_SESSION['rol'] == 'A'): ?>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> <?php echo strtoupper($_SESSION['nombreAdmin']); ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="config"><i class="fa fa-gear"></i> Configuración</a>
          <a class="dropdown-item" href="https://.co/" target="_blank"><i class="fa fa-support"></i> Soporte</a>
          <a class="dropdown-item" href="sesion"><i class="fa fa-close"></i> Salir</a>
        </div>
      </li>
    </ul>
    <?php else: ?>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> <?php echo strtoupper($_SESSION['nombreAdmin']); ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="sesion"><i class="fa fa-close"></i> Salir</a>
        </div>
      </li>
    </ul>
    <?php endif ?>
  </div>
</nav>

