const menuIcon = document.getElementById("menu");
const menuIconHover = document.querySelector(".menu:hover");
const navbar = document.getElementById("navbar");

// Remove "open" when window is resized
window.addEventListener("resize", () => {
    if (window.innerWidth <= 600) {
        navbar.classList.remove("open");
        menuIcon.style.fill = "var(--fade-black)";
        menuIconHover.style.fill = "var(--fade-black-hover)";
    }
});

// Handle menu button clicks
menuIcon.addEventListener("click", () => {
    navbar.classList.toggle("open");
    menuIcon.style.fill = "var(--grey)";
    menuIconHover.style.fill = "var(--grey-hover)";
});

// Handle clicks outside the navigation bar
document.addEventListener("click", (event) => {
    if (!navbar.contains(event.target) && !menuIcon.contains(event.target)) {
        navbar.classList.remove("open");
        menuIcon.style.fill = "var(--fade-black)";
        menuIconHover.style.fill = "var(--fade-black-hover)";
    }
});