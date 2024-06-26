<?php
// Verifica se a URL do vídeo foi fornecida
if (!isset($_GET['url'])) {
    die('URL do vídeo não especificada.');
}

// URL do vídeo no GitHub Releases (exemplo)
$videoUrl = $_GET['url'];

// Função para buscar o conteúdo da URL alvo
function fetchURL($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

// Obtém o conteúdo da URL alvo via proxy
$content = fetchURL($videoUrl);

// Exibe o conteúdo como resposta
echo $content;
?>
