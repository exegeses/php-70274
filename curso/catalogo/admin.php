<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Dashboard</h1>

        <div class="list-group">
            <a href="adminMarcas.php" class="list-group-item list-group-item-action">
                Panel de administración de marcas.
            </a>
            <a href="adminCategorias.php" class="list-group-item list-group-item-action">
                Panel de administración de categorías.
            </a>
            <a href="adminProductos.php" class="list-group-item list-group-item-action">
                Panel de administración de productos.
            </a>
            <a href="adminUsuarios.php" class="list-group-item list-group-item-action">
                Panel de administración de usuarios.
            </a>
        </div>

    </main>

<?php  include 'layouts/footer.php';  ?>