<?php
/**
 * Created by PhpStorm.
 * User: Moisés
 * Date: 04/06/2018
 * Time: 18:33
 */

    //Formata data e hora
    function formatDateAndTime($value, $format = 'd/m/Y'){
        return Carbon\Carbon::parse($value)->format($format);
    }
