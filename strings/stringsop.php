<?php

//echo "Ok things";
//
//print <<< DOGS
//If you like pets
//you like DOGS and CATS but
//DOGS;

$remaining = 3;

if($remaining > 0){
    $url = '/deal.php';
    $text = 'Deal new cards';
} else {
    $url = '/newgame.php';
    $text = 'Start new game';
}

echo <<< HTML
    There are <b>$remaining</b> left
    <p></p>
    <a href="$url">$text</a> 
HTML;

