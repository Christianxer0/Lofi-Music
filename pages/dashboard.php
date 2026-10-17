<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1b121d">
    <title>Your Study Room — LoFi Room</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="app-page" data-vibe="rainy-night">
    <header class="app-topbar">
        <a class="brand" href="?page=dashboard">
            <span class="brand-icon" aria-hidden="true">☕</span>
            <span>lofi room</span>
        </a>

        <div class="topbar-status">
            <span class="status-dot" aria-hidden="true"></span>
            <span>Quiet hours</span>
            <span class="status-separator" aria-hidden="true">•</span>
            <span>12 studying now</span>
        </div>

        <div class="topbar-actions">
            <button class="icon-button" id="settingsButton" aria-label="Settings">
                <span aria-hidden="true">⚙</span>
            </button>
            <a class="avatar" href="?page=login" aria-label="Account">JD</a>
        </div>
    </header>

    <main class="study-layout">
        <section class="dashboard-intro">
            <p class="eyebrow"><span aria-hidden="true">✦</span> YOUR SPACE TO FOCUS</p>
            <h1>Slow down.<br>Tune in.</h1>
            <p>A quiet corner for deep work, soft music, and good company.</p>

            <section class="glass-panel vibe-panel">
                <div class="panel-heading">
                    <div>
                        <p class="eyebrow">ROOM &amp; VIBE</p>
                        <h2 id="currentVibeTitle">Rainy night</h2>
                    </div>
                    <span id="vibeIcon" aria-hidden="true">☔</span>
                </div>

                <div class="vibe-options" role="group" aria-label="Room vibe">
                    <button class="vibe-option active" data-vibe="rainy-night" aria-pressed="true">
                        <span aria-hidden="true">☔</span> Rainy night
                    </button>
                    <button class="vibe-option" data-vibe="coffee-shop" aria-pressed="false">
                        <span aria-hidden="true">☕</span> Coffee shop
                    </button>
                    <button class="vibe-option" data-vibe="forest" aria-pressed="false">
                        <span aria-hidden="true">♧</span> Forest hush
                    </button>
                </div>

                <a class="panel-link" href="?page=music">
                    <span aria-hidden="true">✦</span> Customize your room
                    <span aria-hidden="true">›</span>
                </a>
            </section>
        </section>

        <section class="glass-panel timer-panel">
            <div class="timer-tabs" role="group" aria-label="Timer mode">
                <button class="timer-tab active" data-mode="focus" aria-pressed="true">Focus</button>
                <button class="timer-tab" data-mode="short" aria-pressed="false">Short break</button>
                <button class="timer-tab" data-mode="long" aria-pressed="false">Long break</button>
            </div>

            <p class="eyebrow timer-eyebrow" aria-hidden="true">— &nbsp; READY WHEN YOU ARE &nbsp; —</p>

            <div class="timer-display" id="timerDisplay" aria-live="polite">25:00</div>

            <div class="timer-progress" aria-hidden="true">
                <span class="filled"></span>
                <span class="filled"></span>
                <span></span>
                <span></span>
            </div>

            <button class="button timer-start" id="startTimer">
                <span aria-hidden="true">▷</span>&nbsp; Start studying
            </button>
            <p class="timer-session" id="timerStatus">Session 1 of 4 · then take a longer break</p>
            <a class="timer-settings" href="?page=pomodoro">
                <span aria-hidden="true">⚙</span>&nbsp; Customize timer
            </a>
        </section>

        <aside class="glass-panel room-panel">
            <div class="room-heading">
                <div>
                    <p class="eyebrow">STUDY ROOM</p>
                    <h2>Night Owls</h2>
                </div>
                <button class="text-button" id="roomMenu" aria-label="Room menu">
                    <span aria-hidden="true">···</span>
                </button>
            </div>

            <div class="member-list">
                <div class="member-row">
                    <div class="member-avatar avatar-pink">
                        MK<span class="presence" aria-hidden="true"></span>
                    </div>
                    <div class="member-info">
                        <strong>Mika (you)</strong>
                        <small>Deep focus</small>
                    </div>
                    <span class="online-dot" aria-label="Online"></span>
                </div>

                <div class="member-row">
                    <div class="member-avatar avatar-purple">
                        SL<span class="presence" aria-hidden="true"></span>
                    </div>
                    <div class="member-info">
                        <strong>Sol</strong>
                        <small>Reading</small>
                    </div>
                    <span class="online-dot" aria-label="Online"></span>
                </div>

                <div class="member-row">
                    <div class="member-avatar avatar-gold">
                        AN<span class="presence" aria-hidden="true"></span>
                    </div>
                    <div class="member-info">
                        <strong>Ana</strong>
                        <small>Essay draft</small>
                    </div>
                    <span class="online-dot" aria-label="Online"></span>
                </div>
            </div>

            <!-- Phase 1: static preview. Becomes ?page=room link once pages/room.php exists. -->
            <a class="button room-join" href="?page=room">
                <span aria-hidden="true">▣</span>&nbsp; Join the quiet room
            </a>

            <button class="button button-ghost room-invite" id="inviteBuddy" data-demo="true"
                title="Invitations arrive in Phase 3">
                <span aria-hidden="true">＋</span>&nbsp; Invite a study buddy
            </button>

            <div class="privacy-note">
                <span aria-hidden="true">♧</span>
                <div>
                    <strong>This is a quiet room</strong>
                    <small>Cameras only, no microphones</small>
                </div>
            </div>
        </aside>

        <section class="glass-panel music-dock">
            <div class="track-art" aria-hidden="true">♬</div>
            <div class="track-info">
                <p class="eyebrow">NOW PLAYING</p>
                <strong id="dockTrackTitle" data-role="track-title">Drifting Through Pages</strong>
                <small id="dockTrackArtist" data-role="track-artist">mellow keys · 2:18</small>
            </div>
            <div class="dock-controls">
                <button class="dock-play" id="dockPlay" aria-label="Play music">
                    <span aria-hidden="true">▶</span>
                </button>
                <button class="icon-button" id="dockNext" aria-label="Next track">
                    <span aria-hidden="true">⏭</span>
                </button>
                <span class="volume-icon" aria-hidden="true">◖</span>
                <div class="volume-line" aria-hidden="true"><span></span></div>
            </div>
        </section>

        <a class="immersive-button" href="?page=dashboard" data-demo="true" title="Immersive mode arrives in Phase 8">
            <span aria-hidden="true">⛶</span>&nbsp; Immersive mode
        </a>
    </main>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/pomodoro.js"></script>
    <script src="assets/js/music.js"></script>
</body>

</html>