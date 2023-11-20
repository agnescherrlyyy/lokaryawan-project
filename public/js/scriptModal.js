let modalContainer = document.querySelector('.modal-container');
let modalBox = document.querySelectorAll('.show-modal');

document.querySelectorAll('.w-full .btn-modal').forEach((btn) => {
    btn.onclick = () => {
        modalContainer.classList.replace('hidden', 'flex');
        let nameButton = btn.getAttribute('data-name');
        modalBox.forEach((modal) => {
            let itemModal = modal.getAttribute('data-target');
            if (nameButton === itemModal) {
                modal.classList.add('active');
            }
        });
    }
});

document.querySelectorAll('.close-modal').forEach((btn) => {
    btn.onclick = () => {
        modalContainer.classList.replace('flex', 'hidden');
        modalBox.forEach((modal) => {
            modal.classList.remove('active');
        });
    }
});