<?php
function getColorByKeyword($keyword) {
    // Формируем URL для поиска цветов по ключевому слову
    $url = "http://www.colourlovers.com/api/colors?keywords={$keyword}&numResults=1&format=json";
    
    // Запрос к API
    $response = file_get_contents($url);
    
    if ($response === false) {
        return "Ошибка при запросе к API.";
    }
    
    // Декодируем JSON
    $colors = json_decode($response, true);
    
    if (empty($colors)) {
        return "Нет цветов для слова '{$keyword}'.";
    }
    
    // Извлекаем HEX-код первого цвета
    $hexColor = '#' . $colors[0]['hex'];
    
    return $hexColor;
}

// Пример использования
if (isset($_POST['words'])) {
    $words = $_POST['words']
    $words = explode(" ", $pizza);
}
$color1 = getColorByKeyword($words[0]);
$color1 = getColorByKeyword($words[1]);
$color1 = getColorByKeyword($words[2]);
?>