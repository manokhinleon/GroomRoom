let inputs = document.getElementsByClassName("validate");
for(let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("invalid", check);
}