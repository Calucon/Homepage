<?php

require_once './src/Util.php';
require_once './src/Post.php';

?>

<!DOCTYPE html>
<html lang="<?php echo /*Translation::$lang*/ 'en'; ?>">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Calucon, Software, Programming, Security">
    <meta name="author" contents="Calucon / Simon Schwitz">

    <!-- HTML Meta Tags -->
    <title>Calucon.de - Software Development</title>
    <meta name="description" content="I'm Simon Schwitz, also know a Calucon. I'm studying computer science and I am working as a full-stack developer.">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://calucon.de/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Calucon.de - Software Development">
    <meta property="og:description" content="I'm Simon Schwitz, also know a Calucon. I'm studying computer science and I am working as a full-stack developer.">
    <meta property="og:image" content="https://calucon.de/img/calucon_logo_webpreview.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="calucon.de">
    <meta property="twitter:url" content="https://calucon.de/">
    <meta name="twitter:title" content="Calucon.de - Software Development">
    <meta name="twitter:description" content="I'm Simon Schwitz, also know a Calucon. I'm studying computer science and I am working as a full-stack developer.">
    <meta name="twitter:image" content="https://calucon.de/img/calucon_logo_webpreview.png">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="icon" href="./favicon.png" sizes="32x32">
    <link rel="icon" href="./favicon.png" sizes="100x100">
    <link rel="apple-touch-icon" href="./favicon.png" sizes="100x100">
    <meta name="msapplication-TileColor" content="#1B8520">
    <meta name="msapplication-TileImage" content="./favicon.png">
    <link rel="image_src" href="./favicon.ico">

    <!-- Site CSS and JS -->
    <link rel="stylesheet" href="/css/bundle.css">
    <link rel="stylesheet" href="/css/fontawesome/css/all.css">
    <script src="/js/bulma-collapsible.min.js"></script>
    <script src="/js/main.js"></script>
</head>

<body class="has-background-dark-lighter">
    <?php
    Util::loadTemplate('navbar');

    $dtz = new DateTimeZone('utc');
    $posts = [
        new Post('primary', 'About me', imageUrl: '/img/calucon_logo_bg_small.webp', imageAlt: 'Calucon Logo', date: new DateTime('2024-03-10', $dtz)),
        new Post('timeline', 'Timeline', date: new DateTime('2024-03-10', $dtz)),
        new Post('uni_projects', 'University Projects', date: new DateTime('2024-12-04', $dtz)),
        new Post('contact', 'Contact', date: new DateTime('2024-03-10', $dtz)),
        new Post('skills', 'Skills', disabled: true, date: new DateTime('2024-03-10', $dtz)),
    ];

    foreach ($posts as $post) {
        Util::loadPost($post);
    }

    Util::loadTemplate('footer');
    ?>
</body>

</html>