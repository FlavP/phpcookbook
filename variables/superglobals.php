<?php

$myarr = [
    'emperors' => ['Cezar', 'Traian'],
    'veggie' => 'Tomato',
    'pushups' => 17
];

foreach ($myarr as $key => $value){
    if(isset($GLOBALS[$key])){
        $GLOBALS[$key] = $value;
    }
}

$animal = 'turtle';
$turtle = 105;

#print $$animal;

$strumps = ['One', 'Two', 'Three'];

$strump_one = 'Moe';
$strump_two = 'Doe';
$strump_three = 'Goe';

//foreach ($strumps as $s){
//    print "Strump's $s real name is ${'strump_' . strtolower($s)} . \n";
//}

function incr(){
    static $i = 0;
    $i++;
    print $i;
    return $i;
}

incr();
print '<br>';
incr();
print '<br>';
incr();
print '<br>';
incr();
print '<br>';