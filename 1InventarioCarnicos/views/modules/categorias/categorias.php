<?php

session_start();

if (!$_SESSION["nombreAdmin"]) {

    header("location:ingreso");

    exit();

}

?>
<ol class="breadcrumb">
    <li class="breadcrumb-item active">
        Sección Categorias de Productos
    </li>
</ol>
<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'okCategorias') {
        echo '<div id="oks" class="alert alert-success alert-dismissible fade show" role="alert">
<button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">
        ×
    </span>
</button>
<strong>
   Felicidades!
</strong>
La Categoria fue agregada correctamente.
</div>';
        echo '<meta http-equiv="Refresh" content="4;URL = categorias" >';
    }
    if ($_GET['action'] == 'editadoCat') {
        echo '
    <div class="alert alert-success alert-dismissible fade show" id="oks" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">
                ×
            </span>
        </button>
        <strong>
           Felicidades!
        </strong>
        La Categoria fue Editada correctamente al Sistema.
    </div>';
        echo '<meta content="4; URL = categorias" http-equiv="Refresh"> ';
    }
    if ($_GET['action'] == 'DeletCategorias') {
        echo '
        <div class="alert alert-warning alert-dismissible fade show" id="oks" role="alert">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">
                    ×
                </span>
            </button>
            <strong>
                Felicidades!
            </strong>
            La Categoria fue Borrada correctamente del sistema.
        </div>
        ';
        echo '
        <meta content="4;
        URL = categorias" http-equiv="Refresh">
            ';
    }
}
?>
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a class="list-group-item" href="categorias">
                            <i class="fa fa-list-alt">
                            </i>
                            Listado Categorias de Productos
                        </a>
                        <a class="list-group-item" href="agragarCategorias">
                            <i class="fa fa-edit">
                            </i>
                            Agregar Categorias de Productos Nuevos
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-block">
                            <?php if (isset($_GET['action'])): ?>
                            <?php if ($_GET['action'] == 'categorias' or $_GET['action'] == 'okCategorias' or $_GET['action'] == 'DeletCategorias' or $_GET['action'] == 'editarCat' or $_GET['action'] == 'editadoCat'): ?>
                            <h1 class="alert alert-warning text-center">
                                Listado de Categorias deProductos
                            </h1>
                            <table class="table table-striped table-sm" id="tablas">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <td>
                                            Id Categoria de Producto
                                        </td>
                                        <td>
                                        Nombre Categoria de Producto
                                        </td>
                                        <td>
                                            Acciones
                                        </td>
                                    </tr>
                                </thead>
<?php
$datos = new categoriasController();
$datos->getCategoriasController();
$datos->deleteCategoriaController();
?>
                            </table>
                            <?php endif?>
                            <?php if ($_GET['action'] == 'agragarCategorias'): ?>
                            <h1 class="alert alert-warning text-center">
                                Agregar Categoria Producto
                            </h1>
                            <form method="post" onsubmit="return validarCategorias()">
                                <div class="form-group" id="form">
                                    <label for="nombreCategorias">
                                        Nombre Categoria de Producto
                                    </label>
                                    <input class="form-control" id="nombreCategorias" name="nombreCategoria" placeholder="Nombre de Categoría" required="" type="text">
                                        <input name="" type="hidden">
                                            <span id="cat">
                                            </span>
                                        </input>
                                    </input>
                                </div>
                                <input class="btn btn-outline-danger btn-block" id="button" name="agragarCategorias" type="submit" value="Agregar Categorías">
                                </input>
                            </form>
                        </div>
                    </div>
                    <?php endif?>
                    <?php endif?>
                    <?php

$cat = new categoriasController();
$cat->agregarCategoriasController();

?>
                </div>
            </div>
