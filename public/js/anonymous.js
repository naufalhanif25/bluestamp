const anonymousButton = document.getElementById("anonymous-button");
const senderName = document.getElementById("sender-name");
const userFullName = document.getElementById("user-full-name").innerText;

anonymousButton.addEventListener("click", () => {
    anonymousButton.classList.toggle("button-active");

    if (anonymousButton.classList.contains("button-active")) {
        senderName.innerText = "Anonymous";
    }
    else {
        senderName.innerText = `${userFullName ? userFullName : "Sender name"}`;
    }
})