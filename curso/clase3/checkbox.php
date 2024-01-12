<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Checkbox</h1>

        <form action="procesa.php" method="post">
            ¿Desea marcar el checkbox?
            <input type="checkbox" name="marcado">
            <br>
            <button class="btn btn-light">enviar</button>
        </form>

    </main>
<?php
include '../layouts/footer.php';