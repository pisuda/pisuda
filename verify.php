<?php
$access_token = 'xxLmhpmPu3qaGrh06Q5HLn8dDGR7RuIQSgBsPU0T1wh75EHlgmietlTC9LtbrsflogJaHq0WIVjNjw7uwMwP9hSxF223ULudkVBWPeYt1aj4X5BV+qVo+U0hDAiwa+Ja5BhigJTJ1TGxyUjL2Lq83gdB04t89/1O/w1cDnyilFU=';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>