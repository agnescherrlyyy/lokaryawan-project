const selectBox = document.querySelector('.select-box');
const selectOption = document.querySelector('.show-menu');
const soValue = document.querySelector('#so-value');
const optionSearch = document.querySelector('#option-search');
const options = document.querySelector('.menu-list');
const optionsList = document.querySelectorAll('#item-list');

selectOption.addEventListener('click', () => {
    selectBox.classList.toggle('active');
});

optionsList.forEach((item) => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        text = item.textContent;
        soValue.value = text;
        selectBox.classList.remove('active');
    });
});

optionSearch.addEventListener('keyup', () => {
    var filter, li, i, textValue;
    filter = optionSearch.value.toUpperCase();
    li = optionsList;
    for (i = 0; i < li.length; i++) {
        liCount = li[i];
        textValue = liCount.textContent || liCount.innerText;
        if (textValue.toUpperCase().indexOf(filter) > -1) {
            liCount.style.display = "";
        } else {
            liCount.style.display = "none";
        }
    }
})