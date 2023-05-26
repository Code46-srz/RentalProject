import './bootstrap';
// add a import to my custom scss file
import '/resources/scss/app.scss';
import '/node_modules/bootstrap/scss/bootstrap.scss';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
