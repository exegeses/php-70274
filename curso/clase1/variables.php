<?php
    // declaración de variables  $
    $numero = 42;
    $fruta1 = 'manzana';
    $fruta2 = 'pera';
    $fruta3 = 'kiwi';
    $minimo = 100000;
    $maximo = 200000;
    $curso = 'Desarrollo web con PHP y MySQL';
?>
    <h1>Variables y constantes en PHP</h1>
<?php
    //echo 'Frutas: ', $fruta1,' ',$fruta2,' ',$fruta3;
    $sql = "SELECT prdNombre, prdPrecio, prdFoto
                FROM productos
              WHERE prdPrecio BETWEEN ".$minimo." AND ".$maximo;

    echo 'Curso: ', $curso;
    echo '<br>';
    echo 'Numero: ', $numero;
