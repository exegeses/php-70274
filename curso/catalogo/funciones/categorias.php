<?php

/**
 * CRUD DE CATEGORIAS
 *
 * verCategoriaPorID()
 * agregarCategoria()
 * modificarCategoria()
 * eliminarCategoria()
 *
 */
function listarCategorias() : mysqli_result
{
    $link = conectar();
    $sql = "SELECT * FROM categorias";
    $resultado = mysqli_query( $link, $sql );
    return $resultado;
}