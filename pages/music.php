<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1b121d">
    <title>Music &amp; Vibes — LoFi Room</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="app-page" data-vibe="rainy-night">
    <header class="app-topbar">
        <a class="brand" href="?page=dashboard">
            <span class="brand-icon" aria-hidden="true">☕</span><span>lofi room</span>
        </a>
        <nav class="top-nav" aria-label="Main">
            <a href="?page=dashboard">Dashboard</a>
            <a href="?page=pomodoro">Pomodoro</a>
            <a href="?page=music" aria-current="page">Music</a>
        </nav>
        <a class="avatar" href="?page=login" aria-label="Account">JD</a>
    </header>

    <main class="content-page">
        <p class="eyebrow"><span aria-hidden="true">♫</span> FIND YOUR FLOW</p>
        <h1>Music &amp; vibes</h1>
        <p class="page-description">Choose the atmosphere that helps you focus.</p>

        <div class="music-page-grid">
            <section class="glass-panel now-playing-panel">
                <div class="album-art" aria-hidden="true">♫</div>
                <p class="eyebrow">NOW PLAYING</p>
                <h2 id="musicTrackTitle" data-role="track-title">Drifting Through Pages</h2>
                <p id="musicTrackArtist" data-role="track-artist">Lo-fi Study Radio</p>

                <audio id="audioPlayer" preload="metadata">
                    <source src="assets/music/previews/study-loop.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>

                <div class="audio-progress">
                    <span id="audioElapsed">0:00</span>
                    <input type="range" id="audioSeek" min="0" max="100" value="0"
                           aria-label="Seek through track">
                    <span id="audioDuration">0:00</span>
                </div>

                <div class="player-controls">
                    <button class="icon-button" id="previousTrack" aria-label="Previous track">
                        <span aria-hidden="true">⏮</span>
                    </button>
                    <button class="dock-play large-play" id="musicPlay" aria-label="Play music">
                        <span aria-hidden="true">▶</span>
                    </button>
                    <button class="icon-button" id="nextTrack" aria-label="Next track">
                        <span aria-hidden="true">⏭</span>
                    </button>
                </div>

                <p class="small-note" id="audioMessage">
                    Add your licensed audio file to enable playback.
                </p>
            </section>

            <section class="glass-panel vibe-library">
                <p class="eyebrow">CHANGE YOUR SURROUNDINGS</p>
                <h2>Pick a vibe</h2>

                <div class="vibe-card-grid" role="group" aria-label="Vibe selection">
                    <button class="vibe-card active" data-vibe="rainy-night" aria-pressed="true">
                        <span class="vibe-art rain-art" aria-hidden="true">☔</span>
                        <strong>Rainy night</strong>
                        <small>Soft rain · mellow keys</small>
                    </button>
                    <button class="vibe-card" data-vibe="coffee-shop" aria-pressed="false">
                        <span class="vibe-art coffee-art" aria-hidden="true">☕</span>
                        <strong>Coffee shop</strong>
                        <small>Warm hum · soft chatter</small>
                    </button>
                    <button class="vibe-card" data-vibe="forest" aria-pressed="false">
                        <span class="vibe-art forest-art" aria-hidden="true">♧</span>
                        <strong>Forest hush</strong>
                        <small>Birdsong · gentle breeze</small>
                    </button>
                </div>

                <a class="button button-ghost full-width" href="?page=dashboard">
                    Return to study room
                </a>
            </section>
        </div>
    </main>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/music.js"></script>
</body>
</html>