const likeButton = document.getElementById("like-button");
const likeButtonPath = document.querySelector("#like-button path");

likeButton.addEventListener("click", () => {
    likeButtonPath.classList.toggle("liked");
})