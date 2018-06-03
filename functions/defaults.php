<?php

$params = [
    'par1' => 'Unu',
    'par2' => 'Doi',
    'par5' => 'Cinci'
];

function setParams($args){
    $defaults = [
        'par1' => 'Not Unu',
        'par3' => 'Not Set'
    ];
    $to_return = array_merge($defaults, $args);
    print_r($to_return);
}

#setParams($params);

function &findAndReplace($searched_key, &$params){
    foreach ($params as $key => $value){
        if($searched_key == $key){
            return $params[$key];
        }
    }
}

$cinci =& findAndReplace('par2', $params);

$cinci = 'Valoare modificata';

print_r($params);