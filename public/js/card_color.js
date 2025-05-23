const colorPalette = getComputedStyle(document.documentElement);
const colorPicker = document.getElementById("color");
const cardOuter = document.getElementById("card-out");

// Update the card color
colorPicker.value = colorPalette.getPropertyValue("--light-yellow").trim();
colorPicker.addEventListener("input", () => {
    cardOuter.style.backgroundColor = colorPicker.value;
});