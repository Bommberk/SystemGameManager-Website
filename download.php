<?php if ($config['download_url'] !== ''): ?>
    <a class="button button-primary" href="<?= escape($config['download_url']) ?>"><span aria-hidden="true">↓</span> Download for Windows</a>
<?php else: ?>
    <span class="button button-disabled" aria-disabled="true"><span aria-hidden="true">↓</span> Download unavailable</span>
    <p class="download-note">The installer download has not been configured yet.</p>
<?php endif; ?>
