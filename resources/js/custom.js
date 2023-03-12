// Define an array of dynamic strings
let dynamicStrings = ['Video Editing', 'Graphic Designing', 'Social Media Managing', 'Social Media Marketing','Search Engine Optimization (SEO)'];

// Initialize typed.js on the text element
let typed = new Typed('#typed-text', {
    strings: [...dynamicStrings.map(str => `We offer ${str}`)], // Concatenate "We offer" with each dynamic string
    typeSpeed: 150, // Speed of typing in milliseconds
    backSpeed: 50, // Speed of backspacing in milliseconds
    loop: true // Whether or not to loop through the strings array
});