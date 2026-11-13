<?php
$config = require __DIR__ . '/config.php';
function escape($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SystemGameManager brings your game library and audio settings together on Windows.">
    <title><?= escape($pageTitle) ?> | SystemGameManager</title>
    <link rel="stylesheet" href="<?= escape($base) ?>assets/css/main.css">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <div class="header-inner">
        <a class="brand" href="<?= escape($base) ?>index.php"><span class="brand-mark" aria-hidden="true">S<span>G</span></span><span>System<span class="brand-accent">Game</span>Manager</span></a>
        <nav aria-label="Main navigation">
            <a href="<?= escape($base) ?>index.php"<?= $page === 'dashboard' ? ' aria-current="page"' : '' ?>>Dashboard</a>
            <a href="<?= escape($base) ?>installation/"<?= $page === 'installation' ? ' aria-current="page"' : '' ?>>Installation</a>
            <a href="<?= escape($base) ?>changelog/"<?= $page === 'changelog' ? ' aria-current="page"' : '' ?>>Changelog</a>
            <a href="<?= escape($config['github_url']) ?>">GitHub <span aria-hidden="true">↗</span></a>
        </nav>
    </div>
</header>
<main id="main" class="container">
