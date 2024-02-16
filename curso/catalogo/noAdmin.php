<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>¡Advertencia!</h1>

        <p class="alert alert-warning shadow col-8 mx-auto ">
            Debe ser administrador para realizar esta tarea.
        </p>

    </main>

<?php
    include 'layouts/footer.php';
?>