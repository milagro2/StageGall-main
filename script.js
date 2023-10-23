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

// dark/light mode
let isBlack = false;
const body = document.body;
const sunMoon = document.getElementById("sun-moon");
const divsColor = document.querySelectorAll(".todo-text, .notes-text, .done-text, .todo-image, .sticky-block");
const textToChangeColor = document.querySelectorAll(".todo-text, .notes-text, .done-text");
const HeadColor = document.querySelector(".todo-header");



function toggleBackground() {
    if (isBlack) {
        body.style.backgroundColor = "white";
        sunMoon.src = "sun.png";
        isBlack = false;
        divsColor.forEach((div) => {
            div.style.backgroundColor = "#f5f5f5";
        });
        textToChangeColor.forEach((text) => {
            text.style.color = "black";
        });
        HeadColor.style.backgroundColor = "#d3d3d3";
        HeadColor.style.color = "black";

    } else {
        body.style.backgroundColor = "black";
        sunMoon.src = "moon1.png";
        isBlack = true;
        divsColor.forEach((div) => {
            div.style.backgroundColor = "#383838";
        })
        textToChangeColor.forEach((text) => {
            text.style.color = "white";
        });
        HeadColor.style.backgroundColor = "black";
        HeadColor.style.color = "white";
    }
}
