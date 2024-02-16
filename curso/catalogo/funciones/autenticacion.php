<?php

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuClave = $_POST['usuClave'];
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido,
                       usuClave, idRol
                   FROM usuarios
                   WHERE usuEmail = '".$usuEmail."'
                     AND usuActivo = 1";
        $resultado = mysqli_query( $link, $sql );
        $cantidad = mysqli_num_rows($resultado);
        /*## si $cantidad == 0  -> se logueó MAL
         *## si $cantidad == 1  -> se logueó BIEN
         * */
        if( $cantidad == 0 ){
            // redirección a formLogin  enviando error
            header('location: formLogin.php?error=1');
            return;
        }
        /*##
        ### acá sabemos que el e-mail está correcto
        ### y que el usuario está activo
        ###*/
        //verificamos contraseña
        $arrayUsuario = mysqli_fetch_assoc($resultado);
        if( !password_verify( $usuClave, $arrayUsuario['usuClave'] ) ){
            /* al negar password_verify() sabemos si se logueó mal
            * entonces redirigimos al formLogin con mensaje de error
             * */
            header('location: formLogin.php?error=1');
            return;
        }
        /* Si llegamos a este punto el usuario se logueó correctamente
         *  entonces comenzamos la rutina de autenticación (sesiones)
         */
        ############# RUTINA DE AUTENTICACIÓN ##################
        $_SESSION['login'] = 1; //token

        $_SESSION['usuEmail'] = $usuEmail;
        $_SESSION['idUsuario'] = $arrayUsuario['idUsuario'];
        $_SESSION['usuNombre'] = $arrayUsuario['usuNombre'];
        $_SESSION['usuApellido'] = $arrayUsuario['usuApellido'];
        $_SESSION['idRol'] = $arrayUsuario['idRol'];

        header('location: admin.php');
    }

    function logout() : void
    {
        //Eliminamos todas las variables de sesión
        session_unset();
        //Eliminamos la sesión
        session_destroy();
    }

    function autenticar() : void
    {
        if( !isset( $_SESSION['login'] ) ){
            header('location: formLogin.php?error=2');
        }
    }

    function noAdmin() : void
    {
        //Si el usuario no es administrador
        if( $_SESSION['idRol'] != 1 ){
            //Redirección a página noAdmin.php
            header('location: noAdmin.php');
        }
    }