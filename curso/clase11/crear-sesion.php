<?php
    //directiva de sesión
    session_start();
    // si la sesión no existe, la crea.
    // Si existe, la utiliza (te deja usar la sesión)

    /* registarmos variables de sesión */
    $_SESSION['nombre'] = 'marcos';
    $_SESSION['numero'] = 666;
    $_SESSION['cart'] = [
                            77=>1,
                            91=>2,
                        ];

    /* cart|a:2:{i:77;i:1;i:91;i:2;} */

    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Creación de sesiones</h1>


    </main>
<?php
include '../layouts/footer.php';
