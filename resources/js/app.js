require('./bootstrap');


import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css";


const form_create = require("./form_create");

const formInputs = document.querySelectorAll('.form-input');
formInputs.forEach((el) => {
    el.addEventListener('input', () => {
        const name = el.getAttribute('name');
        const target = document.querySelector(`#create-${name}`);

        form_create.updateField(target, el.value.replaceAll('#', ''));
    });
});


const createBtnCopy = document.querySelector('#create-copy-btn');
const createLink = document.querySelector('#create_link');
createBtnCopy.addEventListener('click', (el) => {
    navigator.clipboard.writeText(createLink.innerText);

    Toastify({
        text: "Link Copied",
        duration: 3000,
        gravity: "top",
        position: "right",
        backgroundColor: "#6D28D9",
        stopOnFocus: true,
    }).showToast();
});

const createBtnReset = document.querySelector('#create-reset-btn');
createBtnReset.addEventListener('click', () => {
    createLink.innerHTML = 'https://placeholdpic.com/<span id="create-width">600</span>x<span id="create-height">400</span>?bg=<span id="create-bgColor">e0e0e0</span>&text=<span id="create-textColor">333333</span>&font=<span' +
        ' id="create-fontUrl">https%3A%2F%2Fplaceholdpic.com%2FMontserrat.ttf</span>&fsize=<span id="create-fontSize">40</span>';
});

