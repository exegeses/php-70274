<?php
    require 'config/config.php';
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Ingreso a sistema</h1>

        <div class="alert p-4 col-8 mx-auto shadow">
            <form action="login.php" method="post">

                <label for="email">Usuario (email)</label>
                <input type="email" name="usuEmail"
                       class='form-control' id="email" required>
                <br>
                <label for="clave">Contraseña</label>
                <input type="password" name="usuClave"
                       class='form-control' id="clave" required>
                <br>
                <button class="btn btn-dark my-2 px-4">
                    Ingresar
                </button>
            </form>
        </div>
<?php
        if( isset( $_GET['error'] ) ){
            $mensaje = match ( $_GET['error'] ){
                '1' => 'Nombre de usuario y/o clave incorrectos.',
                '2' => 'Debe loguearse para acceder a sistema.'
            };
?>
        <div class="alert alert-danger p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
        </div>
<?php
        }
?>
    </main>

<?php  include 'layouts/footer.php';  ?>