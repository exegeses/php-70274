<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Catálogo de productos</h1>

        <!-- buscador de productos -->
        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" name="search" class="form-control" placeholder="Nombre de producto">
            </div>
            <div class="col-sm">
                <select name="idMarca" class="form-select">
                    <option value="">Todas las Marcas</option>
                </select>
            </div>
            <div class="col-sm">
                <select name="idCategoria" class="form-select">
                    <option value="">Todas las Categoría</option>
                </select>
            </div>
        </div>
        <div class="row g-3 mt-1">
            <button class="btn btn-dark">buscar</button>
        </div>
        <!-- fin buscador de productos -->

        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 py-5">
    <?php
        while ( $producto = mysqli_fetch_assoc( $productos ) ){
    ?>
            <div class="col card mx-2 pt-2">
                <img src="productos/<?= $producto['prdImagen'] ?>" class="card-img-top">
                <div class="card-body">
                    <spam class="fs-4"><?= $producto['prdNombre'] ?></spam>
                    <span class="d-block sep m-3"><?= $producto['mkNombre'] ?> - <?= $producto['catNombre'] ?></span>
                    <span class="d-block sep precio3">$<?= $producto['prdPrecio'] ?></span>
                    <a href="#!" class="btn btn-outline-secondary sep mt-4">
                        ver detalle
                    </a>
                </div>
            </div>
    <?php
        }
    ?>
        </div>
    </main>

<?php
    include 'layouts/footer.php';
?>