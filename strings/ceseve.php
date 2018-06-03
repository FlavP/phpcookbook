<?php

//$sales = array( array('Northeast', '2005-01-01', '2005-02-01', 54.23),
//                array('Northwest', '2005-01-01', '2005-02-01', 92.64),
//                array('Southeast', '2005-01-01', '2005-02-01', 33.48),
//                array('Southwest', '2005-01-01', '2005-02-01', 24.75),
//                array('Total', '--', '--', 257.48)
//                );
$filename = 'register.csv';
//
//$fh = fopen($filename, 'w') or die("Can't open file");
//
//foreach($sales as $sale){
//    if(fputcsv($fh, $sale) === false){
//        die('Can\'t write to csv file');
//    }
//}
//
//fclose($fh);

$fp = fopen($filename, 'r') or die("Can't open file");
print '<table>';
while($csv_line = fgetcsv($fp)){
    print '<tr>';
    for($i = 0; $i < count($csv_line); $i++){
        print '<td>' . htmlentities($csv_line[$i]) . '</td>';
    }
    print '</tr>';
}
print '</table>';