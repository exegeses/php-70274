<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $producto = verProductoPorID();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Baja de un producto</h1>

        <div class="card mx-auto border-danger bg-danger-subtle text-danger-emphasis w-640">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="productos/<?= $producto['prdImagen'] ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body p-3">
                        <span class="fs-4 sep d-block"><?= $producto['prdNombre'] ?></span>
                        <span class="d-block sep m-3"><?= $producto['mkNombre'] ?> - <?= $producto['catNombre'] ?></span>
                        <span class="d-block sep">$<?= $producto['prdPrecio'] ?></span>
                        <form action="eliminarProducto.php" method="post">
                            <input type="hidden" name="idProducto"
                                   value="<?= $producto['idProducto'] ?>">
                            <button class="btn btn-danger my-3 px-4">Confirmar baja</button>
                            <a href="adminProductos.php" class="btn btn-outline-secondary sep">
                                Volver a panel
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </main>

<?php
    include 'layouts/footer.php';
?>