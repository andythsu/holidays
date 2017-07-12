<?php
date_default_timezone_set("America/Toronto");

$DATE_FORMAT_1 = "Y-m-d";
$year = substr(date($DATE_FORMAT_1),0,4); //return current year

$holidays = array(
  "New Year" => $year.'-01-01',
  "Family Day" => date($DATE_FORMAT_1, strtotime($year.'-02-00, third monday')), // third monday in February
  "Good Friday" => date($DATE_FORMAT_1, strtotime('-2 days', (easter_date($year)))), //friday before easter sunday
  "Victoria Day" => date($DATE_FORMAT_1, strtotime($year.'-05-25, last monday')), //last monday on or before 5/24
  "Canada Day" => date($DATE_FORMAT_1, strtotime($year.'-07-01')), //7/1
  "Labour Day" => date($DATE_FORMAT_1, strtotime($year.'-09-00, first monday')), //first monday of september
  "Thanksgiving" => date($DATE_FORMAT_1, strtotime($year.'-10-00, second monday')), //second monday of october
  "Christmas Day" => date($DATE_FORMAT_1, strtotime($year.'-12-25')), //12/25
  "Boxing Day" => date($DATE_FORMAT_1, strtotime($year.'-12-26')) //12/26
);

echo json_encode($holidays);

?>
