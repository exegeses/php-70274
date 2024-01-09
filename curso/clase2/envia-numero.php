<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Formulario de envío</h1>

        Escriba un número
        <form action="procesa-numero.php" method="post">
            <input type="number" name="numero" class="form-control">
            <button class="btn btn-outline-secondary mt-3">enviar</button>
        </form>
    </main>
<?php
    include '../layouts/footer.php';
