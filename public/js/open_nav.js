const menuIcon = document.getElementById("menu");
const navbar = document.getElementById("navbar");

// Remove "open" when window is resized
window.addEventListener("resize", () => {
    if (window.innerWidth <= 600) {
        navbar.classList.remove("open");
    }
});

// Handle menu button clicks
menuIcon.addEventListener("click", () => {
    navbar.classList.toggle("open");
});

// Handle clicks outside the navigation bar
document.addEventListener("click", (event) => {
    if (!navbar.contains(event.target) && !menuIcon.contains(event.target)) {
        navbar.classList.remove("open");
    }
});