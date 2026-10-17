
"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const display = document.querySelector("#timerDisplay");
    if (!display) return;

    const startButton = document.querySelector("#startTimer");
    const resetButton = document.querySelector("#resetTimer");
    const status = document.querySelector("#timerStatus");
    const modeLabel = document.querySelector("#timerModeLabel");
    const settingsMessage = document.querySelector("#settingsMessage");

    const durationInputs = {
        focus: document.querySelector("#focusMinutes"),
        short: document.querySelector("#shortMinutes"),
        long: document.querySelector("#longMinutes")
    };

    const labels = {
        focus: "TIME TO FOCUS",
        short: "TAKE A BREATHER",
        long: "TIME TO REST"
    };

    const defaults = {
        focus: 25,
        short: 5,
        long: 15
    };

    let durations = { ...defaults };
    let mode = "focus";
    let remaining = durations[mode] * 60;
    let running = false;
    let intervalId = null;
    let endTime = 0;
    let focusSessions = 0;

    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const secs = seconds % 60;

        return `${String(minutes).padStart(2, "0")}:${String(secs).padStart(2, "0")}`;
    }

    function updateStatus() {
        if (status) {
            status.textContent = `Session ${(focusSessions % 4) + 1} of 4`;
        }
    }

    function render() {
        display.textContent = formatTime(remaining);

        if (modeLabel) {
            modeLabel.textContent = labels[mode];
        }

        if (startButton) {
            startButton.innerHTML = running
                ? "Ⅱ &nbsp; Pause"
                : "▷ &nbsp; Start";
        }

        document.querySelectorAll("[data-mode]").forEach((button) => {
            button.classList.toggle("active", button.dataset.mode === mode);
        });

        updateStatus();

        document.title = `${formatTime(remaining)} — LoFi Room`;
    }

    function stopInterval() {
        if (intervalId !== null) {
            clearInterval(intervalId);
            intervalId = null;
        }
    }

    function finishSession() {
        stopInterval();
        running = false;

        if (mode === "focus") {
            focusSessions += 1;
        }

        render();
        alert(`${labels[mode]} complete!`);

        const autoStart = document.querySelector("#autoStart");

        if (autoStart?.checked) {
            if (mode === "focus") {
                mode = focusSessions % 4 === 0 ? "long" : "short";
            } else {
                mode = "focus";
            }

            remaining = durations[mode] * 60;
            render();
            startTimer();
        }
    }

    function tick() {
        remaining = Math.max(0, Math.ceil((endTime - Date.now()) / 1000));
        render();

        if (remaining <= 0) {
            finishSession();
        }
    }

    function startTimer() {
        if (running) {
            // Pause while preserving the remaining time.
            remaining = Math.max(0, Math.ceil((endTime - Date.now()) / 1000));
            running = false;
            stopInterval();
            render();
            return;
        }

        if (remaining <= 0) {
            remaining = durations[mode] * 60;
        }

        running = true;
        endTime = Date.now() + remaining * 1000;

        stopInterval();
        intervalId = setInterval(tick, 250);
        render();
    }

    function selectMode(nextMode) {
        if (!Object.hasOwn(durations, nextMode)) return;

        stopInterval();
        running = false;
        mode = nextMode;
        remaining = durations[mode] * 60;
        render();
    }

    function resetTimer() {
        stopInterval();
        running = false;
        remaining = durations[mode] * 60;
        render();
    }

    function readDuration(input, fallback, maximum) {
        if (!input) return fallback;

        const value = Number(input.value);

        if (!Number.isFinite(value)) return fallback;

        return Math.min(maximum, Math.max(1, Math.floor(value)));
    }

    function saveSettings() {
        durations = {
            focus: readDuration(durationInputs.focus, defaults.focus, 180),
            short: readDuration(durationInputs.short, defaults.short, 60),
            long: readDuration(durationInputs.long, defaults.long, 90)
        };

        // Show sanitized values in the fields.
        Object.entries(durationInputs).forEach(([key, input]) => {
            if (input) input.value = durations[key];
        });

        resetTimer();

        if (settingsMessage) {
            settingsMessage.textContent = "Your timer settings have been updated.";
        }
    }

    startButton?.addEventListener("click", startTimer);
    resetButton?.addEventListener("click", resetTimer);

    document.querySelectorAll("[data-mode]").forEach((button) => {
        button.addEventListener("click", () => {
            selectMode(button.dataset.mode);
        });
    });

    document.querySelector("#saveTimerSettings")?.addEventListener(
        "click",
        saveSettings
    );

    render();
});
