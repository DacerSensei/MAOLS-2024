document.body.addEventListener("click", function (event) {
    const livestockElement = event.target.closest(".livestock");
    if (livestockElement && !event.target.closest(".livestock-actions")) {
        const livestockActions = livestockElement.querySelector(".livestock-actions");
        if (livestockActions) {
            livestockActions.classList.toggle("open");
        }
    }
});