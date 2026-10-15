
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomodoro — LoFi Room</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="app-page" data-vibe="rainy-night">
    <header class="app-topbar">
        <a class="brand" href="?page=dashboard">
            <span class="brand-icon">☕</span><span>lofi room</span>
        </a>
        <nav class="top-nav">
            <a href="?page=dashboard">Dashboard</a>
            <a href="?page=music">Music</a>
            <a href="?page=pomodoro" aria-current="page">Pomodoro</a>
        </nav>
        <a class="avatar" href="?page=login">JD</a>
    </header>

    <main class="content-page pomodoro-page">
        <p class="eyebrow">◷ FIND YOUR RHYTHM</p>
        <h1>A little focus goes a long way.</h1>
        <p class="page-description">Work gently. Rest intentionally.</p>

        <div class="pomodoro-grid">
            <section class="glass-panel full-timer-panel">
                <div class="timer-tabs" role="group" aria-label="Timer mode">
                    <button class="timer-tab active" data-mode="focus">Focus</button>
                    <button class="timer-tab" data-mode="short">Short break</button>
                    <button class="timer-tab" data-mode="long">Long break</button>
                </div>

                <div class="timer-ring">
                    <div>
                        <div class="timer-display" id="timerDisplay" aria-live="off">25:00</div>
                        <p id="timerModeLabel">TIME TO FOCUS</p>
                    </div>
                </div>

                <p class="timer-session" id="timerStatus">Session 1 of 4</p>

                <div class="timer-actions">
                    <button class="button" id="startTimer">▷ &nbsp; Start</button>
                    <button class="button button-ghost" id="resetTimer">↺ &nbsp; Reset</button>
                </div>
            </section>

            <aside class="glass-panel timer-settings-panel">
                <p class="eyebrow">MAKE IT YOURS</p>
                <h2>Timer settings</h2>

                <label for="focusMinutes">Focus duration (minutes)</label>
                <input class="settings-input" type="number" id="focusMinutes"
                       min="1" max="180" value="25">

                <label for="shortMinutes">Short break (minutes)</label>
                <input class="settings-input" type="number" id="shortMinutes"
                       min="1" max="60" value="5">

                <label for="longMinutes">Long break (minutes)</label>
                <input class="settings-input" type="number" id="longMinutes"
                       min="1" max="90" value="15">

                <label class="setting-check">
                    <input type="checkbox" id="autoStart">
                    Automatically start the next session
                </label>

                <label class="setting-check">
                    <input type="checkbox" id="keepMusic" checked>
                    Keep music playing during breaks
                </label>

                <button class="button full-width" id="saveTimerSettings">
                    Save settings
                </button>
                <p class="small-note" id="settingsMessage"></p>
            </aside>
        </div>
    </main>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/pomodoro.js"></script>
</body>
</html>
