const divid = document.getElementById('divid');

function createRandomNumber() {
    const number = document.createElement('span');
    number.innerText = Math.floor(Math.random() * 2);
    number.style.position = 'absolute';
    number.style.color = '#00ff00';
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
        number.style.opacity = 1;
        setTimeout(() => {
            divid.removeChild(number);
            createRandomNumber();
        }, 200);
    };

    fadeIn();
}

for (let i = 0; i < 1000; i++) {
    createRandomNumber();
}