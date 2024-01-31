<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Formulario para subir un archivo</h1>

        <div class="col-8 mx-auto my-3 p-4 alert alert-secondary">
        <form action="subir-archivo.php" method="post" enctype="multipart/form-data">
            <input type="file" name="prdImagen" class="form-control">
            <button class="btn btn-outline-success m-3">publicar</button>
        </form>
        </div>
    </main>
<?php
include '../layouts/footer.php';
