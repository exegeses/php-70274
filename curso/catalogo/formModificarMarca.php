<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marca = verMarcaPorID();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Modificación de una marca</h1>

        <div class="alert p-4 col-8 mx-auto shadow">
            <form action="modificarMarca.php" method="post">
                <div class="form-group">
                    <label for="mkNombre">Nombre de la Marca</label>
                    <input type="text" name="mkNombre"
                           value="<?= $marca['mkNombre'] ?>"
                           class="form-control" id="mkNombre" required>
                    <input type="hidden" name="idMarca"
                           value="<?= $marca['idMarca'] ?>">
                </div>

                <button class="btn btn-dark my-3 px-5">Modificar marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secondary sep">
                    Volver a panel de marcas
                </a>
            </form>
        </div>

    </main>

<?php  include 'layouts/footer.php';  ?>