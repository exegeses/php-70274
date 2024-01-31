<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Publicación de un archivo</h1>

        <div class="col-8 mx-auto my-3 p-4 alert alert-secondary">
<?php
    //capturamos archivo enviado
    $prdImagen = $_FILES['prdImagen'];
    echo '<pre class="fs-5">';
    print_r($prdImagen);
    echo '</pre>';
?>
    Nombre de archivo: <?= $_FILES['prdImagen']['name'] ?>
    <br>
    Tipo de archivo: <?= $_FILES['prdImagen']['type'] ?>
<?php
    $dir = 'productos/'; //directorio
    $nombreOriginal = $_FILES['prdImagen']['name'];
    $ext = pathinfo( $nombreOriginal, PATHINFO_EXTENSION ); // extension del archivo
    $tmp = $_FILES['prdImagen']['tmp_name'];
    ### renombramnos archivo
    $nombreNuevo = time().'.'.$ext;
    ### movemos archivo
    move_uploaded_file( $tmp, $dir.$nombreNuevo );
?>
<br>
            
            
        </div>
    </main>
<?php
include '../layouts/footer.php';
