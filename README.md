# FAN COURT PROJECT

## Setup
- Get a WP site up and running via Hostinger
- Install Astra theme
- Connect via FTP
    - Below is an example of how the .json should look
    {
        "name": "My Server",
        "host": "31.170.164.225",
        "protocol": "ftp",
        "port": 21,
        "username": "u494107709.fanc1",
        "password": "???????",
        "remotePath": "/",
        "uploadOnSave": false,
        "useTempFile": false,
        "openSsh": false
    }
- Connect to Gtihub
    - Make sure to add a .gitignore before pushing anything
- Create a child theme
- Install Classic Editor plugin
- Install ACF plugin
    - JA of IT will have login detail for Pro


## ACF BLOCKS
### Create new block
- Field group, Page Builder -> Content Blocks(Flexible Content).
- page.php will find the block
    - You will find the file for the block in 'template-parts/acf-blocks/'


## ASTRA RELATED
### Page
- When creating a page, to make use of the container widths, adjust the value to the Astra Settings -> 'Container Layout'.

## TAILWIND
Styling is done with Tailwind CSS v4, run via the standalone CLI (no Node/npm needed).

### Setup
- Binary lives at `wp-content/themes/astra-child-statom/tailwindcss` (gitignored - platform-specific, download separately per machine)
    - macOS arm64: `curl -sL "https://github.com/tailwindlabs/tailwindcss/releases/latest/download/tailwindcss-macos-arm64" -o tailwindcss && chmod +x tailwindcss`
    - for other platforms, swap the filename for the matching build from the [Tailwind releases page](https://github.com/tailwindlabs/tailwindcss/releases)
- Source file: `assets/css/tailwind-src.css` - edit this. Contains the `@theme` block with brand colours (`--color-primary`, `--color-secondary`, `--color-tertiary`)
- Output file: `assets/css/tailwind.css` - built from the source file, enqueued in `functions.php` after `style.css`. Don't hand-edit this file, it gets overwritten on every build
- Tailwind v4 auto-scans the theme's `.php` files for class names - only classes actually used somewhere in a template get compiled into the output. No content/purge config needed

### Building
Run from `wp-content/themes/astra-child-statom/`:
```
./tailwindcss -i ./assets/css/tailwind-src.css -o ./assets/css/tailwind.css --minify
```
Or watch for changes while working:
```
./tailwindcss -i ./assets/css/tailwind-src.css -o ./assets/css/tailwind.css --watch
```

### Deploying changes
This project deploys by FTP upload, not git pull - a local build does nothing on its own.
- After any change to a template's classes, rebuild first (see above) - the build can silently fall behind template edits made after the last build
- Upload both the changed template file(s) **and** `assets/css/tailwind.css` - forgetting the CSS file is the most common cause of "my class isn't working" on the live site
- To confirm an upload actually landed, check the file size/content in WP's Theme File Editor rather than trusting the FTP client's status message

