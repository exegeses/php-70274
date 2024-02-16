<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        logout();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Cerrar sesión</h1>

        <p>
            Gracias por su visita
        </p>
    </main>

<?php
    include 'layouts/footer.php';
?>