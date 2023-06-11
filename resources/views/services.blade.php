<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">    
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <script src="resources\js\app.js"></script>   
        <script src="{{ url('/js/app.js') }}"></script>
        <script type ="module" src="/js/smoothscroll/smooth-scroll.js'"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11/lib/typed.min.js"></script>

        <!--Import Smooth Scroll JS file from resources-->        
        @vite(['resources/js/smoothscroll/smooth-scroll.js'])

        
        <link rel="stylesheet" href="{{ asset('icons/mobirise-icons2/mobirise2.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/socicon/css/styles.css') }}">


        <title>Laravel</title>
        
        @if ($showDropdowns)
            @include('layouts.navbar-with-dropdowns')
        @else
            @include('layouts.navbar-without-dropdowns')
        @endif    
        
        @include('layouts.navtop')
    
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        @vite(['resources/css/mobirise.css'])
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        @vite(['resources/js/smoothscroll/smooth-scroll.js'])
        @vite(['resources/css/nicepage/Home.css','resources/css/nicepage/nicepage.css','resources/css/services.css'])

        

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('contactform/bootstrap.min.css')}}">

        <!-- Style -->
        <link rel="stylesheet" href="css/style.css">

        <title>Contact Form</title>
    </head>

    
    <body>
    <section class="u-align-center u-clearfix u-palette-3-light-2 u-section-2" id="carousel_723a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-text u-text-palette-1-base u-text-1">MacroMedia</h4>
        <h1 class="u-text u-text-default u-text-palette-1-base u-text-2">Our Features &amp; Services</h1>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <img src="https://res.cloudinary.com/db4mbjjvt/image/upload/v1686144624/Macro%20Media/video-editing.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-1" data-image-width="626" data-image-height="625">
                <h4 class="u-text u-text-default u-text-palette-1-base u-text-3">Video Editing</h4>
                <p class="u-text u-text-palette-1-dark-2 u-text-4"> Macro Media offers video editing lorem ipsum lorem ipsum lorem ipsum </p>
                <a href="#" class="u-active-palette-1-base u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-1-base u-radius-50 u-text-active-white u-text-hover-white u-btn-1" target="_blank">more</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <img src="https://res.cloudinary.com/db4mbjjvt/image/upload/v1686144624/Macro%20Media/video-editing.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="626" data-image-height="625">
                <h4 class="u-text u-text-default u-text-palette-1-base u-text-5">Social Media Management</h4>
                <p class="u-text u-text-palette-1-dark-2 u-text-6"> Macro Media offers Social Media Management lorem ipsum  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                <a href="#" class="u-active-palette-1-base u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-1-base u-radius-50 u-text-active-white u-text-hover-white u-btn-2" target="_blank">More</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <img src="https://res.cloudinary.com/db4mbjjvt/image/upload/v1686144624/Macro%20Media/video-editing.jpg" alt="" class="u-expanded-width u-image u-image-contain u-image-default u-image-3" data-image-width="626" data-image-height="626">
                <h4 class="u-text u-text-default u-text-palette-1-base u-text-7">Social Media Marketing</h4>
                <p class="u-text u-text-palette-1-dark-2 u-text-8">Macro Media offers social media marketingwzswwsww lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                <a href="#" class="u-active-palette-1-base u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-1-base u-radius-50 u-text-active-white u-text-hover-white u-btn-3" target="_blank">more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section data-bs-version="5.1" class="video4 cid-tGB3OmxXqZ" id="video4-5">
    
     <div class="container">
        <div class="title-wrapper mb-5">
            <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>Video Editing</strong></h4>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 video-block">
                <div class="video-wrapper"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/aFs8MfNaN-M?rel=0&amp;amp;mute=1&amp;showinfo=0&amp;autoplay=1&amp;loop=1" width="1280" height="360" frameborder="0" allowfullscreen></iframe></div>
                <p class="mbr-description pt-2 mbr-fonts-style display-4">
                    Video Description</p>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-5">
                        <strong>Video with description</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style display-7">
                        We offer Video Editing lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section data-bs-version="5.1" class="video5 cid-tGB3R8BPmj" id="video5-6">
        
        <div class="container">
            <div class="title-wrapper mb-5">
                <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                    <strong>Social Media Management</strong></h4>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 video-block">
                    <div class="video-wrapper">
                      <iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/GLtxe-V2mos?rel=0&amp;amp;mute=1&amp;showinfo=0&amp;autoplay=1&amp;loop=1" width="1280" height="360" frameborder="0" allowfullscreen></iframe></div>
                    <p class="mbr-description pt-2 mbr-fonts-style display-4">
                        Video Description</p>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h3 class="mbr-section-subtitle mbr-fonts-style mb-3 display-5">
                            <strong>View in Action</strong></h3>
                        <p class="mbr-text mbr-fonts-style display-7">
                            We offer Social Media Management  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="video4 cid-tGB43f3b9Q" id="video4-8">
        
        <div class="container">
            <div class="title-wrapper mb-5">
                <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2"><strong>Social Media Marketing</strong></h4>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 video-block">
                    <div class="video-wrapper"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/xDfeVvzuX3w?rel=0&amp;amp;mute=1&amp;showinfo=0&amp;autoplay=1&amp;loop=1" width="1280" height="360" frameborder="0" allowfullscreen></iframe></div>
                    <p class="mbr-description pt-2 mbr-fonts-style display-4">
                        Video Description</p>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-5">
                            <strong>Video with description</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style display-7">
                            We offer Social Media Marketing  lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>



    <footer>
        @include('layouts.footer')
    </footer>

</html>
