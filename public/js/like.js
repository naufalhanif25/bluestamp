function like(id) {
    const likeButtonPath = document.querySelector(`#like-button-${id} path`);

    likeButtonPath.classList.toggle("liked");
}
