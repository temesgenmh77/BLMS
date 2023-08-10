<?php
//$dd = date('d-m-Y');
//$d2 = '02-5-2022'->getday();

    $eday = '18';
    $emonth = '02';
    $eyear = '2015';
    $cd = '10';
    $cm = '08';
    $cy = '2014';

$date1 = date_create($eday."-".$emonth."-".$eyear);
$date2 = date_create($cd."-". $cm ."-". $cy);
$inteval = date_diff($date2,$date1);
$days = $inteval->format("%a");
echo $days."   Days<br><br>";



    
$curday = date('d');
$cur_month = date('m');
$curyear = date('Y');
//////////////////////

$date1 = date_create($eday."-".$emonth."-".$eyear);
$date2 = date_create($curday."-". $cur_month ."-". $curyear);
$inteval = date_diff($date2,$date1);
$days = $inteval->format("%a");
echo $days;


?>