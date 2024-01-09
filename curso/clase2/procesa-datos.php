<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Proceso de datos enviados</h1>
<?php
    //mostrar el dato enviado por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    echo 'Tu nombre es: ', $nombre, '<br>';
    echo 'Tu nombre es: ', $email;
?>


    </main>
<?php
include '../layouts/footer.php';