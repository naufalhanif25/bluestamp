const cursor = document.querySelector(".cursor");
const comments = document.querySelectorAll(".comment");

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

setInterval(cursorHover, 50);
