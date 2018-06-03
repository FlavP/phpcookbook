<?php

$when = new DateTime('@163727100');
$when->setTimezone('Europe/Bucharest');
$parts = explode('/', $when->format('Y/m/d/H/i/s'));

//var_dump($parts);

//print $when->format('d/M/Y');

$first_local = new DateTime("1965-05-10 7:32:56", new DateTimeZone('Europe/Bucharest'));

$second_local = new DateTime("1962-11-20 18:44:00", new DateTimeZone('Europe/Bucharest'));

$first = new DateTime('@' . $first_local->getTimestamp());
$second = new DateTime('@' . $second_local->getTimestamp());

$diff = $second->diff($first);

//printf("The two dates have %d weeks, %s days, %d hours, %d minutes and %d seconds elapsed between them",
//    floor($diff->format('%a') / 7),
//    $diff->format('%a') % 7,
//    $diff->format('%h'),
//    $diff->format('%i'),
//    $diff->format('%s'));

$birthday = new DateTime("2019-02-20", new DateTimeZone('Europe/Bucharest'));
printf("My birthday will be on a %s, the %d day of the year, %d day of the week, %d day of the month",
    $birthday->format('l'),
    $birthday->format('z'),
    $birthday->format('N'),
    $birthday->format('j')
    );
