const anonymousButton = document.getElementById("anonymous-button");
const senderName = document.getElementById("sender");
const userFullName = document.getElementById("user-full-name").innerText;

anonymousButton.addEventListener("click", () => {
    anonymousButton.classList.toggle("button-active");

    if (anonymousButton.classList.contains("button-active")) {
        senderName.value = "Anonymous";
    }
    else {
        senderName.value = `${userFullName ? userFullName : "Sender name"}`;
    }
})