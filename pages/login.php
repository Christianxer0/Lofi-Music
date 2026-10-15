
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back — LoFi Room</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="auth-page">
    <a class="brand auth-brand" href="?page=home">
        <span class="brand-icon">☕</span>
        <span>lofi room</span>
    </a>

    <main class="auth-card">
        <div class="auth-logo">☕</div>
        <p class="eyebrow">YOUR PEACEFUL STUDY SPACE</p>
        <h1>Welcome Back</h1>
        <p class="auth-subtitle">Ready to study?</p>

        <form id="loginForm">
            <label for="email">Email</label>
            <div class="input-wrap">
                <span>✉</span>
                <input id="email" type="email" placeholder="Enter your email" required>
            </div>

            <div class="label-row">
                <label for="password">Password</label>
                <a href="#" id="forgotPassword">Forgot password?</a>
            </div>

            <div class="input-wrap">
                <span>♙</span>
                <input id="password" type="password" placeholder="Enter your password" required>
                <button class="input-action" type="button" id="togglePassword"
                        aria-label="Show password">◉</button>
            </div>

            <button class="button auth-submit" type="submit">
                ☕ &nbsp; Start studying
            </button>
        </form>

        <div class="auth-divider"><span>OR</span></div>

        <button class="button button-ghost google-button" id="googleLogin" type="button">
            <span class="google-mark">G</span>
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
