<?php

### if/else
if( isset($_GET['dato']) ){
    $dato = $_GET['dato'];
}else{
    $dato = '';
}

##### ternario      ( condicion ) ? 'true' : 'false'
$dato = ( isset($_GET['dato']) ) ? $_GET['dato'] : '';

##### null coalescing  |  fusión de null
    // $var = isset($x) ?? 'otro valor';
$dato = $_GET['dato'] ?? '';


