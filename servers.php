<?
include ('SampQueryAPI.php');  // Сам инклуд, и инфа внутри
$query = new SampQueryAPI('185.189.255.97', '1293'); // Ип, и порт для соединения
$aInformation = $query->getInfo(); // Переменная как в PAWN, чуть отличается от PAWN
$aServerRules = $query->getRules(); 
?>

[
    {
      "ip": "185.189.255.97",
      "port": 1293,
      "x2": false,
      "name": "Reytitest",
      "online": <?= $aInformation['players'] ?>,
      "maxonline": <?= $aInformation['maxplayers'] ?>
    }
 ]
