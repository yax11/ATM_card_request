<?php
//date_default_timezone_set('Africa/Lagos');

$startdate = date('2022-12-06 1:35:4');
$enddate = date('Y-m-d H:i:s');

function differenceInHours($startdate,$enddate){
    $starttimestamp = strtotime($startdate);
    $endtimestamp = strtotime($enddate);
    $difference = abs($endtimestamp - $starttimestamp)/3600;
    return $difference;
}
echo round(differenceInHours($startdate,$enddate),0);
?>