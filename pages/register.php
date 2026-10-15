
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account — LoFi Room</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="auth-page">
    <a class="brand auth-brand" href="?page=home">
        <span class="brand-icon">☕</span>
        <span>lofi room</span>
    </a>

    <main class="auth-card">
        <div class="auth-logo">☕</div>
        <p class="eyebrow">MAKE ROOM FOR YOURSELF</p>
        <h1>Create Account</h1>
        <p class="auth-subtitle">Your peaceful corner awaits.</p>

        <form id="registerForm">
            <label for="username">Username</label>
            <div class="input-wrap">
                <span>♙</span>
                <input id="username" type="text" placeholder="Choose a username" required minlength="3">
            </div>

            <label for="registerEmail">Email</label>
            <div class="input-wrap">
                <span>✉</span>
                <input id="registerEmail" type="email" placeholder="Enter your email" required>
            </div>

            <label for="registerPassword">Password</label>
            <div class="input-wrap">
                <span>♙</span>
                <input id="registerPassword" type="password"
                       placeholder="At least 8 characters" minlength="8" required>
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
