<?
include ('SampQueryAPI.php');  // Сам инклуд, и инфа внутри
$query = new SampQueryAPI('185.189.255.97', '1293'); // Ип, и порт для соединения
$aInformation = $query->getInfo(); // Переменная как в PAWN, чуть отличается от PAWN
$aServerRules = $query->getRules(); 
?>


[
    {
      "ip": "54.36.82.238",
      "port": 1373,
      "x2": false,
      "color": "00FF00",
      "dopname": "",
      "maxonline": <?= $aInformation['maxplayers'] ?>,
      "name": "Green",
      "online": <?= $aInformation['players'] ?>
    }
]
