import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const em= document.getElementsByName('et')
let form = new FormData(em)
console.log(form.en());
