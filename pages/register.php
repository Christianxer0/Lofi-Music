<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1b121d">
    <title>Create Account — LoFi Room</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="auth-page">
    <a class="brand auth-brand" href="?page=home">
        <span class="brand-icon" aria-hidden="true">☕</span>
        <span>lofi room</span>
    </a>

    <main class="auth-card">
        <div class="auth-logo" aria-hidden="true">☕</div>
        <p class="eyebrow"><span aria-hidden="true">✦</span> MAKE ROOM FOR YOURSELF</p>
        <h1>Create Account</h1>
        <p class="auth-subtitle">Your peaceful corner awaits.</p>

        <form id="registerForm" novalidate>
            <div class="form-message" role="status" aria-live="polite" hidden></div>

            <label for="username">Username</label>
            <div class="input-wrap">
                <span aria-hidden="true">♙</span>
                <input id="username"
                       name="username"
                       type="text"
                       autocomplete="username"
                       placeholder="Choose a username"
                       required
                       minlength="3">
            </div>

            <label for="registerEmail">Email</label>
            <div class="input-wrap">
                <span aria-hidden="true">✉</span>
                <input id="registerEmail"
                       name="email"
                       type="email"
                       autocomplete="email"
                       placeholder="Enter your email"
                       required>
            </div>

            <label for="registerPassword">Password</label>
            <div class="input-wrap">
                <span aria-hidden="true">♙</span>
                <input id="registerPassword"
                       name="password"
                       type="password"
                       autocomplete="new-password"
                       placeholder="At least 8 characters"
                       minlength="8"
                       required>
            </div>

            <button class="button auth-submit" type="submit">
                Create my account
            </button>
        </form>

        <p class="auth-switch">
            Already have an account?
            <a href="?page=login">Log in</a>
        </p>

        <p class="auth-footnote">A little peace in your busy day.</p>
    </main>

    <script src="assets/js/main.js"></script>
</body>
</html>