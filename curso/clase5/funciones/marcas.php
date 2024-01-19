<?php

    function listarMarcas() : mysqli_result
    {
        $link = conectar();
        $sql = 'SELECT * FROM marcas';
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }
