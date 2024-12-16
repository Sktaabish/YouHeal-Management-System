function show(anything) {
    document.querySelector('.textbox').value = anything;
}

let dropdown = document.querySelector('.dropdown');
dropdown.onclick = function () {
    dropdown.classList.toggle('active');

}