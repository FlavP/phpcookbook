<?php

$text = 'There are many things to do today';

//print substr($text, 10, -4);

//$cardno = '5555 4444 5555';
//$hide = 'xxxx';
//
//print substr_replace($cardno, $hide, 0, 0);

//print implode(' ', array_reverse(explode(' ', $text)));

//Below we are generating a random string

function str_rand($length = 32, $characters = '0123456789asdfghjklzxcvbnmqwertyuiop'){

    if(!is_int($length) || $length < 0){
        return false;
    }
    $str = '';
    $characters_length = $length - 1;
    for($i = $length; $i > 0; $i--){
        $str .= $characters[mt_rand(0, $characters_length)];
    }
    return $str;
}

#print str_rand(16);

print ltrim('15 steps', ' 0..9');