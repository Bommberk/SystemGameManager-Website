<?php
$config = require __DIR__ . '/config.php';

if ($config['maintenance_mode']) {
    require __DIR__ . '/maintenance.php';
    exit;
}
