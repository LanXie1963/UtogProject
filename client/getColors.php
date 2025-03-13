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
    return $colors;
}

// Пример использования
if (isset($_POST['words'])) {
    $words = $_POST['words']
    $words = explode(" ", $words);
}
$color1 = getColorByKeyword($words[0]);
$color2 = getColorByKeyword($words[1]);
$color3 = getColorByKeyword($words[2]);
?>