$(() => {
    const dropdowns = document.querySelectorAll(".dropdown");

    for (const dropdown of dropdowns) {
        const selectBox = dropdown.querySelector(".select-box");
        const optionsContainer = dropdown.querySelector(".options-container");
        const options = optionsContainer.querySelectorAll(".option");
        const input = dropdown.querySelector('input[type="hidden"]');

        // select-boxのクリックイベント
        selectBox.addEventListener("click", () => {
            // 他の全てのoptions-containerを閉じる
            for (const container of document.querySelectorAll(".options-container")) {
                if (container !== optionsContainer) {
                    container.style.display = "none";
                }
            }
            // このoptions-containerの表示/非表示を切り替える
            optionsContainer.style.display =
                optionsContainer.style.display === "block" ? "none" : "block";
        });

        // optionのクリックイベント
        for (const option of options) {
            option.addEventListener("click", () => {
                selectBox.textContent = option.textContent;
                input.value = option.getAttribute("data-value");
                optionsContainer.style.display = "none";
            });
        }
    }

    // オプション以外の場所をクリックしたときに全てのドロップダウンを閉じる
    window.addEventListener("click", (e) => {
        if (!e.target.matches(".select-box")) {
            for (const container of document.querySelectorAll(".options-container")) {
                container.style.display = "none";
            }
        }
    });

    document.addEventListener("DOMContentLoaded", () => {
        // オプションがクリックされたときのイベントリスナーを設定
        for (const option of document.querySelectorAll(".option")) {
            option.addEventListener("click", function () {
                // クリックされたオプションのdata-valueを取得
                const value = this.getAttribute("data-value");
                // 取得した値をinputタグのvalueに設定
                document.querySelector('input[name="category"]').value = value;
            });
        }
    });
});
