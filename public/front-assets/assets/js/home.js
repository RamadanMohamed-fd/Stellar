const bar = document.getElementsByClassName("bar");
const main_menu = document.querySelector(".main-menu");
console.log(bar);
bar[0].addEventListener("click", () => {
    main_menu.classList.toggle("main-show");
    bar[0].classList.toggle("open-menu");
});
