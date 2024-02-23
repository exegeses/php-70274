<?php

$comparacion = 'x';
switch( $comparacion )
{
    case 'a':
        $var = 'letra a';
        break;
    case 'b':
        $var = 'letra b';
        break;
    case 'c':
        $var = 'letra c';
        break;
    default:
        $var = 'otra letra';
}

############### expresión
$var = match( $comparacion ){
    'a' => 'letra a',
    'b' => 'letra b',
    'c' => 'letra c',
    default => 'otra letra'
};