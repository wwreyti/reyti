<?php
include('SampQueryAPI.php'); // Сам инклуд, и инфа внутри
$query = new SampQueryAPI('185.189.255.97', '1293'); // Ип, и порт для соединения

$aInformation = $query->getInfo(); // Переменная как в PAWN, чуть отличается от PAWN
$aServerRules = $query->getRules();

if ($aInformation) {
    // Убедитесь, что данные корректно получены
    $onlinePlayers = isset($aInformation['players']) ? $aInformation['players'] : 0;
    $maxPlayers = isset($aInformation['maxplayers']) ? $aInformation['maxplayers'] : 0;

    // Формируем JSON
    $response = [
        [
            "ip" => "185.189.255.97",
            "port" => 1293,
            "x2" => false,
            "name" => $aInformation['name'] ?? 'Unknown', // Проверка на наличие имени сервера
            "online" => $onlinePlayers,
            "maxonline" => $maxPlayers
        ]
    ];
    if (!file_exists('SampQueryAPI.php')) {
    die('Файл SampQueryAPI.php не найден.');
}

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Обработка ошибки, если информация не получена
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Не удалось получить информацию о сервере']);
}
?>

