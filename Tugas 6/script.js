const body = document.body
const card = document.getElementById("card");
const btnDark = document.getElementById("btnDark");
const btnLight = document.getElementById("btnLight");

btnDark.addEventListener("click", () => {
    body.style.backgroundColor = "black";
    card.style.color = "white";
    card.style.backgroundColor = "orange"
    card.style.boxShadow = "1px 1px 15px 0px white";
    card.style.transition = "0.3s ease";
    body.style.transition = "0.3s ease";
});

btnLight.addEventListener("click", () => {
    body.style.backgroundColor = "azure";
    card.style.color = "black";
    card.style.backgroundColor = "white"
    card.style.boxShadow = "1px 1px 15px 0px black";
    card.style.transition = "0.3s ease";
    body.style.transition = "0.3s ease";
});