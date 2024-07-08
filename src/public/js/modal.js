document.addEventListener("DOMContentLoaded", () => {
    for (const button of document.querySelectorAll(".openModalBtn")) {
        button.addEventListener("click", function () {
            const modalId = this.getAttribute("data-modal-id");
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "block";
            }
        });
    }

    for (const span of document.querySelectorAll(".modal .close")) {
        span.addEventListener("click", function () {
            this.closest(".modal").style.display = "none";
        });
    }

    window.addEventListener("click", (event) => {
        if (event.target.classList.contains("modal")) {
            event.target.style.display = "none";
        }
    });
});
