import './bootstrap';
import IMask from 'imask';

const input = document.getElementById("phone");
const country_code = document.getElementById("country_code");

var mask;
var phone_code;
var maskOptions;

country_code.addEventListener('change', (e) => {
    phone_code = country_code.value.toString();

    maskOptions = {
        mask: phone_code + ' (000) 000-0000'
    };

    if (!mask) {
        mask = IMask(input, maskOptions);
    }
    else {
        mask.updateOptions(maskOptions);
        mask.updateValue();
    }
});