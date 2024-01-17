<?php
    include '../layouts/header.php';
    //declaración
    function strong( string $frase )
    {
        $mensaje = '<b>'.$frase.'</b><br>';
        echo $mensaje;
    }
    function sumar( float $num1, float $num2 )
    {
        $resultado = $num1 + $num2;
        echo $resultado;
    }
?>
    <main class="container py-3">
        <h1>Funciones en PHP</h1>
<?php
    //invocación o ejecución de funciones
    strong('Hola Mundo!');
    strong('PHP y MySQL');
?>
<hr>
<?php
    sumar(3.5, 6);
?>


    </main>
<?php
include '../layouts/footer.php';
