document.addEventListener("DOMContentLoaded", () => {
    // モーダルを開くボタンにイベントリスナーを設定
    for (const button of document.querySelectorAll(".btn-show")) {
        button.addEventListener("click", function (event) {
            event.preventDefault(); // フォームの送信を防止
            const modalId = this.getAttribute("data-modal-id");
            const modal = document.getElementById(modalId);
            modal.style.display = "block";
        });
    }

    // モーダルを閉じるボタンにイベントリスナーを設定
    for (const closeButton of document.querySelectorAll(".close")) {
        closeButton.addEventListener("click", function (event) {
            this.closest(".modal").style.display = "none";
        });
    }

    // モーダル外のクリックでモーダルを閉じる処理も追加することができます
    window.addEventListener("click", (event) => {
        if (event.target.classList.contains("modal")) {
            event.target.style.display = "none";
        }
    });
});
