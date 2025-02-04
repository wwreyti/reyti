<?php
include ('SampQueryAPI.php');
$query = new SampQueryAPI('185.189.255.97', '1293');
$aInformation = $query->getInfo();
$aServerRules = $query->getRules();

$response = [
    [
        "ip" => "54.36.82.238",
        "port" => 1373,
        "x2" => false,
        "color" => "00FF00",
        "dopname" => "",
        "maxonline" => $aInformation['maxplayers'],
        "name" => "Green",
        "online" => $aInformation['players']
    ]
];

header('Content-Type: application/json');
echo json_encode($response);
?>
