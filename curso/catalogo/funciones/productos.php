<?php

    function listarProductos() : mysqli_result | bool
    {
        $link = conectar();
        $sql = "SELECT * , mkNombre, catNombre
                    FROM productos p
                     JOIN marcas m 
                       ON m.idMarca = p.idMarca
                     JOIN categorias c 
                       ON c.idCategoria = p.idCategoria";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }
