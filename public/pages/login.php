<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1b121d">
    <title>Welcome Back — LoFi Room</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="auth-page">
    <a class="brand auth-brand" href="?page=home">
        <span class="brand-icon" aria-hidden="true">☕</span>
        <span>lofi room</span>
    </a>

    <main class="auth-card">
        <div class="auth-logo" aria-hidden="true">☕</div>
        <p class="eyebrow"><span aria-hidden="true">✦</span> YOUR PEACEFUL STUDY SPACE</p>
        <h1>Welcome Back</h1>
        <p class="auth-subtitle">Ready to study?</p>

        <form id="loginForm" novalidate>
            <div class="form-message" role="status" aria-live="polite" hidden></div>

            <label for="email">Email</label>
            <div class="input-wrap">
                <span aria-hidden="true">✉</span>
                <input id="email"
                       name="email"
                       type="email"
                       autocomplete="email"
                       placeholder="Enter your email"
                       required>
            </div>

            <div class="label-row">
                <label for="password">Password</label>
                <a href="#" id="forgotPassword">Forgot password?</a>
            </div>

            <div class="input-wrap">
                <span aria-hidden="true">♙</span>
                <input id="password"
                       name="password"
                       type="password"
                       autocomplete="current-password"
                       placeholder="Enter your password"
                       required>
                <button class="input-action"
                        type="button"
                        id="togglePassword"
                        aria-label="Show password"
                        aria-pressed="false">
                    <span aria-hidden="true">◉</span>
                </button>
            </div>

            <button class="button auth-submit" type="submit">
                <span aria-hidden="true">☕</span>&nbsp; Start studying
            </button>
        </form>

        <div class="auth-divider" aria-hidden="true"><span>OR</span></div>

        <button class="button button-ghost google-button"
                id="googleLogin"
                type="button"
                data-demo="true"
                title="Google sign-in will be enabled in Phase 2">
            <span class="google-mark" aria-hidden="true">G</span>
            Continue with Google
        </button>

        <p class="auth-switch">
            Don't have an account?
            <a href="?page=register">Sign Up</a>
        </p>

        <p class="auth-footnote">This is your peaceful digital study space.</p>
    </main>

    <script src="assets/js/main.js"></script>
</body>
</html>