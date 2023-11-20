const btnDropdown = document.querySelectorAll('.dropdown-button');
const listDropdown = document.querySelectorAll('.dropdown-menu')
const itemDropdown = document.querySelectorAll('#item-dropdown');

btnDropdown.forEach((item) => {
    item.addEventListener('click', (e) => {
        let buttonTarget = item.getAttribute('button-target');
        listDropdown.forEach((menu) => {
            let dataTarget = menu.getAttribute('data-target');
            if ( buttonTarget === dataTarget ) {
                menu.classList.toggle('active');
            } else {
                console.log('Tidak Berhasil');
                menu.classList.remove('active');
            }
        })
    })
})

itemDropdown.forEach((item) => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        listDropdown.forEach((menu) => {
            menu.classList.remove('active');
        })
    });
});
