# código de arquivo completo= proxy.php

# <?php
// Verifica Se A URL Do Vídeo Foi Fornecida
if (!isset($_GET['url'])) {
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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://vjs.zencdn.net/7.15.4/video-js.css" rel="stylesheet">
<style>
    body { font-family: Arial, sans-serif; }
    .video-container { margin-top: 20px; }
</style>
</head>
<body>

<div class="container">

    <!-- Formulário Para Inserir A URL Do Vídeo -->
    <form action="" method="get">

    <!-- Div Para Exibir O Reprodutor De Vídeo -->
    <div class="video-container">
        <video id="my-video" class="video-js" controls preload="auto" width="640" height="264">
            <source src="<?php echo htmlspecialchars($videoUrl); ?>" type="video/mp4">
            <p class="vjs-no-js">
                Para Assistir Este Vídeo, Ative O JavaScript E Considere Atualizar Para Um Navegador Que Suporte vídeos HTML5.
            </p>
        </video>
    </div>
</div>

<!-- Scripts Para O Reprodutor De Vídeo -->
<script src="https://vjs.zencdn.net/7.15.4/video.min.js"></script>
<script>
    // Inicializa O Reprodutor De vídeo
    var player = videojs('my-video');
</script>

</body>
</html>
