window.onscroll = function () {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 0) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
};

const todoList = document.getElementById('todo-list');
todoList.addEventListener('change', function (event) {
    const listItem = event.target.parentElement;
    if (event.target.checked) {
        listItem.style.textDecoration = 'line-through';
    } else {
        listItem.style.textDecoration = 'none';
    }
});
//dddd------------------------

let isBlack = false;
const body = document.getElementById("body");
const sunMoon = document.getElementById("sun-moon");
const modeText = document.getElementById("mode-text");

function toggleBackground() {
    if (isBlack) {
        body.style.backgroundColor = "white";
        sunMoon.src = "sun.png";
        modeText.innerText = "Dark Mode";
        modeText.style.backgroundColor = "black";
        modeText.style.color = "white";
        
        isBlack = false;
    } else {
        body.style.backgroundColor = "black";
        sunMoon.src = "moon.png";
        modeText.innerText = "Light Mode";
        modeText.style.backgroundColor = "white";
        modeText.style.color = "black";
        isBlack = true;
    }
}