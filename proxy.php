<?php
if (!isset($_GET['url'])) {
    die('URL Do Vídeo Não Especificada.');
}

$videoUrl = $_GET['url'];

function fetchURL($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

$content = fetchURL($videoUrl);

echo $content;
?>
