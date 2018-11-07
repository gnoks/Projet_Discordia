<?php
if( !defined('DS')) define('DS', DIRECTORY_SEPARATOR);
if( !defined( 'ROOT' ) ) define('ROOT',dirname(__DIR__).DS);
if( !defined( 'DB_HOST' ) ) define( 'DB_HOST', 'localhost' );
if( !defined( 'DB_NAME' ) ) define( 'DB_NAME', 'discordia' );
if( !defined( 'DB_LOGIN' ) ) define( 'DB_LOGIN', 'root' );
if( !defined( 'DB_PWD' ) ) define( 'DB_PWD', '' );

//0 : Partie en cours 1 : Partie terminé
if( !defined( 'START_PARTIE' ) ) define( 'START_PARTIE', '0' );
//Num du tour en cours
if( !defined( 'START_TOUR' ) ) define( 'START_TOUR', '1' );

//Nombre de carte a piocher au début de partie
if( !defined( 'NB_PIOCHE' ) ) define( 'NB_PIOCHE', '3' );

