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

    function verMarcaPorID() : array
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT *
                  FROM marcas
                  WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link, $sql );
        $marca = mysqli_fetch_assoc( $resultado );
        return $marca;
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

    function modificarMarca() : bool
    {
        //capturamos dato enviado por el form
        $mkNombre = $_POST['mkNombre'];
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "UPDATE marcas
                  SET mkNombre = '".$mkNombre."'
                  WHERE idMarca = ".$idMarca;
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
     * eliminarMarca()
     *
     */

