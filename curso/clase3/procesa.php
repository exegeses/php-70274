<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Captura del Checkbox</h1>
<?php
    //isset  --> si EXISTE y NO ES NULO
    if( isset($_POST['marcado']) ) {
        //capturamos el dato
        $marcado = $_POST['marcado'];
        echo 'chekbox seleccionado';
    }
    else{
        echo 'no se ha seleccionado el chekbox ';
    }
?>

    </main>
<?php
include '../layouts/footer.php';