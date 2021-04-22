import {updatePreview} from "./preview";
import {updateField} from "./form_create";

const selectInputs = document.querySelectorAll('.select_input');
selectInputs.forEach((el) => {
    const selectMenu : HTMLInputElement = <HTMLInputElement> document.querySelector(('#' + el.getAttribute('data-active')));
    selectMenu.style.display = 'none';


    const selectInputs_Texts = selectMenu.querySelectorAll('p');
    selectInputs_Texts.forEach((el_t) => {
        el_t.addEventListener('click', () => {
            const value : string = <string>el_t.getAttribute('data-value');
            (<HTMLInputElement>el).value = value;

            updateField(<HTMLInputElement>document.querySelector(`#create-fontUrl`), value);
            updatePreview();


            selectMenu.style.display = 'none';
        });
    });

    el.addEventListener('click', () => {
        if(selectMenu.style.display === 'none'){
            selectMenu.style.display = 'block';
        }
        else{
            selectMenu.style.display = 'none';
        }
    });

});



