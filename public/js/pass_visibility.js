let passwordField = document.getElementById("password");
let hideIcon = document.getElementById("hide");
let showIcon = document.getElementById("show");

hideIcon.style.display = "none";
showIcon.style.display = "block";

// Function to handle showing and hiding password
function togglePassword() {
    if (passwordField.type === "password") {
        passwordField.type = "text";
        
        hideIcon.style.display = "block";
        showIcon.style.display = "none";
    } 
    else {
        passwordField.type = "password";
        
        hideIcon.style.display = "none";
        showIcon.style.display = "block";
    }
}