<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $page_title ?></title>
    <meta name="description" content="Esta sería la descripción de mi PWA">

    <meta name="theme-color" content="#2196F3">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/png" href="<?= Assets::setAssets('img/mainlogo.png') ?>">
    <link rel="apple-touch-icon" href="<?= Assets::setAssets('img/mainlogo.png') ?>">
    <link rel="apple-touch-startup-image" href="<?= Assets::setAssets('img/mainlogo.png') ?>">
    <link rel="manifest" href="http://localhost/ligne_php_pwa/manifest.json">
    <link rel="stylesheet" href="<?= Assets::setAssets('css/style.css')?>">
    <script type="text/javascript" src="<?= Assets::setAssets('js/ligne_route.js') ?>"></script>
</head>
<body>
<div class="container" style="margin: auto;text-align:center;font-family: sans-serif;">

        <?=
        /**
         * Aqui se renderizan todas las vistas
         **/
        $content_for_layout;
        ?>
</div>
<script src="<?= Assets::setAssets('js/script.js') ?>"></script>
</body>
</html>
