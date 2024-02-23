<?php
    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    require 'funciones/categorias.php';
    require 'funciones/productos.php';
    $marcas = listarMarcas();
    $categorias = listarCategorias();
    $productos = buscaProductos();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Catálogo de productos</h1>

        <!-- buscador de productos -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <div class="row g-3">
            <div class="col-sm-7">
                <input type="text" name="search" class="form-control" placeholder="Nombre de producto">
            </div>
            <div class="col-sm">
                <select name="idMarca" class="form-select">
                    <option value="">Todas las Marcas</option>
        <?php
                while ( $marca = mysqli_fetch_assoc( $marcas ) ){ 
        ?>
                    <option value="<?= $marca['idMarca'] ?>"><?= $marca['mkNombre'] ?></option>
        <?php
                }
        ?>
                </select>
            </div>
            <div class="col-sm">
                <select name="idCategoria" class="form-select">
                    <option value="">Todas las Categoría</option>
    <?php
            while ( $categoria = mysqli_fetch_assoc( $categorias ) ){
    ?>
                    <option value="<?= $categoria['idCategoria'] ?>"><?= $categoria['catNombre'] ?></option>
    <?php
            }
    ?>
                </select>
            </div>
        </div>
        <div class="row g-3 mt-1">
            <button class="btn btn-dark">buscar</button>
        </div>
        </form>
        <!-- fin buscador de productos -->
<?php
        if( isset($_GET['search']) ){
?>
        <div class="row g-3 mt-3">
            Búsqueda realizada: <?= $_GET['search'] ?>
        </div>
<?php
        }
#####################
####   si NO se encontraron resultados
        if( mysqli_num_rows($productos) == 0 ){
?>
        <div class="row g-3 mt-3">
            No se encontraron resultados para su búqueda.
        </div>
<?php
        }
?>
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