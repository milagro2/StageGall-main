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