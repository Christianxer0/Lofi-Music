
"use strict";

document.addEventListener("DOMContentLoaded", () => {
    // Password visibility toggle
    const password = document.querySelector("#password");
    const togglePassword = document.querySelector("#togglePassword");

    if (password && togglePassword) {
        togglePassword.addEventListener("click", () => {
            const isPassword = password.type === "password";
            password.type = isPassword ? "text" : "password";
            togglePassword.setAttribute(
                "aria-label",
                isPassword ? "Hide password" : "Show password"
            );
        });
    }

    // Prototype login: no real authentication yet
    const loginForm = document.querySelector("#loginForm");

    if (loginForm) {
        loginForm.addEventListener("submit", (event) => {
            event.preventDefault();
            alert("Demo only: connect PHP authentication in Phase Two.");
        });
    }

    // Prototype registration: no database yet
    const registerForm = document.querySelector("#registerForm");

    if (registerForm) {
        registerForm.addEventListener("submit", (event) => {
            event.preventDefault();
            alert("Demo only: connect account registration in Phase Two.");
        });
    }

    // Google OAuth needs a real OAuth client and backend
    document.querySelector("#googleLogin")?.addEventListener("click", () => {
        alert("Google sign-in will be configured in a later phase.");
    });

    document.querySelector("#forgotPassword")?.addEventListener("click", (event) => {
        event.preventDefault();
        alert("Password recovery is not connected yet.");
    });

    // Vibe switching
    const vibeData = {
        "rainy-night": {
            title: "Rainy night",
            icon: "☔"
        },
        "coffee-shop": {
            title: "Coffee shop",
            icon: "☕"
        },
        "forest": {
            title: "Forest hush",
            icon: "♧"
        }
    };

    function setVibe(vibe) {
        if (!vibeData[vibe]) return;

        document.body.dataset.vibe = vibe;

        try {
            localStorage.setItem("lofiVibe", vibe);
        } catch {
            // The theme still works if browser storage is unavailable.
        }

        document.querySelectorAll("[data-vibe]").forEach((button) => {
            if (button.tagName === "BUTTON") {
                button.classList.toggle(
                    "active",
                    button.dataset.vibe === vibe
                );
            }
        });

        const title = document.querySelector("#currentVibeTitle");
        const icon = document.querySelector("#vibeIcon");

        if (title) title.textContent = vibeData[vibe].title;
        if (icon) icon.textContent = vibeData[vibe].icon;
    }

    let savedVibe = "rainy-night";

    try {
        const storedVibe = localStorage.getItem("lofiVibe");
        if (storedVibe && vibeData[storedVibe]) {
            savedVibe = storedVibe;
        }
    } catch {
        // Continue with the default theme.
    }

    setVibe(savedVibe);

    document.querySelectorAll("[data-vibe]").forEach((button) => {
        if (button.tagName === "BUTTON") {
            button.addEventListener("click", () => {
                setVibe(button.dataset.vibe);
            });
        }
    });

    // Demo room controls
    document.querySelector("#joinRoom")?.addEventListener("click", () => {
        alert("Study room preview only. Real room sessions come later.");
    });

    document.querySelector("#inviteBuddy")?.addEventListener("click", () => {
        alert("Invitations will be connected to user accounts in a later phase.");
    });

    document.querySelector("#settingsButton")?.addEventListener("click", () => {
        window.location.href = "?page=pomodoro";
    });

    document.querySelector("#roomMenu")?.addEventListener("click", () => {
        alert("Room settings are not connected yet.");
    });
});
