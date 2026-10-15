
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Study Room — LoFi Room</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="app-page" data-vibe="rainy-night">
    <header class="app-topbar">
        <a class="brand" href="?page=dashboard">
            <span class="brand-icon">☕</span>
            <span>lofi room</span>
        </a>

        <div class="topbar-status">
            <span class="status-dot"></span>
            <span>Quiet hours</span>
            <span class="status-separator">•</span>
            <span>12 studying now</span>
        </div>

        <div class="topbar-actions">
            <button class="icon-button" id="settingsButton" aria-label="Settings">⚙</button>
            <a class="avatar" href="?page=login" aria-label="Account">JD</a>
        </div>
    </header>

    <main class="study-layout">
        <section class="dashboard-intro">
            <p class="eyebrow">✦ YOUR SPACE TO FOCUS</p>
            <h1>Slow down.<br>Tune in.</h1>
            <p>A quiet corner for deep work, soft music, and good company.</p>

            <section class="glass-panel vibe-panel">
                <div class="panel-heading">
                    <div>
                        <p class="eyebrow">ROOM &amp; VIBE</p>
                        <h2 id="currentVibeTitle">Rainy night</h2>
                    </div>
                    <span id="vibeIcon">☔</span>
                </div>

                <div class="vibe-options">
                    <button class="vibe-option active" data-vibe="rainy-night">
                        <span>☔</span> Rainy night
                    </button>
                    <button class="vibe-option" data-vibe="coffee-shop">
                        <span>☕</span> Coffee shop
                    </button>
                    <button class="vibe-option" data-vibe="forest">
                        <span>♧</span> Forest hush
                    </button>
                </div>

                <a class="panel-link" href="?page=music">
                    <span>✦</span> Customize your room <span>›</span>
                </a>
            </section>
        </section>

        <section class="glass-panel timer-panel">
            <div class="timer-tabs" role="group" aria-label="Timer mode">
                <button class="timer-tab active" data-mode="focus">Focus</button>
                <button class="timer-tab" data-mode="short">Short break</button>
                <button class="timer-tab" data-mode="long">Long break</button>
            </div>

            <p class="eyebrow timer-eyebrow">— &nbsp; READY WHEN YOU ARE &nbsp; —</p>

            <div class="timer-display" id="timerDisplay" aria-live="off">25:00</div>

            <div class="timer-progress" aria-hidden="true">
                <span class="filled"></span>
                <span class="filled"></span>
                <span></span>
                <span></span>
            </div>

            <button class="button timer-start" id="startTimer">▷ &nbsp; Start studying</button>
            <p class="timer-session" id="timerStatus">Session 1 of 4 · then take a longer break</p>
            <a class="timer-settings" href="?page=pomodoro">⚙ &nbsp; Customize timer</a>
        </section>

        <aside class="glass-panel room-panel">
            <div class="room-heading">
                <div>
                    <p class="eyebrow">STUDY ROOM</p>
                    <h2>Night Owls</h2>
                </div>
                <button class="text-button" id="roomMenu" aria-label="Room menu">···</button>
            </div>

            <div class="member-list">
                <div class="member-row">
                    <div class="member-avatar avatar-pink">MK<span class="presence"></span></div>
                    <div class="member-info">
                        <strong>Mika (you)</strong>
                        <small>Deep focus</small>
                    </div>
                    <span class="online-dot"></span>
                </div>

                <div class="member-row">
                    <div class="member-avatar avatar-purple">SL<span class="presence"></span></div>
                    <div class="member-info">
                        <strong>Sol</strong>
                        <small>Reading</small>
                    </div>
                    <span class="online-dot"></span>
                </div>

                <div class="member-row">
                    <div class="member-avatar avatar-gold">AN<span class="presence"></span></div>
                    <div class="member-info">
                        <strong>Ana</strong>
                        <small>Essay draft</small>
                    </div>
                    <span class="online-dot"></span>
                </div>
            </div>

            <button class="button room-join" id="joinRoom">▣ &nbsp; Join the quiet room</button>
            <button class="button button-ghost room-invite" id="inviteBuddy">＋ &nbsp; Invite a study buddy</button>

            <div class="privacy-note">
                <span>♧</span>
                <div>
                    <strong>This is a quiet room</strong>
                    <small>Cameras only, no microphones</small>
                </div>
            </div>
        </aside>

        <section class="glass-panel music-dock">
            <div class="track-art">♬</div>
            <div class="track-info">
                <p class="eyebrow">NOW PLAYING</p>
                <strong id="dockTrackTitle">Drifting Through Pages</strong>
                <small id="dockTrackArtist">mellow keys · 2:18</small>
            </div>
            <div class="dock-controls">
                <button class="dock-play" id="dockPlay" aria-label="Play music">▶</button>
                <button class="icon-button" id="dockNext" aria-label="Next track">⏭</button>
                <span class="volume-icon">◖</span>
                <div class="volume-line"><span></span></div>
            </div>
        </section>

        <a class="immersive-button" href="?page=dashboard">⛶ &nbsp; Immersive mode</a>
    </main>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/pomodoro.js"></script>
    <script src="assets/js/music.js"></script>
</body>
</html>
