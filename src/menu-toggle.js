/**
 * Menu toggle
 * @description Toggle the mobile menu
 */
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const navUl = document.querySelector("nav ul");

    menuToggle.addEventListener("click", function () {
        navUl.classList.toggle("show-menu");
        menuToggle.classList.toggle("menu-active");
    });
});

