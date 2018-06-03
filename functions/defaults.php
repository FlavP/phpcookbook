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

#print_r($params);

function xrange($start, $limit, $step = 1){
    if($start < $limit) {
        if ($step <= 0) {
            throw new LogicException("Step not good");
        }
        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    }else {
            if($step >= 0){
               throw new LogicException("Step not good");
            }
            for($i = $start; $i >= $limit; $i += $step){
                yield $i;
            }
        }
}

echo 'range: ';
//foreach(range(1, 100000) as $number){
//    echo "$number ";
//}
echo "<br>";

echo "xrange: ";
//foreach(xrange(1, 100000) as $number){
//    echo "$number ";
//}