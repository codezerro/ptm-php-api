<?php
$info = "";
$data = "";
$object = "";


if (isset($_POST)) {
    $body = file_get_contents('php://input');
    $data = json_decode($body);

    $object = ((float)$data->balance * (4.25 / 100)) / (1 - (1 / ((1 + (4.25 / 100) * (float) $data->n))));
} else {
    $info = "data is not fetched";
    $data = "not data";
}
header("Content-Type:application/json");

// $result =  new \stdClass();
// $result->info = $body->name;
// // $result->data = $data;
// // $result->info = $info;
echo json_encode([$object]);
