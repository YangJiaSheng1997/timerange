<?php
include './vendor/autoload.php';
echo 112;
//$a = \Timerange\RangeDate::set(2020,true)->getMonth();
$a = \Timerange\RangeTime::set(['2020-04-26','2020-04-27'],true)->getHours('8:30',['08:30','17:00'],['12:30','13:30']);
echo '<pre>';
var_dump($a);
////var_dump($a);