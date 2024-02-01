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

    function subirImagen() : string
    {
        //si no enviaron archivo
        $prdImagen = 'noDisponible.svg';

        //si enviaron archivo && todo ok
        if( $_FILES['prdImagen']['error'] == 0 ){
            $dir = 'productos/';
            $nombreOriginal = $_FILES['prdImagen']['name'];
            $ext = pathinfo( $nombreOriginal, PATHINFO_EXTENSION ); // extension del archivo
            $tmp = $_FILES['prdImagen']['tmp_name'];
            ### renombramnos archivo
            $prdImagen = time().'.'.$ext;
            ### movemos archivo
            move_uploaded_file( $tmp, $dir.$prdImagen );
        }

        return $prdImagen;
    }

    function agregarProducto() : bool
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        $prdImagen = subirImagen();

        $link = conectar();
        $sql = "INSERT INTO productos
                    VALUE (
                        DEFAULT,
                        '".$prdNombre."',
                        ".$prdPrecio.",
                        ".$idMarca.",
                        ".$idCategoria.",
                        '".$prdDescripcion."',
                        '".$prdImagen."',
                        DEFAULT
                    )";
        try {
            return  mysqli_query($link, $sql);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return  false;
        }
    }