<?
include ('SampQueryAPI.php');  // Сам инклуд, и инфа внутри
$query = new SampQueryAPI('141.95.190.146', '2093'); // Ип, и порт для соединения
$aInformation = $query->getInfo(); // Переменная как в PAWN, чуть отличается от PAWN
$aServerRules = $query->getRules(); 
?>


[
    {
      "color": "FF2B3B",
      "dopname": "",
      "maxonline": <?= $aInformation['maxplayers'] ?>,
      "firstname": "MOSCOW",
      "online": <?= $aInformation['players'] ?>
    }
]
