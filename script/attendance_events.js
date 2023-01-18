let dropdown = document.querySelector(".dropdown");

dropdown.addEventListener('click', () => {
    menu = document.querySelector(".menu");
    menu.classList.toggle("menu-active");
})