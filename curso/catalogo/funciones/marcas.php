<?php

    function listarMarcas() : mysqli_result | bool
    {
        $link = conectar();
        $sql = "SELECT * 
                    FROM marcas
                    ORDER BY idMarca";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }


    /**
     * CRUD DE MARCAS
     *
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     *
     */

