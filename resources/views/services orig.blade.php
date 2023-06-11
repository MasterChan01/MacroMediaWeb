<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">    
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

        <script src="resources\js\app.js"></script>   
        <script src="{{ url('/js/app.js') }}"></script>
        
        <script type ="module" src="/js/smoothscroll/smooth-scroll.js'"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11/lib/typed.min.js"></script>

        <!--Import Smooth Scroll JS file from resources-->        
        @vite(['resources/js/smoothscroll/smooth-scroll.js'])
        @vite(['resources/css/nicepage/Home.css','resources/css/nicepage/nicepage.css','resources/css/services.css'])

        <link rel="stylesheet" href="{{ asset('icons/mobirise-icons2/mobirise2.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/socicon/css/styles.css') }}">
        
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Epilogue:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
        
        <title>Laravel</title>
        
        @if ($showDropdowns)
            @include('layouts.navbar-with-dropdowns')
        @else
            @include('layouts.navbar-without-dropdowns')
        @endif    
        
        @include('layouts.navtop')
    </head>

    <body>

    <section class="u-align-center u-clearfix u-palette-3-light-2 u-section-2" id="carousel_723a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-text u-text-palette-1-base u-text-1">Features</h4>
        <h1 class="u-text u-text-default u-text-palette-1-base u-text-2">Our Features &amp; Services.</h1>
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
                <div class="video-wrapper"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/HujDEPAWboE?rel=0&amp;amp;mute=1&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;playlist=HujDEPAWboE" width="1280" height="360" frameborder="0" allowfullscreen></iframe></div>
                <p class="mbr-description pt-2 mbr-fonts-style display-4">
                    Video Description</p>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-5">
                        <strong>Video with description</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Use Mobirise website building software to create multiple sites for commercial and non-profit projects. Click on the video preview in this block to add the link to your video. Make sure that your video is not private. You can add a description below the video. If you want to hide some of the text fields, open the Block parameters, and uncheck relevant options.</p>
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
                      <iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/VA8PzkQa8d8?rel=0&amp;amp;mute=1&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;playlist=VA8PzkQa8d8" width="1280" height="360" frameborder="0" allowfullscreen></iframe></div>
                    <p class="mbr-description pt-2 mbr-fonts-style display-4">
                        Video Description</p>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h3 class="mbr-section-subtitle mbr-fonts-style mb-3 display-5">
                            <strong>View in Action</strong></h3>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Use Mobirise website building software to create multiple sites for commercial and non-profit projects. Click on the video preview in this block to add the link to your video. Make sure that your video is not private. You can add a description below the video. If you want to hide some of the text fields, open the Block parameters, and uncheck relevant options.</p>
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
                    <div class="video-wrapper"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/HujDEPAWboE?rel=0&amp;amp;mute=1&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;playlist=HujDEPAWboE" width="1280" height="360" frameborder="0" allowfullscreen></iframe></div>
                    <p class="mbr-description pt-2 mbr-fonts-style display-4">
                        Video Description</p>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-5">
                            <strong>Video with description</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Use Mobirise website building software to create multiple sites for commercial and non-profit projects. Click on the video preview in this block to add the link to your video. Make sure that your video is not private. You can add a description below the video. If you want to hide some of the text fields, open the Block parameters, and uncheck relevant options.</p>
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
