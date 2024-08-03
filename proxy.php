<?php
// Verifica Se A URL Do Vídeo Foi Fornecida
if (!isset($_GET['//pomf2.lain.la/f/wy0tf11h.mp4'])) {
    die('URL Do Vídeo Não Especificada.');
}

// URL Do Vídeo
$videoUrl = $_GET['url'];

// Função Para Buscar O Conteúdo Da URL Alvo
function fetchURL($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

// Obtém O Conteúdo Da URL Alvo Via Proxy
$content = fetchURL($videoUrl);

// Exibe O Conteúdo Como Resposta
echo $content;
?>
