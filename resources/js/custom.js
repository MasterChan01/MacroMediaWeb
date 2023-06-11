/**************************HERO TYPING JS**************************************/

// Define an array of dynamic strings
let dynamicStrings = ['Video Editing', 'Graphic Designing', 'Social Media Managing', 'Social Media Marketing','Search Engine Optimization (SEO)'];

// Initialize typed.js on the text element
let typed = new Typed('#typed-text', {
    strings: [...dynamicStrings.map(str => `We offer ${str}`)], // Concatenate "We offer" with each dynamic string
    typeSpeed: 100, // Speed of typing in milliseconds
    backSpeed: 50, // Speed of backspacing in milliseconds
    loop: true, // Whether or not to loop through the strings array    
    showCursor: false // Set to false to hide the cursor element
});

/******************************CHEVRON TOGGLE ICON**********************************/ 
// Get the dropdown toggle element
const dropdownToggle = document.getElementById('navbarDropdown');

// Add an event listener to toggle the icon when the dropdown is shown or hidden
dropdownToggle.addEventListener('shown.bs.dropdown', function () {
  this.querySelector('.chevron-icon').classList.replace('fa-chevron-down', 'fa-chevron-up');
});

dropdownToggle.addEventListener('hidden.bs.dropdown', function () {
  this.querySelector('.chevron-icon').classList.replace('fa-chevron-up', 'fa-chevron-down');
});

/******************************NAVIGATION BAR STICKY**********************************/ 

var navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
    console.log('Scroll event Fired! Working!');
    if (window.pageYOffset > navbar.offsetTop) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});