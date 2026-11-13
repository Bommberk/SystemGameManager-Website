<?php
http_response_code(503);
header('Retry-After: 3600');

$scriptDirectory = trim(dirname(str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/')), '/.');
$assetPrefix = in_array(basename($scriptDirectory), ['installation', 'changelog'], true) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="SystemGameManager wird gerade gewartet. Wir sind bald wieder für dich da.">
    <title>Wartungsarbeiten | SystemGameManager</title>
    <link rel="stylesheet" href="<?= htmlspecialchars($assetPrefix, ENT_QUOTES, 'UTF-8') ?>assets/css/main.css">
</head>
<body class="maintenance-page">
<main class="maintenance-card">
    <a class="brand maintenance-brand" href="#" aria-label="SystemGameManager">
        <span class="brand-mark" aria-hidden="true">S<span>G</span></span>
        <span>System<span class="brand-accent">Game</span>Manager</span>
    </a>
    <div class="maintenance-icon" aria-hidden="true"><span></span></div>
    <p class="eyebrow"><span class="status-dot"></span> Kurz offline</p>
    <h1>Wir sind gleich <span>wieder da.</span></h1>
    <p class="lead">Die Website wird gerade gewartet, damit bald alles wieder rund läuft. Bitte schau später noch einmal vorbei.</p>
    <p class="maintenance-note">Danke für deine Geduld.</p>
</main>
</body>
</html>
