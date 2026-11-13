<?php
require __DIR__ . '/../maintenance-check.php';

$page = 'changelog';
$pageTitle = 'Changelog';
$base = '../';
require __DIR__ . '/../header.php';
?>
<section class="page-intro">
    <p class="eyebrow">RELEASE HISTORY</p>
    <h1>Changelog</h1>
    <p class="lead">A place to follow updates to SystemGameManager.</p>
</section>
<section class="card empty-state">
    <span class="feature-icon" aria-hidden="true">≡</span>
    <h2>No changelog entries yet</h2>
    <p>There are currently no changelog entries available.</p>
</section>
<?php require __DIR__ . '/../footer.php'; ?>
