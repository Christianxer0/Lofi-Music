// public/assets/js/main.js
"use strict";

document.addEventListener("DOMContentLoaded", () => {
    /* =========================================
       1. AUTHENTICATION (Phase 2)
    ========================================= */
    
    // Login Form Submission
    const loginForm = document.querySelector("#loginForm");
    if (loginForm) {
        loginForm.addEventListener("submit", async (e) => {
            e.preventDefault();
            const formData = new FormData(loginForm);
            const msgBox = loginForm.querySelector(".form-message");
            
            // Reset message state
            if (msgBox) {
                msgBox.hidden = true;
                msgBox.dataset.state = "";
            }
            
            const payload = Object.fromEntries(formData.entries());
            
            try {
                const res = await fetch("/api/auth.php?action=login", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(payload)
                });
                const data = await res.json();
                
                if (data.success) {
                    // Redirect to dashboard on success
                    window.location.href = "/?page=dashboard";
                } else {
                    if (msgBox) {
                        msgBox.textContent = data.error || "Login failed.";
                        msgBox.dataset.state = "error";
                        msgBox.hidden = false;
                    }
                }
            } catch (err) {
                if (msgBox) {
                    msgBox.textContent = "A network error occurred. Please try again.";
                    msgBox.dataset.state = "error";
                    msgBox.hidden = false;
                }
            }
        });
    }

    // Register Form Submission
    const registerForm = document.querySelector("#registerForm");
    if (registerForm) {
        registerForm.addEventListener("submit", async (e) => {
            e.preventDefault();
            const formData = new FormData(registerForm);
            const msgBox = registerForm.querySelector(".form-message");
            
            if (msgBox) {
                msgBox.hidden = true;
                msgBox.dataset.state = "";
            }
            
            const payload = Object.fromEntries(formData.entries());

            try {
                const res = await fetch("/api/auth.php?action=register", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(payload)
                });
                const data = await res.json();
                
                if (data.success) {
                    if (msgBox) {
                        msgBox.textContent = "Account created! You can now log in.";
                        msgBox.dataset.state = "success";
                        msgBox.hidden = false;
                    }
                    registerForm.reset();
                } else {
                    if (msgBox) {
                        msgBox.textContent = data.error || "Registration failed.";
                        msgBox.dataset.state = "error";
                        msgBox.hidden = false;
                    }
                }
            } catch (err) {
                if (msgBox) {
                    msgBox.textContent = "A network error occurred. Please try again.";
                    msgBox.dataset.state = "error";
                    msgBox.hidden = false;
                }
            }
        });
    }

    // Password visibility toggle
    const password = document.querySelector("#password");
    const togglePassword = document.querySelector("#togglePassword");
    if (password && togglePassword) {
        togglePassword.addEventListener("click", () => {
            const isPassword = password.type === "password";
            password.type = isPassword ? "text" : "password";
            
            // Update accessibility attributes
            togglePassword.setAttribute("aria-label", isPassword ? "Hide password" : "Show password");
            togglePassword.setAttribute("aria-pressed", isPassword ? "true" : "false");
        });
    }

    /* =========================================
       2. UI PLACEHOLDERS & DEMO ACTIONS
    ========================================= */
    
    document.querySelector("#googleLogin")?.addEventListener("click", () => {
        alert("Google sign-in will be configured in a later phase.");
    });

    document.querySelector("#forgotPassword")?.addEventListener("click", (event) => {
        event.preventDefault();
        alert("Password recovery is not connected yet.");
    });

    document.querySelector("#roomMenu")?.addEventListener("click", () => {
        alert("Room settings are not connected yet.");
    });

    document.querySelector("#settingsButton")?.addEventListener("click", () => {
        window.location.href = "?page=pomodoro";
    });

    // Note: Join Room and Invite Buddy buttons now use links or have data-demo attributes.
    // If they are still buttons in your dashboard.php, this handles the alert:
    document.querySelector("#joinRoom")?.addEventListener("click", (e) => {
        if (e.currentTarget.tagName === "BUTTON") {
            alert("Study room preview only. Real room sessions come later.");
        }
    });

    document.querySelector("#inviteBuddy")?.addEventListener("click", () => {
        alert("Invitations will be connected to user accounts in a later phase.");
    });


    /* =========================================
       3. VIBE SWITCHING (Phase 1)
    ========================================= */
    const vibeData = {
        "rainy-night": { title: "Rainy night", icon: "☔" },
        "coffee-shop": { title: "Coffee shop", icon: "☕" },
        "forest":       { title: "Forest hush", icon: "♧" }
    };

    function setVibe(vibe) {
        if (!vibeData[vibe]) return;

        document.body.dataset.vibe = vibe;

        try {
            localStorage.setItem("lofiVibe", vibe);
        } catch {
            // Theme still works if browser storage is unavailable
        }

        document.querySelectorAll("[data-vibe]").forEach((button) => {
            if (button.tagName === "BUTTON") {
                button.classList.toggle("active", button.dataset.vibe === vibe);
                button.setAttribute("aria-pressed", button.dataset.vibe === vibe ? "true" : "false");
            }
        });

        const title = document.querySelector("#currentVibeTitle");
        const icon = document.querySelector("#vibeIcon");

        if (title) title.textContent = vibeData[vibe].title;
        if (icon) icon.textContent = vibeData[vibe].icon;
    }

    // Load saved vibe or default to rainy-night
    let savedVibe = "rainy-night";
    try {
        const storedVibe = localStorage.getItem("lofiVibe");
        if (storedVibe && vibeData[storedVibe]) {
            savedVibe = storedVibe;
        }
    } catch {
        // Continue with default
    }

    setVibe(savedVibe);

    // Attach click events to vibe buttons
    document.querySelectorAll("[data-vibe]").forEach((button) => {
        if (button.tagName === "BUTTON") {
            button.addEventListener("click", () => {
                setVibe(button.dataset.vibe);
            });
        }
    });
});