<?php

$scores = [1, 10, 2, 20];
sort($scores, SORT_NUMERIC);
#print_r($scores);

$test = ['test3.php', 'test0.php', 'test5.php', 'test2.php'];

natsort($test);

foreach($test as $rank => $file){
    print '<br>' . $rank . ' => ' . $file;
}