<?php

$arr = ['YeP Dap EfG', 'TanTZica', '8PlusUnu'];

#print_r(array_map('strtolower', $arr));

$arr_2 = ['bbing', 'bang', 'boom'];

$result = array_pad($arr_2, -6, 'ciocolata');
#print_r($result);

$arr_3 = ['elementul 1', 'elementul 2', 'elementul 3', 'elementul 4'];

function array_to_comma_string($array){
    switch (count($array)){
        case 0:
            return '';
        case 1:
            return reset($array);
        case 2:
            return join(' and ', $array);
        default:
            $last = array_pop($array);
            return join(', ', $array) . ", and $last";
    }
}

#print_r(array_to_comma_string($arr_3));