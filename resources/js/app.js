require('./bootstrap');


import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css";


const preview = require("./preview");
const form_create = require("./form_create");
require("./select_input");



/*=======================================
*       Limit number of requests
=======================================*/
let canRequest = true;
function updateCanRequest(){
    canRequest = false;

    setTimeout(() => {
        canRequest = true;
        preview.updatePreview();
    }, 100);
}



/*=======================================
*       Input events handlers
=======================================*/
const formInputs = document.querySelectorAll('.form-input');
formInputs.forEach((el) => {
    el.addEventListener('input', () => {

        const name = el.getAttribute('name');
        const target = document.querySelector(`#create-${name}`);

        form_create.updateField(target, el.value.replaceAll('#', ''));


        if(el.classList.contains('form-input--color')){
            el.nextElementSibling.textContent = el.value;
        }

        if(canRequest){
            updateCanRequest();
            preview.updatePreview();
        }
    });

    el.addEventListener('focus', () => {
        if(!el.classList.contains('form-input--color')){
            el.select();
        }
    });
});



/*=======================================
*   Reset input with their default values
=======================================*/
function resetFields(formInputs){
    formInputs.forEach((el) => {
        const defaultValue = el.getAttribute('data-default');
        el.value = defaultValue;

        if(el.classList.contains('form-input--color')){
            el.nextElementSibling.textContent = el.value;
        }
    });
}
resetFields(formInputs);



/*=======================================
*       Image error handler
=======================================*/
const preview_img = document.querySelector('#preview_img');
preview_img.addEventListener('error', () => {
    preview_img.src = 'https://placeholdpic.alexishayat.me/600x400?content=???';
});



/*=======================================
*       Buttons handlers
=======================================*/
const createBtnCopy = document.querySelector('#create-copy-btn');
const createLink = document.querySelector('#create_link');
const createBtnSelect = document.querySelector('#create-select-btn');
const createBtnReset = document.querySelector('#create-reset-btn');

createBtnCopy.addEventListener('click', () => {
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
createBtnSelect.addEventListener('click', () => {
    const el = document.querySelector('#create_link');
    const sel = window.getSelection();

    if(sel.toString() === ''){
        window.setTimeout(function(){
            const range = document.createRange();
            range.selectNodeContents(el);
            sel.removeAllRanges();
            sel.addRange(range);
        },1);
    }
});
createBtnReset.addEventListener('click', () => {
    createLink.innerHTML = 'https://placeholdpic.alexishayat.me/<span id="create-width">600</span>x<span id="create-height">400</span>?<span style="white-space: break-spaces;">bg=<span id="create-bgColor">e0e0e0</span>&text=<span id="create-textColor">333333</span>&font=<span' +
        ' id="create-fontUrl">https://placeholdpic.alexishayat.me/fonts/Montserrat.ttf</span>&fsize=<span id="create-fontSize">40</span>&content=<span id="create-content">%dimensions%</span></span>';

    formInputs.forEach((el) => {
        el.value = '';
    });

    resetFields(formInputs);

    preview.updatePreview();
});




const sliderHeaders = document.querySelectorAll('.slider_header');
sliderHeaders.forEach((el) => {
    el.addEventListener('click', () => {
        slideToggle(el.nextElementSibling);
    });
});




/*=====================================

    Slides Functions

=====================================*/
let slideUp = (target, display = 'block', duration=500) => {
    target.style.transitionProperty = 'height, margin, padding';
    target.style.transitionDuration = duration + 'ms';
    target.style.boxSizing = 'border-box';
    target.style.height = target.offsetHeight + 'px';
    target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    window.setTimeout( () => {
        target.style.display = 'none';
        target.style.removeProperty('height');
        target.style.removeProperty('padding-top');
        target.style.removeProperty('padding-bottom');
        target.style.removeProperty('margin-top');
        target.style.removeProperty('margin-bottom');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
        //alert("!");
    }, duration);
}
let slideDown = (target, display = 'block', duration=500) => {
    target.style.removeProperty('display');

    target.style.display = display;
    let height = target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.boxSizing = 'border-box';
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + 'ms';
    target.style.height = height + 'px';
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
    window.setTimeout( () => {
        target.style.removeProperty('height');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
    }, duration);
}
let slideToggle = (target, display = 'block', duration = 500) => {
    if (window.getComputedStyle(target).display === 'none') {
        return slideDown(target, display, duration);
    } else {
        return slideUp(target, display, duration);
    }
}
