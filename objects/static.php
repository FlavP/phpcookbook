<?php

class Format{

    public static function number($number, $decimals = 2, $decimal = '.', $thousands = ','){
        return number_format($number, $decimals, $decimal, $thousands);
    }

    public static function integer($number){
        return self::number($number, 0);
    }
}

$number = 12345.6789;

print Format::number($number);
print '<br>';
print Format::integer($number);