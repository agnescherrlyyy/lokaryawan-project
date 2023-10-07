const btnDropdown = document.querySelectorAll('.dropdown-button');
const listDropdown = document.querySelectorAll('.dropdown-menu')
const itemDropdown = document.querySelectorAll('#item-dropdown');

// btnDropdown.addEventListener('click', () => {
//     listDropdown.classList.toggle('active');
// });

btnDropdown.forEach((item) => {
    item.addEventListener('click', (e) => {
        let idBtnDropdown = item.getAttribute('id');
        listDropdown.forEach((menu) => {
            let idTargetMenu = menu.getAttribute('id');
            if ( idBtnDropdown === idTargetMenu ) {
                menu.classList.toggle('active');
            } else {
                menu.classList.remove('active');
            }
        })
    })
})

// itemDropdown.forEach((item) => {
//     item.addEventListener('click', (e) => {
//         e.preventDefault();
//         listDropdown.forEach((menu) => {
//             menu.classList.remove('active');
//         })
//     });
// });
