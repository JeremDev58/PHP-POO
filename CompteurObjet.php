<?php 

class Compteur {

    private static $_count;

    function __construct()
    {
        self::$_count++;
    }

    public static function getCount()
    {
        return self::$_count;
    }

}