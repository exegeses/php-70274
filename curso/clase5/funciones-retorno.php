<?php
    include '../layouts/header.php';
    function calcularCuadrado( float $numero )
    {
        $resultado = $numero * $numero;
        return $resultado;
    }
    function sumar( float $numero1, float $numero2 ) : float
    {
            $resultado = $numero1 + $numero2;
            return $resultado;
    }
    function foo() : int
    {
        $x = 6;
        echo 'esto se va a imprimir';
        return $x;
    }
    function esPar( int $numero ) : string
    {
        if( $numero % 2 == 0 ){
            return 'es par';
        }
        return 'NO es par';
    }

?>
    <main class="container py-3">
        <h1>Función con retorno de valor</h1>
<?php
    //echo date('d/m/Y H:i:s');
    echo calcularCuadrado( sumar( 10, 20 ) );
?>
<hr>
<?php
    foo();
?>
<hr>
<?= esPar(6) ?>


    </main>
<?php
include '../layouts/footer.php';
