# SystemGameManager download website

A lightweight PHP website for the Windows application [SystemGameManager](https://github.com/Bommberk/SystemGameManager). Its dark palette and component styling follow the application; its PHP pages, shared includes and asset directories are adapted from the Ferienwohnung website.

## Requirements and deployment

Use a PHP-enabled web server (PHP 7.4 or newer). Copy the project to the server's web directory, preserving the folder structure. No database, package manager or build step is required. The site also works in a subdirectory.

For local development, run `php -S localhost:8000` from the project directory and open `http://localhost:8000/`.

## Download and release configuration

Edit `config.php` to update the version, release date, release count, latest-change summary and download URL. Upload the Windows installer to your server and set `download_url` to its URL, for example `/downloads/SystemGameManager-win-Setup.exe` or an HTTPS URL. Until a URL is configured, download controls are visibly disabled instead of linking to a missing file. All download controls use this one setting. Update the release details and dashboard's latest-change summary when publishing a new version; nothing is fetched automatically.

The installation guide describes the installer distribution. Update the guide if the configured download changes to a different format. The app's installed version checks for updates using its own update service; the website does not provide that service.

## Development mode

The site currently displays a development page for every public page. Set `maintenance_mode` to `false` in `config.php` to make the dashboard, installation guide, changelog and download page available.

## Structure

- `index.php`, `installation/index.php`, `changelog/index.php`: page content.
- `header.php`, `footer.php`, `download.php`: shared layout and download control.
- `config.php`: release and download settings.
- `assets/css/main.css`: responsive styles.

Page copy is kept in the page templates, separate from configuration, so it can be extracted into language files later. The changelog is intentionally empty until real entries are added.