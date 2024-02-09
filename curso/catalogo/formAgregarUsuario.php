<?php
    //require 'config/config.php';
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Registro de usuario</h1>


        <div class="alert p-4 col-8 mx-auto shadow">
            <form action="registrarUsuario.php" method="post">

                <div class='form-group mb-2'>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="usuNombre"
                           class='form-control' id="nombre" required>
                </div>
                <div class='form-group mb-2'>
                    <label for="apellido">Apellido</label>
                    <input type="text" name="usuApellido"
                           class='form-control' id="apellido" required>
                </div>
                <div class='form-group'>
                    <label for="email">Email</label>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="email" name="usuEmail"
                               class="form-control" id="email" required>
                    </div>
                </div>

                <div class='form-group'>
                    <label for="clave">Contraseña</label>
                    <input type="password" name="usuClave"
                           class='form-control' id="clave" required>
                </div>

                <button class='btn btn-dark my-3 px-4'>Registrar usuario</button>
                <a href="adminUsuarios.php" class='btn btn-outline-secondary'>
                    Volver a panel de usuarios
                </a>
            </form>

        </div>

    </main>

<?php  include 'layouts/footer.php';  ?>