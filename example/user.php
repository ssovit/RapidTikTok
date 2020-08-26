<?php
header("Content-Type: application/json");
include __DIR__."/../vendor/autoload.php";

$rapidapi_key="XXXXXXX";
$api = new \RapidTikTok\Api(['api-key'=>$rapidapi_key]);

$result = $api->getUser("tiktok");
echo json_encode($result,JSON_PRETTY_PRINT);
