<?php
/**
* Trait Date
* Copyright :  Tous droits réservés.
* Editeur : Timothy PREFOL (timothy.prefol@gmail.com) && Yohann Cuenot (yohann.cuenot@hotmail.fr)
* Version 0.1
*/
trait TtestDate
{
    public function is_valid_date( $value, $format = 'Y-m-d H:i:s' ) {
        $d = DateTime::createFromFormat( $format, $value );
        return ( $d && ( $d->format( $format ) == $value ) );
    }
}
