/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/*Import Smoothscroll JS*/

import smoothscroll from 'smoothscroll';
//var smoothscroll = require('smoothscroll');


import './typed/typed.min.js';
//import './typed/typed.min.js.map';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');


const servicesNavLink = document.getElementById('navbarDropdown');
const servicesDrawer = document.getElementById('services-drawer');
let timeoutId;

// Open the dropdown when the button is clicked or mouse enters the navbar
servicesNavLink.addEventListener('click', function(event) {
  event.stopPropagation(); // prevent the click event from bubbling up to the document
  servicesDrawer.classList.toggle('show');
});
servicesNavLink.addEventListener('mouseenter', function(event) {
  servicesDrawer.classList.add('show');
});
servicesDrawer.addEventListener('mouseenter', function(event) {
  clearTimeout(timeoutId);
});
servicesDrawer.addEventListener('mouseleave', function(event) {
  timeoutId = setTimeout(function() {
    servicesDrawer.classList.remove('show');
  }, 1000);
});

// Close the dropdown when clicking outside of it or when mouse leaves the dropdown
document.addEventListener('click', function(event) {
  // check if the click event was outside of the dropdown and button
  if (!servicesDrawer.contains(event.target) && event.target !== servicesNavLink) {
    servicesDrawer.classList.remove('show');
  }
});
servicesNavLink.addEventListener('mouseleave', function(event) {
  timeoutId = setTimeout(function() {
    servicesDrawer.classList.remove('show');
  }, 3000);
});

import { onMounted } from 'vue';

// Initialize typed.js on the text element
let typed = new Typed('#typed-text', {
  strings: ['Hello world'], // Array of strings to type out
  typeSpeed: 100, // Speed of typing in milliseconds
  backSpeed: 50, // Speed of backspacing in milliseconds
  loop: true // Whether or not to loop through the strings array
});
