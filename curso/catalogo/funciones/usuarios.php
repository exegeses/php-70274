<?php

    function listarUsuarios() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT * 
                    FROM usuarios 
                    ORDER BY idUsuario";
        return mysqli_query($link, $sql);
        }

    function registrarUsuario()
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail = $_POST['usuEmail'];
        $usuClave = $_POST['usuClave'];
        $claveHash = password_hash($usuClave, PASSWORD_DEFAULT);
        $link = conectar();
        $sql = "INSERT INTO usuarios
                  VALUE
                    (
                        DEFAULT, 
                        '".$usuNombre."',
                        '".$usuApellido."',
                        '".$usuEmail."',
                        '".$claveHash."',
                        DEFAULT,
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

    function modificarClave() : bool
    {
        //Capturamos la clave actual sin encriptar
        $clave = $_POST['clave'];

        /* Obtenemos la clave encriptada */
        $link = conectar();
        $sql = "SELECT usuClave 
                  FROM usuarios 
                    WHERE idUsuario = ".$_SESSION['idUsuario'];
        $resultado = mysqli_query( $link, $sql );
        $usuario = mysqli_fetch_assoc( $resultado );
        /* Verificamos si NO coincidan */
        if( !password_verify($clave, $usuario['usuClave']) ){
            // Si no coinciden --> redirección al formulario de modificación
            header('location: formModificarClave.php?error=1');
            return false;
        }
        /*####
        ### En este punto sabemos que la contraseña actual es correcta
        ###*/
        //Comparemos que la contraseña nueva y la contraseña repetida
        // NO coincidan
        if( $_POST['newClave'] != $_POST['newClave2'] ){
            // Si no coinciden --> redirección al formulario de modificación
            header('location: formModificarClave.php?error=2');
            return false;
        }
        /*####
        ### En este punto sabemos que la contraseña actual es correcta
        ### Y que la clave nueva y la clave repetida coinciden
        ###*/
        // Ahora en encritamos la clave nueva
        $newClaveHash = password_hash($_POST['newClave'], PASSWORD_DEFAULT);
        ### Finalmente podemos almacenar la nueva contraseña en la tabla usuarios
        $sql = "UPDATE usuarios
                  SET usuClave = '".$newClaveHash."'
                  WHERE idUsuario = ".$_SESSION['idUsuario'];
        try {
            return mysqli_query($link, $sql);
        }
        catch ( Exception $e ){
            echo $e->getMessage();
            return false;
        }
    }