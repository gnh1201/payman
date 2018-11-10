<?php
$action = get_requested_value("action");
$data = get_requested_value("data");

$out = array();

if($action == "encode") {
	$out['result'] = base64_encode($data);
}

if($action == "decode") {
	$out['result'] = base64_decode($data);
}

header("Content-type: application/json");
echo json_encode($out);