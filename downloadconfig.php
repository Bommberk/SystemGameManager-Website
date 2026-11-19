<?php


const DOWNLOAD_URL = 'https://updates.systemgamemanager.de/releases/stable/';
const RELEASE_DATA_URL = 'https://updates.systemgamemanager.de/releases/stable/releases.win.json';

$latestVersion = getLatestVersion();

return [
    'version' => $latestVersion,
    'release_date' => 'November 19, 2026',
    'release_count' => 29,
    'latest_changes' => 'Window position is restored, and starting with Windows can be configured independently of background running.',
    // Set this to the URL of the installer hosted on your server.
    'download_url' => (string) DOWNLOAD_URL . 'v' . $latestVersion . '/SystemGameManager-win-Setup.exe',
    'github_url' => 'https://github.com/Bommberk/SystemGameManager',
];

function getLatestVersion(): string
{
    $latestVersionInfo = json_decode(file_get_contents(RELEASE_DATA_URL), true);
    return $latestVersionInfo['Assets'][0]['Version'];
}