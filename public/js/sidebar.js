//Sub Menu Show
const menuSidebar = document.querySelectorAll('.menu-sidebar');
menuSidebar.forEach((menuSidebar) => {
    menuSidebar.addEventListener('click', () => {
        const menuSidebarShow = menuSidebar.parentElement;
        menuSidebarShow.classList.toggle('show');
    });
});

// Sidebar Close
const sidebar = document.querySelector('.sidebar');
const sidebarBtn = document.querySelector('.three-bars');
const sidebarClose = document.querySelector('.btnSidebarBack');
sidebarBtn.addEventListener('click', () => {
    sidebar.classList.toggle('close');
});

sidebarClose.addEventListener('click', () => {
    sidebar.classList.remove('close');
});

// Profile Menu Start
const profile = document.querySelector('#profile');
const menuProfile = document.querySelector('#menu-profile');
profile.addEventListener('click', function () {
    menuProfile.classList.toggle('active');
});
// Profile Menu End





