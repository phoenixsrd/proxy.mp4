<?php
if (!isset($_GET['//pomf2.lain.la/f/wy0tf11h.mp4'])) {
    die('URL Do Vídeo Não Especificada.');
}

$videoUrl = $_GET['//pomf2.lain.la/f/wy0tf11h.mp4'];

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
