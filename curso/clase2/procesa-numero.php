<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Proceso de dato enviado por el form</h1>
<?php
/* haciendo un echo de un elemento <img> */
    $numero = $_POST['numero'];
    if( $numero < 100 ){
        echo '<img src="imgs/ok.png">';
    }
    else{
        echo '<img src="imgs/error.png">';
    }
?>
<hr>
<?php
    /* abrir y cerrar PHP para las imágenes */
    if( $numero < 100 ){
?>
        <img src="imgs/ok.png">
<?php
    }
    else{
?>
        <img src="imgs/error.png">
<?php
    }
?>
<hr>
<?php
    /* utilizando variables */
    $im = 'error';
    if ($numero < 100) {
        $im = 'ok';
    }
?>
        <img src="imgs/<?= $im ?>.png">


    </main>
<?php
    include '../layouts/footer.php';
