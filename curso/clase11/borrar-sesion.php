<?php
    session_start();
    unset($_SESSION['cart']); // eliminar una sola variable
    session_unset(); // Eliminar todas las variables de sesión
    session_destroy(); // Eliminar la sesión
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Borrar datos de sesión</h1>


    </main>
<?php
include '../layouts/footer.php';
