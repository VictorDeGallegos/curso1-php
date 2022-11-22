<?php

class UnaClase
{

    public static function metodoEstatico()
    {
        echo "Soy un método estático";
    }
}

$obj = new UnaClase();

$obj->metodoEstatico();

unaClase::metodoEstatico();
