<?php
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marcas = listarMarcas();
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Listado de marcas</h1>


        <ul>
<?php
        while (  $marca  =  mysqli_fetch_assoc($marcas)  ){
?>
            <li><?= $marca['mkNombre'] ?></li>
<?php
        }
?>
        </ul>


    </main>
<?php
include '../layouts/footer.php';
