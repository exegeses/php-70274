<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
	include 'layouts/header.php';
	include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Panel de administración de productos</h1>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

        <table class="table table-borderless table-striped table-hover">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th colspan="2">
                        <a href="formAgregarProducto.php" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
            while ( $producto = mysqli_fetch_assoc( $productos ) ) {
?>            
                <tr>
                    <td><img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail"></td>
                    <td><?= $producto['prdNombre'] ?></td>
                    <td><?= $producto['prdPrecio'] ?></td>
                    <td><?= $producto['mkNombre'] ?></td>
                    <td><?= $producto['catNombre'] ?></td>
                    <td>
                        <a href="formModificarProducto.php?idProducto=<?= $producto['idProducto'] ?>" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarProducto.php?idProducto=<?= $producto['idProducto'] ?>" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php
            }
?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a dashboard
        </a>

    </main>

<?php  include 'layouts/footer.php';  ?>