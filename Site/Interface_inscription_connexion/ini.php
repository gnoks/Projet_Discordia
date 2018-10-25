<?php
/**
 * --------------------------------------------------
 * DB
 * --------------------------------------------------
**/
if( !defined( 'DB_ENGINE' ) )
    define('DB_ENGINE', 'mysql');
if( !defined( 'DB_HOST' ) )
    define( 'DB_HOST', 'localhost' );
if( !defined( 'DB_NAME' ) )
    define( 'DB_NAME', 'discordia' );
if( !defined( 'DB_USER' ) )
    define('DB_USER', 'root');
if( !defined( 'DB_LOGIN' ) )
    define( 'DB_LOGIN', 'root' );
if( !defined( 'DB_PWD' ) )
    define( 'DB_PWD', '' );
if( !defined( 'DB_CHARSET' ) )
    define( 'DB_CHARSET', 'utf8mb4');
if( !defined('DB_COLLATE') )
    define('DB_COLLATE', 'utf8mb4_general_ci');