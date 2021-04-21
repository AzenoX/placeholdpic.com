import {updatePreview} from "./preview";
import {updateField} from "./form_create";

const selectInputs = document.querySelectorAll('.select_input');
selectInputs.forEach((el) => {
    const selectMenu : HTMLInputElement = <HTMLInputElement> document.querySelector(('#' + el.getAttribute('data-active')));


    const selectInputs_Texts = selectMenu.querySelectorAll('p');
    selectInputs_Texts.forEach((el_t) => {
        el_t.addEventListener('click', () => {
            const value : string = <string>el_t.getAttribute('data-value');
            (<HTMLInputElement>el).value = value;

            updateField(<HTMLInputElement>document.querySelector(`#create-fontUrl`), value);
            updatePreview();
        });
    });

    el.addEventListener('focus', () => {
        selectMenu.style.display = 'block';
    });
    el.addEventListener('blur', () => {
        setTimeout(() => {
            selectMenu.style.display = 'none';
        }, 100);
    });

});



