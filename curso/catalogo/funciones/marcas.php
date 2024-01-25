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

    function agregarMarca() : bool
    {
        //capturamos dato enviado por el form
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas 
                    VALUE
                        ( 
                            DEFAULT,
                            '".$mkNombre."'
                         )";
        try {
            $resultado = mysqli_query($link, $sql);
            return  $resultado;
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return  false;
        }
    }

    /**
     * CRUD DE MARCAS
     *
     * verMarcaPorID()
     * modificarMarca()
     * eliminarMarca()
     *
     */

