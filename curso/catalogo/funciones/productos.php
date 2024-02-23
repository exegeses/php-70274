<?php

function busqueda() : array
{
    $search['search'] = $_GET['search'] ?? '';
    $search['idMarca'] = $_GET['idMarca'] ?? '';
    $search['idCategoria'] = $_GET['idCategoria'] ?? '';

    return $search;
}

function buscaProductos() : mysqli_result | bool
{
    $search = busqueda();
    $link = conectar();
    $sql = "SELECT *
                    FROM productos p
                     JOIN marcas m 
                       ON m.idMarca = p.idMarca
                     JOIN categorias c 
                       ON c.idCategoria = p.idCategoria
                   WHERE prdNombre LIKE '%".$search['search']."%'";
// Sólo concatenamos marca si hay un valor DISTINTO de vacío
    if( $search['idMarca'] != '' ){
        $sql .= " AND p.idMarca = ".$search['idMarca'];
    }
// Sólo concatenamos categoria si hay un valor DISTINTO de vacío
    if( $search['idCategoria'] != '' ){
        $sql .= " AND p.idCategoria = ".$search['idCategoria'];
    }

    return  mysqli_query( $link, $sql );
}


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

    function verProductoPorID() : array
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT * , mkNombre, catNombre
                        FROM productos p
                         JOIN marcas m 
                           ON m.idMarca = p.idMarca
                         JOIN categorias c 
                           ON c.idCategoria = p.idCategoria
                     WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query( $link, $sql );
        return mysqli_fetch_assoc( $resultado );
    }

    function subirImagen() : string
    {
        /* //si no enviaron archivo (agregarProducto())
        $prdImagen = 'noDisponible.svg';

        //si no enviaron archivo (modificarProducto())
        if( isset($_POST['imgActual']) ){
            $prdImagen = $_POST['imgActual'];
        } */

        $prdImagen = $_POST['imgActual'] ?? 'noDisponible.svg';

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

    function modificarProducto() : bool
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        $prdImagen = subirImagen();
        $idProducto = $_POST['idProducto'];

        $link = conectar();
        $sql = "UPDATE productos
                    SET 
                        prdNombre =  '".$prdNombre."',
                        prdPrecio =  ".$prdPrecio.",
                        idMarca =  ".$idMarca.",
                        idCategoria =  ".$idCategoria.",
                        prdDescripcion =  '".$prdDescripcion."',
                        prdImagen =  '".$prdImagen."'
                    WHERE idProducto = ". $idProducto;
        try {
            return  mysqli_query($link, $sql);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return  false;
        }
    }

    function eliminarProducto() : bool
    {
        $idProducto = $_POST['idProducto'];
        $link = conectar();
        $sql = "DELETE FROM productos
                  WHERE idProducto = ".$idProducto;
        try {
            return  mysqli_query($link, $sql);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return  false;
        }
    }