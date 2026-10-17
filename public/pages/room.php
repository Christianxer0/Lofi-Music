<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1b121d">
    <title>Night Owls — LoFi Room</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="app-page" data-vibe="rainy-night">
    <header class="app-topbar">
        <a class="room-back" href="?page=dashboard">
            <span class="back-icon" aria-hidden="true">←</span>
            <strong>Night Owls</strong>
        </a>

        <div class="room-topbar-status">
            <span class="room-badge">QUIET ROOM</span>
            <span class="status-separator" aria-hidden="true">·</span>
            <span>Focus session · <span id="roomTimer">18:42</span></span>
        </div>

        <div class="topbar-actions">
            <button class="theme-pill"
                    id="roomTheme"
                    type="button"
                    data-demo="true"
                    title="Theme switching arrives in Phase 7">
                <span aria-hidden="true">☔</span> Rainy night
            </button>
        </div>
    </header>

    <main class="room-layout">
        <section class="room-stage">
            <div class="room-status-row">
                <div class="room-status-left">
                    <span class="status-dot" aria-hidden="true"></span>
                    <span><strong>4</strong> studying together</span>
                </div>
                <div class="room-status-right">
                    <span aria-hidden="true">♧</span>
                    Cameras only · stay quiet, stay connected
                </div>
            </div>

            <div class="camera-grid">
                <article class="camera-tile">
                    <button class="tile-menu"
                            type="button"
                            aria-label="Options for You"
                            data-demo="true">···</button>
                    <div class="tile-avatar avatar-pink">JD</div>
                    <div class="tile-label">
                        <strong>You</strong>
                        <small>Design Research</small>
                    </div>
                </article>

                <article class="camera-tile">
                    <button class="tile-menu"
                            type="button"
                            aria-label="Options for Mika"
                            data-demo="true">···</button>
                    <div class="tile-avatar avatar-purple">MK</div>
                    <div class="tile-label">
                        <strong>Mika</strong>
                        <small>Psychology notes</small>
                    </div>
                </article>

                <article class="camera-tile">
                    <button class="tile-menu"
                            type="button"
                            aria-label="Options for Sol"
                            data-demo="true">···</button>
                    <div class="tile-avatar avatar-purple">SL</div>
                    <div class="tile-label">
                        <strong>Sol</strong>
                        <small>Chapter four</small>
                    </div>
                </article>

                <article class="camera-tile">
                    <button class="tile-menu"
                            type="button"
                            aria-label="Options for Ana"
                            data-demo="true">···</button>
                    <div class="tile-avatar avatar-gold">AN</div>
                    <div class="tile-label">
                        <strong>Ana</strong>
                        <small>Essay outline</small>
                    </div>
                </article>
            </div>
        </section>

        <aside class="glass-panel chat-panel">
            <div class="chat-heading">
                <div>
                    <p class="eyebrow">QUIET CONVERSATION</p>
                    <h2>Room chat</h2>
                </div>
                <button class="text-button"
                        id="chatClose"
                        type="button"
                        aria-label="Close chat"
                        data-demo="true"
                        title="Chat collapse arrives in Phase 5">
                    <span aria-hidden="true">✕</span>
                </button>
            </div>

            <div class="chat-filter">
                <label for="chatAudience" class="visually-hidden">Message audience</label>
                <select id="chatAudience" class="chat-select">
                    <option value="everyone">Everyone</option>
                </select>
            </div>

            <div class="chat-log" id="chatLog" aria-live="polite">
                <p class="chat-day">TODAY</p>

                <div class="chat-message">
                    <div class="chat-meta">
                        <strong>Sol</strong>
                        <small>8:42 PM</small>
                    </div>
                    <p>Starting chapter four now. Good luck everyone!</p>
                </div>

                <div class="chat-message">
                    <div class="chat-meta">
                        <strong>Ana</strong>
                        <small>8:43 PM</small>
                    </div>
                    <p>I shared the review sheet in files if anyone needs it.</p>
                </div>

                <p class="chat-system">
                    <span aria-hidden="true">✦</span> Mika started a focus session
                </p>
            </div>

            <form class="chat-compose" id="chatForm" novalidate>
                <div class="form-message" role="status" aria-live="polite" hidden></div>
                <label for="chatMessage" class="visually-hidden">Message</label>
                <input id="chatMessage"
                       name="message"
                       type="text"
                       autocomplete="off"
                       placeholder="Message everyone…"
                       maxlength="500">
                <button class="chat-send" type="submit" aria-label="Send message">
                    <span aria-hidden="true">▶</span>
                </button>
            </form>
        </aside>

        <nav class="room-bottom-bar" aria-label="Room controls">
            <button class="room-control"
                    id="toggleCamera"
                    type="button"
                    data-demo="true"
                    title="Camera preview arrives in Phase 4">
                <span aria-hidden="true">📷</span>
                <small>Camera on</small>
            </button>

            <button class="room-control"
                    id="openChat"
                    type="button"
                    data-demo="true">
                <span aria-hidden="true">💬</span>
                <small>Chat</small>
                <span class="control-badge">2</span>
            </button>

            <button class="room-control"
                    id="openPeople"
                    type="button"
                    data-demo="true"
                    title="People list arrives in Phase 3">
                <span aria-hidden="true">👥</span>
                <small>People</small>
            </button>

            <button class="room-control"
                    id="openFiles"
                    type="button"
                    data-demo="true"
                    title="File sharing arrives in Phase 6">
                <span aria-hidden="true">📁</span>
                <small>Files</small>
            </button>

            <button class="room-control"
                    id="inviteFriend"
                    type="button"
                    data-demo="true"
                    title="Invitations arrive in Phase 3">
                <span aria-hidden="true">＋</span>
                <small>Invite</small>
            </button>

            <a class="room-control room-control-danger" href="?page=dashboard">
                <span aria-hidden="true">✕</span>
                <small>Leave room</small>
            </a>
        </nav>
    </main>

    <script src="assets/js/main.js"></script>
</body>
</html>