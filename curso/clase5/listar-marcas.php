<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Listado de marcas</h1>
<?php
/* Conexión a server + Selección de base de datos */
    $link = mysqli_connect(
            'localhost',
            'root',
            'root',
            'catalogo70274'
    );

    //creación de mensaje SQL
    $sql = "SELECT * FROM marcas";

    //Ejecución de mensaje SQL
    $resultado = mysqli_query( $link, $sql );
?>
<?php
    // reporte (imprimimos el listado)
    //echo $resultado

    while ( $marca = mysqli_fetch_assoc($resultado) ){

        echo $marca['idMarca'], ' ', $marca['mkNombre'], '<br>';

    }
?>

    </main>
<?php
include '../layouts/footer.php';
