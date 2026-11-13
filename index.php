<?php
$page = 'dashboard';
$pageTitle = 'Dashboard';
$base = '';
require __DIR__ . '/header.php';
?>
<section class="hero">
    <div class="hero-copy">
        <p class="eyebrow"><span class="status-dot"></span> Your games. Your settings.</p>
        <h1>Everything in its <span>right place.</span></h1>
        <p class="lead">Bring your game library and audio settings together with SystemGameManager, a desktop companion built for Windows.</p>
        <div class="actions">
            <div><?php include __DIR__ . '/download.php'; ?></div>
            <a class="button button-secondary" href="installation/">Installation guide <span aria-hidden="true">→</span></a>
        </div>
        <p class="hero-meta">Windows 10 / 11 <span>·</span> Version <?= escape($config['version']) ?></p>
    </div>
    <div class="app-preview" aria-label="Overview of SystemGameManager features">
        <div class="preview-top"><span class="preview-title"><span class="status-dot"></span> SYSTEM GAME MANAGER</span><span class="window-dots" aria-hidden="true">● ● ●</span></div>
        <div class="preview-body">
            <div class="preview-heading"><div><p class="preview-kicker">YOUR SPACE</p><h2>Game Manager</h2></div><span class="preview-label">Library</span></div>
            <div class="preview-search">⌕ <span>Search your games</span></div>
            <div class="preview-item"><span class="preview-icon">▦</span><div><strong>Game library</strong><small>Browse and manage your games</small></div><span class="preview-arrow">›</span></div>
            <div class="preview-item"><span class="preview-icon">♫</span><div><strong>Audio settings</strong><small>Make your setup yours</small></div><span class="preview-arrow">›</span></div>
            <div class="preview-item"><span class="preview-icon">⌘</span><div><strong>Hotkeys</strong><small>Keep controls close at hand</small></div><span class="preview-arrow">›</span></div>
        </div>
    </div>
</section>

<section class="info-strip" aria-label="Release and system information">
    <div><span>Current version</span><strong>v<?= escape($config['version']) ?></strong></div>
    <div><span>Latest release</span><strong><?= escape($config['release_date']) ?></strong></div>
    <div><span>Available releases</span><strong><?= escape($config['release_count']) ?></strong></div>
    <div><span>Platform</span><strong>Windows 10 / 11</strong></div>
</section>

<section class="section">
    <div class="section-heading"><div><p class="eyebrow">MADE FOR YOUR SETUP</p><h2>A little more control.</h2><p>The tools you need to bring your games and audio together.</p></div></div>
    <div class="feature-grid">
        <article class="card"><span class="feature-icon" aria-hidden="true">▦</span><h3>Your game library</h3><p>Discover games from supported launchers, then browse, search, filter and organize them in one place.</p></article>
        <article class="card"><span class="feature-icon" aria-hidden="true">♫</span><h3>Audio that follows</h3><p>Save music volume and output device settings per game. The app can apply them when a configured game is active.</p></article>
        <article class="card"><span class="feature-icon" aria-hidden="true">⌘</span><h3>Quick controls</h3><p>Set up hotkeys for audio modes and choose how the app runs in the background or starts with Windows.</p></article>
    </div>
</section>

<section class="section bottom-grid">
    <article class="card change-card"><div><p class="eyebrow">LATEST CHANGES</p><h2>What's new in v<?= escape($config['version']) ?></h2><p>Window position is restored, and starting with Windows can be configured independently of background running.</p></div><a class="text-link" href="changelog/">View changelog <span aria-hidden="true">→</span></a></article>
    <article class="card requirements-card"><p class="eyebrow">BEFORE YOU START</p><h2>System requirements</h2><ul><li>Windows 10 or 11</li><li>Microsoft Edge WebView2 Runtime</li></ul><a class="text-link" href="installation/">See installation guide <span aria-hidden="true">→</span></a></article>
</section>
<?php require __DIR__ . '/footer.php'; ?>
