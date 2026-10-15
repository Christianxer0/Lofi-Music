# Lo-Fi Study Room — Phase One

A responsive frontend prototype for a cozy Lo-Fi study environment built with PHP, HTML, CSS, and vanilla JavaScript.

## Included
- Landing page
- Login and registration interface (demo only)
- Dashboard
- Music-player interface with local audio-file support
- Four switchable vibe themes
- Configurable Pomodoro focus and break timer
- Responsive layouts for desktop, tablet, and mobile

## Requirements
- PHP 8+ recommended
- A modern browser
- No database or package installation required for Phase One

## Run locally
Open a terminal in the project folder and run:

```bash
php -S localhost:8000 -t public
```

Then visit http://localhost:8000

Pages:
- `/?page=home`
- `/?page=login`
- `/?page=register`
- `/?page=dashboard`
- `/?page=music`
- `/?page=pomodoro`

## Optional audio
Put audio files that you own or are licensed to use in `public/assets/music/previews/` with these names:
- `rainy-night.mp3`
- `coffee-shop.mp3`
- `midnight-study.mp3`

The music player will show a message until a valid file is present. No audio is included in this project.

## Wallpaper assets
The visual scenes use CSS gradients, so the prototype works without image assets. You can add your own wallpaper images later under `public/assets/images/wallpapers/` and wire them into the CSS.

## Phase One limitations
Login, registration, Google sign-in, password recovery, study rooms, messaging, file sharing, and multi-user synchronization are placeholders. The login and registration forms do not create accounts or store passwords. These features need backend implementation in later phases.

## Suggested next phase
Phase Two can add PHP sessions, secure authentication, PDO prepared statements, and a MySQL database. Use `password_hash()` and `password_verify()`, regenerate sessions after login, validate inputs server-side, and enforce authorization on every private resource.
