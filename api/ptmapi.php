<?php
// headers cors
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$info = "";
$data = "";
$object = array();


if (isset($_POST)) {
    $body = file_get_contents('php://input');
    $data = json_decode($body);
    if ($data->balance != "" && $data->n != "") {
        $object["status"] = "success";
        $object["PMT"] = ((float)$data->balance * (4.25 / 100)) / (1 - (1 / ((1 + (4.25 / 100) * (float) $data->n))));
    } else {
        $object["status"] = "failed";
        $object["message"] = "body can't empty!";
    }
}
header("Content-Type:application/json");


echo json_encode($object);
// $q1(ufHxD1sxmNYHkx13625442ptmkabir