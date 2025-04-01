const cursor = document.querySelector(".cursor");
const comments = document.querySelectorAll(".comment");

if (window.innerWidth <= 600) {
    cursor.classList.add("cursor-animation-phone");
}
else if (window.innerWidth > 600) {
    cursor.classList.add("cursor-animation");
}

// Function to check if the comment is being hovered
function cursorHover() {
    const circle = cursor.getBoundingClientRect();

    comments.forEach(comment => {
        const box = comment.getBoundingClientRect();

        if (circle.left < box.right && circle.right > box.left && circle.top < box.bottom && circle.bottom > box.top) {
            comment.style.transform = "scale(106%)";
        } 
        else {
            comment.style.transform = "scale(100%)";
        }
    });
}

// Reset animation state when window is resized
window.addEventListener("resize", () => {
    if (window.innerWidth <= 600) {
        cursor.classList.toggle("cursor-animation");
        cursor.classList.toggle("cursor-animation-phone");
    }
    else if (window.innerWidth > 600) {
        cursor.classList.toggle("cursor-animation");
        cursor.classList.toggle("cursor-animation-phone");
    }
});

setInterval(cursorHover, 50);
