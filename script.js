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
const BackColor = document.querySelectorAll(".todo-text, .notes-text, .done-text, .sticky-block");
const TextColor = document.querySelectorAll(".todo-text, .notes-text, .done-text, .sticky-block a");
const HeadColor = document.querySelector(".todo-header");



function toggleBackground() {
    // white background 
    if (isBlack) {
        body.style.backgroundColor = "white";
        sunMoon.src = "sun.png";
        isBlack = false;
        BackColor.forEach((div) => {
            div.style.backgroundColor = "#f5f5f5";
        });
        TextColor.forEach((text) => {
            text.style.color = "black";
        });
        HeadColor.style.backgroundColor = "#d3d3d3";
        HeadColor.style.color = "black";

        // dark background 
    } else {
        body.style.backgroundColor = "#191919";
        sunMoon.src = "moon1.png";
        isBlack = true;
        BackColor.forEach((div) => {
            div.style.backgroundColor = "black";
        })
        TextColor.forEach((text) => {
            text.style.color = "#ffffffba";
        });
        HeadColor.style.backgroundColor = "black";
        HeadColor.style.color = "#ffffffba";
    }
}
