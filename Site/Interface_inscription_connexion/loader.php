<?php
/**
 * Autoloader Class Model Controller 
 */

function loadClass( $className ) {
    $_str_file = 'classes/' . strtolower( $className ) . '.php';
    if( file_exists( $_str_file ) )
        require_once( $_str_file );
}

function loadModel( $modelName ) {
    $_str_file = 'models/' . strtolower( $modelName ) . '.php';
    if( file_exists( $_str_file ) )
        require_once( $_str_file );
}

function loadController( $controllerName ) {
    $_str_file = 'controllers/' . strtolower( $controllerName ) . '.php';
    if( file_exists( $_str_file ) )
        require_once( $_str_file );
}

spl_autoload_register('loadClass');
spl_autoload_register('loadModel');
spl_autoload_register('loadController');