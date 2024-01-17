<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Formulario</h1>
<?php
    /*### isset()  si un dato EXISTE y NO ES NULO ###*/
    if( isset($_POST['dato']) ){
        /* captura de dato enviado por el formulario */
        $dato = $_POST['dato'];
        echo 'El dato enviado es: ', $dato;
    }
    else{
?>
    <form action="" method="post" class="shadow-sm mt-4">
        <input type="text" name="dato" class="form-control">
        <button class="btn btn-outline-success mt-3">
            enviar
        </button>
    </form>
<?php
    }
?>

    </main>
<?php
include '../layouts/footer.php';