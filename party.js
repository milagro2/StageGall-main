const divid = document.getElementById('divid');

function createRandomNumber() {
    const number = document.createElement('span');
    number.innerText = Math.floor(Math.random() * 3000);
    number.style.position = 'absolute';
    number.style.color = getRandomColor();
    number.style.opacity = 0;
    number.style.left = `${Math.random() * 99}%`;
    number.style.top = `${Math.random() * 555}%`;
    divid.appendChild(number);

    const fadeIn = () => {
        number.style.transition = 'opacity 1s linear';
        number.style.opacity = 1;
        setTimeout(fadeOut, 1);
    };

    const fadeOut = () => {
        number.style.transition = 'opacity 1s linear';
        number.style.opacity = 0;
        setTimeout(() => {
            divid.removeChild(number);
            createRandomNumber();
        }, 200);
    };

    fadeIn();
}

// Generate a random color
function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

for (let i = 0; i < 1000; i++) {
    createRandomNumber();
}
