<?php
$url = 'http://localhost/ptm-php-api/api/ptmapi.php';

$ch = curl_init($url);

//data
$data = array(
    "balance" => 160,
    "n" => 9,
);
$payload = json_encode($data);


curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

echo $result;

curl_close($ch);
