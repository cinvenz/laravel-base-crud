require("./bootstrap");
require("bootstrap");

const eleOverlay = document.querySelector(".overlay");
console.log(eleOverlay);
if (eleOverlay) {
    const btnsDelete = document.querySelectorAll(".btn-delete-me");
    btnsDelete.forEach((btn) => {
        btn.addEventListener("click", function () {
            eleOverlay.classList.remove("d-none");
            eleOverlay
                .querySelector("form")
                .setAttribute(
                    "action",
                    "http://localhost:8000/comics/" + this.dataset.id
                );
        });
    });

    const eleBtnClose = eleOverlay.querySelector(".btn-close-me");

    eleBtnClose.addEventListener("click", function () {
        eleOverlay.classList.add("d-none");
    });
}
