<?php
require __DIR__ . '/../maintenance-check.php';

$page = 'installation';
$pageTitle = 'Installation';
$base = '../';
require __DIR__ . '/../header.php';
?>
<section class="page-intro">
    <p class="eyebrow">GET STARTED</p>
    <h1>Installation</h1>
    <p class="lead">Get SystemGameManager up and running on your Windows PC in a few simple steps.</p>
</section>
<div class="installation-layout">
    <section aria-label="Installation steps" class="steps">
        <article class="card step"><span class="step-number">01</span><div><h2>Download the installer</h2><p>Download the Windows installer and save it somewhere easy to find, such as your Downloads folder.</p><?php include __DIR__ . '/../download.php'; ?></div></article>
        <article class="card step"><span class="step-number">02</span><div><h2>Install the application</h2><p>Open the downloaded <strong>SystemGameManager-win-Setup.exe</strong> file and follow the installer. You do not need to extract the installer.</p></div></article>
        <article class="card step"><span class="step-number">03</span><div><h2>Open SystemGameManager</h2><p>Launch the app, review your detected games and choose the audio settings you want to save. You can adjust your preferences under Settings.</p></div></article>
        <article class="card step"><span class="step-number">04</span><div><h2>Keep up to date</h2><p>Installed copies check for updates when the app starts. You can also return here to download a newer installer when one is available.</p></div></article>
    </section>
    <aside class="card install-aside"><p class="eyebrow">GOOD TO KNOW</p><h2>Before installing</h2><p>You'll need Windows 10 or 11 and the Microsoft Edge WebView2 Runtime.</p><p>Current version</p><strong class="version-label">v<?= escape($config['version']) ?></strong></aside>
</div>
<?php require __DIR__ . '/../footer.php'; ?>
