const cursor = document.querySelector(".cursor");
const comments = document.querySelectorAll(".comment");

if (window.innerWidth <= 600) {
    cursor.classList.add("cursor-animation-phone");
}
else if (window.innerWidth > 600) {
    cursor.classList.add("cursor-animation");
}

// Function to update the animation state
function updateAnimation() {
    if (window.innerWidth <= 600) {
        cursor.classList.toggle("cursor-animation");
        cursor.classList.toggle("cursor-animation-phone");
    }
    else if (window.innerWidth > 600) {
        cursor.classList.toggle("cursor-animation");
        cursor.classList.toggle("cursor-animation-phone");
    }
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

// Window event listeners
window.addEventListener("resize", updateAnimation);
window.addEventListener("scroll", cursorHover);
window.addEventListener("mousemove", cursorHover);

setInterval(cursorHover, 50);
