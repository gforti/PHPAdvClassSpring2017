<?php

function load_lib($base) {
    $baseName = explode( '\\', $base );
    $class = end( $baseName ); 
     /* Lets check to make sure we have the file or throw an error so the programmer can handle the issue */
    if (is_file('models/'.$class . '.php')) {
        include 'models/'.$class . '.php';
    } else {
        throw new InvalidArgumentException($class . ' Not Found');
    }
      
};
spl_autoload_register('load_lib');