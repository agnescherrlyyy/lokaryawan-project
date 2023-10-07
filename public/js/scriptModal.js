btnShowModal = document.querySelectorAll(".btn-modal");
showModal = document.querySelectorAll(".show-modal");
modalContainer = document.querySelector(".modal-container");
closeModal = document.querySelectorAll(".close-modal");

btnShowModal.forEach((item) => {
    item.addEventListener("click", () => {
        modalContainer.classList.remove("hidden");
        let idBtnModal = item.getAttribute("id");
        showModal.forEach((modal) => {
            let idShowModal = modal.getAttribute("id");
            if (idBtnModal === idShowModal) {
                modal.classList.add("active");
            } else {
                modal.classList.remove("active");
            }
        });
    });
});

closeModal.forEach((item) => {
    item.addEventListener("click", () => {
        modalContainer.classList.add("hidden");
        showModal.forEach((modal) => {
            modal.classList.remove("active");
        });
    });
});
