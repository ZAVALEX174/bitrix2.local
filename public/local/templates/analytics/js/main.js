const openBtn = document.querySelector(".open");
const closeBtn = document.querySelector(".burger-menu__closes");
const burgerMenu = document.querySelector(".burger-menu");
const menuOpened = document.querySelector(".burger-menu-open");

openBtn.addEventListener("click", () => {
    burgerMenu.style.left = '0';;
    ;
});
closeBtn.addEventListener("click", () => {
    burgerMenu.style.left = '-100%';
})
