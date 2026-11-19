<?php


$DEVELOPMENT_MODE_ENABLED = true;

if($_SERVER["HTTP_HOST"] && $_SERVER["HTTP_HOST"] === 'localhost') {
    $DEVELOPMENT_MODE_ENABLED = false;
}


const PAGE_DEVELOPMENT_STATUS = [
    'dashboard' => true,
    'installation' => true,
    'changelog' => true,
    'download' => true,
];

$config = require __DIR__ . '/config.php';
$currentPage = isset($page) ? $page : 'download';
$isInDevelopment = $DEVELOPMENT_MODE_ENABLED && (PAGE_DEVELOPMENT_STATUS[$currentPage] ?? false);

if ($isInDevelopment) {
    require __DIR__ . '/maintenance.php';
    exit;
}
