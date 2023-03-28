<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">    
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>

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
    
         <!-- Hero Section --> 
         <br>
         <section id="hero" class="d-flex flex-row justify-content-between align-items-center p-5">           

            <div class="hero-container" data-aos="fade-in">
                <h1>Macro Media</h1>
                <text>Services</text>
                <p id="typed-text">We offer<span class="typed"></span></p>                
            </div>

            <div class="img-container d-flex justify-content-end align-items-center">
                <img src="{{asset('img/seo-hero-photo.jpg')}}" alt="" style="width: 650px" class="img-fluid">
            </div>

        </section>        
        <!-- End Hero -->


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
    </head>

    <body class="">
            <section id="hero-reversed" class="body-container justify-content-between align-items-center cid-sFGzrhlvIh"> 
                <div id="" class="" data-aos="fade-in">
                    <div class="mbr-overlay" style="">
                        <div class="container mt-3">
                            <div class="media-container">
                                <div class="col-md-12 col-lg-10 m-auto align-center">
                                    <h1 class="mbr-section-title mbr-white mbr-fonts-style mb-3 display-1" style="color:white"><strong>Marketing <br>Research Agency</strong></h1>
                                    <p class="mbr-text mbr-white mbr-fonts-style display-7" style="color:white">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non.</p>
                                    <div class="mbr-section-btn align-center text-center pt-3"><a class="btn btn-primary display-4" href="https://mobiri.se/">Get Started</a> <a class="btn btn-secondary display-4" href="#features19-a">Read More</a></div>

                                    <div class="row pt-5 justify-content-center">
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="card-wrapper">
                                                <div class="card-box align-center text-center">
                                                    <span class="mbr-iconfont mobi-mbri-cash mobi-mbri px-3" style="color: rgb(55, 150, 131); fill: rgb(55, 150, 131); font-size:60px;"></span>
                                                    <h4 class="card-title align-center mbr-black mbr-fonts-style display-7" style="color:white"><strong>Market Analysis</strong></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="card-wrapper">
                                                <div class="card-box align-center text-center">
                                                    <span class="mbr-iconfont mobi-mbri-cart-add mobi-mbri" style="color: rgb(55, 150, 131); fill: rgb(55, 150, 131); font-size:60px;"></span>
                                                    <h4 class="card-title align-center mbr-black mbr-fonts-style display-7" style="color:white"><strong>Demand Research</strong></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="card-wrapper">
                                                <div class="card-box align-center text-center">
                                                    <span class="mbr-iconfont mobi-mbri-users mobi-mbri " style="color: rgb(55, 150, 131); fill: rgb(55, 150, 131); font-size:60px;"></span>
                                                    <h4 class="card-title align-center mbr-black mbr-fonts-style display-7" style="color:white"><strong>Competitor Analysis</strong></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <div class="card-wrapper">
                                                <div class="card-box align-center text-center">
                                                    <span class="mbr-iconfont mobi-mbri-layers mobi-mbri text-center" style="color: rgb(55, 150, 131); fill: rgb(55, 150, 131); font-size:60px;"></span>
                                                    <h4 class="card-title align-center mbr-black mbr-fonts-style display-7" style="color:white"><strong>Research Results</strong></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section data-bs-version="5.1" class="features19 cid-sFGBbGYuTc" id="features20-4">  
    
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="card-wrapper pb-4">
                                <div class="card-box align-center">
                                    <h4 class="card-title mbr-fonts-style mb-4 display-2 text-center">
                                        <strong>Research Steps</strong>
                                    </h4>
                                    <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non.</p>
                                    test add commit
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-9">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="step-number mbr-fonts-style display-5">1</span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7"><strong>Market Analysis</strong></h4>
                                    <h5 class="icon-text mbr-black mbr-fonts-style display-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non.</h5>
                                </div>
                            </div>
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="step-number mbr-fonts-style display-5">2</span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7"><strong>Demand Research</strong></h4>
                                    <h5 class="icon-text mbr-black mbr-fonts-style display-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non.</h5>
                                </div>
                            </div>
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="step-number mbr-fonts-style display-5">3</span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7"><strong>Competitor Analysis</strong></h4>
                                    <h5 class="icon-text mbr-black mbr-fonts-style display-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non.</h5>
                                </div>
                            </div>
                            <div class="item mbr-flex last">
                                <div class="icon-box">
                                    <span class="step-number mbr-fonts-style display-5">4</span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title card-title mbr-black mbr-fonts-style display-7"><strong>Research Results</strong></h4>
                                    <h5 class="icon-text mbr-black mbr-fonts-style display-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non.</h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <section data-bs-version="5.1" class="features18 cid-sFGGxz3b6J" id="features19-a">
                
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card col-12 col-lg">
                            <div class="card-wrapper">
                                <h6 class="card-title mbr-fonts-style mb-4 display-2"><strong>About Agency</strong></h6>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. <br><br>Sed auctor justo elit, ac vestibulum metus semper non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ut viverra ex. Nunc non elementum urna, auctor faucibus est.</p>
                                <div class="mbr-section-btn pt-3"><a class="btn btn-secondary display-4" href="https://mobiri.se">Read More</a></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <div class="image-wrapper m-2">
                                <img src="{{ asset('img/About-company-img.png') }}" alt="Mobirise Website Builder">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-bs-version="5.1" class="features3 cid-sFGGDvi61Z" id="features3-b">
                
                
                <div class="container">
                    <div class="mbr-section-head">
                        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong>How it Works</strong></h4>
                        
                    </div>
                    <div class="row mt-4">
                        <div class="item features-image сol-12 col-md-6 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('img/index/strategic-market-analysis-img.jpg') }}" alt="Mobirise Website Builder">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-5"><strong>Market Analysis</strong></h5>
                                    
                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus.</p>
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn btn-primary item-btn display-4" target="_blank">Learn More
                                        &gt;</a></div>
                            </div>
                        </div>
                        <div class="item features-image сol-12 col-md-6 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('img/index/strategic-market-analysis-img.jpg') }}" alt="Mobirise Website Builder">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-5"><strong>Demand Research</strong></h5>
                                    
                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus.</p>
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn btn-primary item-btn display-4" target="_blank">Learn More
                                        &gt;</a></div>
                            </div>
                        </div>
                        <div class="item features-image сol-12 col-md-6 col-lg-4">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('img/index/strategic-market-analysis-img.jpg') }}" alt="Mobirise Website Builder">
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-5"><strong>Competitor Analysis</strong></h5>
                                    
                                    <p class="mbr-text mbr-fonts-style mt-3 display-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus.<br></p>
                                </div>
                                <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn btn-primary item-btn display-4" target="_blank">Learn More
                                        &gt;</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-bs-version="5.1" class="features9 cid-sFGBGm1Q33" id="features10-5">
                <!---->
                
                
                <div class="container">
                    <div class="mbr-section-head">
                        <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                            <strong>Our Pricing</strong></h3>
                        
                    </div>
                    <div class="row mt-4">
                        <div class="card col-12">
                            <div class="card-wrapper">
                                <div class="top-line row">
                                    <div class="col">
                                        <h4 class="card-title mbr-fonts-style display-5"><strong>Market Analysis</strong></h4>
                                    </div>
                                    <div class="col-auto">
                                        <p class="price mbr-fonts-style display-5">
                                            $139</p>
                                    </div>
                                </div>
                                <div class="bottom-line">
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ut viverra ex. Nunc non elementum urna, auctor faucibus est.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12">
                            <div class="card-wrapper">
                                <div class="top-line row">
                                    <div class="col">
                                        <h4 class="card-title mbr-fonts-style display-5"><strong>Demand Research</strong></h4>
                                    </div>
                                    <div class="col-auto">
                                        <p class="price mbr-fonts-style display-5">
                                            $229</p>
                                    </div>
                                </div>
                                <div class="bottom-line">
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ut viverra ex. Nunc non elementum urna, auctor faucibus est.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12">
                            <div class="card-wrapper">
                                <div class="top-line row">
                                    <div class="col">
                                        <h4 class="card-title mbr-fonts-style display-5"><strong>Competitor Analysis</strong></h4>
                                    </div>
                                    <div class="col-auto">
                                        <p class="price mbr-fonts-style display-5">
                                            $189</p>
                                    </div>
                                </div>
                                <div class="bottom-line">
                                    <p class="mbr-text mbr-fonts-style display-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ut viverra ex. Nunc non elementum urna, auctor faucibus est.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </section>

            <section data-bs-version="5.1" class="team1 cid-sFGGp6mJeM" id="team1-9">
                

                
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                                <strong>Our Team</strong>
                            </h3>
                            
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="card-wrap">
                                <div class="image-wrap">
                                    <img src="{{ asset('img/index/person-icon.jpg') }}" alt="Mobirise Website Builder">
                                </div>
                                <div class="content-wrap">
                                    <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                        <strong>Jay Podutan</strong>
                                    </h5>
                                    <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                        <strong>Chairman / CEO</strong>
                                    </h6>
                                    <p class="card-text mbr-fonts-style align-center display-7">
                                        Pogi single matalino rami chix :P</p>
                                    <div class="social-row display-7">
                                        <div class="soc-item">
                                            <a href="https://www.facebook.com/JayMarco08" target="_blank">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                            </a>
                                        </div>
                                        <div class="soc-item">
                                            <a href="https://twitter.com/mobirise" target="_blank">
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="soc-item">
                                            <a href="https://www.instagram.com/kuya_jhake" target="_blank">                                                
                                            <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </a>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card-wrap">
                                <div class="image-wrap">
                                    <img src="{{ asset('img/index/person-icon.jpg') }}" alt="Mobirise Website Builder">
                                </div>
                                <div class="content-wrap">
                                    <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                        <strong>Christian Garcia</strong>
                                    </h5>
                                    <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                        <strong>President / CTO</strong>
                                    </h6>
                                    <p class="card-text mbr-fonts-style align-center display-7">
                                        Pogi malakas pogi pogi pogi yan tama yan
                                    </p>
                                    <div class="social-row display-7">
                                        <div class="soc-item">
                                            <a href="https://www.facebook.com/ChristianGarcia4201" target="_blank">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                            </a>
                                        </div>
                                        <div class="soc-item">
                                            <a href="https://twitter.com/mobirise" target="_blank">
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="soc-item">
                                            <a href="https://www.instagram.com/iam_christian01" target="_blank">
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </a>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="card-wrap">
                                <div class="image-wrap">
                                    <img src="{{ asset('img/index/person-icon.jpg') }}" alt="Mobirise Website Builder">
                                </div>
                                <div class="content-wrap">
                                    <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                        <strong>Jessica Swift</strong>
                                    </h5>
                                    <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                        <strong>Analyst</strong>
                                    </h6>
                                    <p class="card-text mbr-fonts-style align-center display-7">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus.
                                    </p>
                                    <div class="social-row display-7">
                                        <div class="soc-item">
                                            <a href="https://www.facebook.com/Mobirise/" target="_blank">
                                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                                            </a>
                                        </div>
                                        <div class="soc-item">
                                            <a href="https://twitter.com/mobirise" target="_blank">
                                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="soc-item">
                                            <a href="https://instagram.com/mobirise" target="_blank">
                                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                                            </a>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </section>

            <section data-bs-version="5.1" class="clients1 cid-sFGFZiVtyo" id="clients1-8">
                
                <div class="images-container container">
                    <div class="mbr-section-head">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong>Our Clients</strong>
                        </h3>
                        
                        
                    </div>
                    <div class="row justify-content-center mt-4 img-front">
                        <div class="col-md-3 card">
                            <img src="{{asset('img/index/clients/pcs-logo.png')}}" alt="Mobirise Website Builder">
                        </div>
                        <div class="col-md-3 card">
                            <img src="assets/images/2.png">
                        </div>
                        <div class="col-md-3 card">
                            <img src="assets/images/3.png">
                        </div>
                        <div class="col-md-3 card">
                            <img src="assets/images/4.png" alt="Mobirise Website Builder">
                        </div>
                        <div class="col-md-3 card">
                            <img src="assets/images/2.png" alt="Mobirise Website Builder">
                        </div>
                        <div class="col-md-3 card">
                            <img src="assets/images/3.png" alt="Mobirise Website Builder">
                        </div>
                        
                        
                    </div>
                </div>
            </section>

            <section data-bs-version="5.1" class="contacts1 cid-sFGJrLtt3K" id="contacts1-c">

                <div class="container">
                    <div class="mbr-section-head">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong>Contacts</strong>
                        </h3>
                        <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5 text-center">Contact us now to book your service! Do you have any questions? <br> Contact us and lets get started. </h4>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="card col-12 col-lg-6">
                            <div class="card-wrapper">
                                <div class="card-box align-center">
                                    <div class="image-wrapper">
                                        <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                                    </div>
                                    <h4 class="card-title mbr-fonts-style mb-2 display-2">
                                        <strong>Email</strong>
                                    </h4>
                                    <h5 class="link mbr-fonts-style display-7"><a href="mailto:JayMarco08@gmail.com" class="text-primary">JayMarco08@gmail.com</a>
                                    </h5>
                                    <h5 class="link mbr-fonts-style display-7"><a href="mailto:christiangarcia.cpe@gmail.com" class="text-primary">Christiangarcia.cpe@gmail.com</a>
                                    </h5>
                                    <p class="mbr-text mbr-fonts-style mb-2 display-4">
                                        We will reply as soon as possible</p>
                                    <h5 class="link mbr-fonts-style display-7"><a href="mailto:info@site.com" class="text-primary">Send us an
                                            email</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 col-lg-6">
                            <div class="card-wrapper">
                                <div class="card-box align-center">
                                    <div class="image-wrapper">
                                        <span class="mbr-iconfont mobi-mbri-mobile-2 mobi-mbri"></span>
                                    </div>
                                    <h4 class="card-title mbr-fonts-style align-center mb-2 display-2">
                                        <strong>Phone : </strong> 
                                    </h4>
                                    <h4 class="link mbr-black mbr-fonts-style display-7">
                                        <a href="tel:+639260286927" class="text-primary">(+63)9260286927</a>
                                    </h4>
                                    <h4 class="link mbr-black mbr-fonts-style display-7">
                                        <a href="tel:+639260286927" class="text-primary">(+63)1234567890</a>
                                    </h4>
                                    <p class="mbr-text mbr-fonts-style mb-2 display-4">
                                        Mon - Fri 09:00 - 18:00</p>
                                    <h5 class="link mbr-black mbr-fonts-style display-7">
                                        <a href="tel:+12345678910" class="text-primary">Call (800) 123 45 67</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-bs-version="5.1" class="testimonials2 cid-sFGJsyrALx" id="testimonials2-d">
                
                
                <div class="container">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>Testimonials</strong>
                    </h3>
                    <div class="row justify-content-center">
                        <div class="card col-12 col-md-6">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ut viverra ex. Nunc non elementum urna, auctor faucibus est.</p>
                            <div class="d-flex mb-md-0 mb-4">
                                <div class="image-wrapper">
                                    <img src="assets/images/team1.jpg" alt="Mobirise Website Builder">
                                </div>
                                <div class="text-wrapper">
                                    <p class="name mbr-fonts-style mb-1 display-4">
                                        <strong>Martin Smith</strong>
                                    </p>
                                    <p class="position mbr-fonts-style display-4">
                                        <strong>Client</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 col-md-6">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus, sodales sollicitudin erat pulvinar. Quisque in mauris blandit, cursus ipsum non, hendrerit enim. Nullam fringilla ex sed maximus efficitur. Sed auctor justo elit, ac vestibulum metus semper non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ut viverra ex. Nunc non elementum urna, auctor faucibus est.</p>
                            <div class="d-flex mb-md-0 mb-4">
                                <div class="image-wrapper">
                                    <img src="assets/images/team2.jpg" alt="Mobirise Website Builder">
                                </div>
                                <div class="text-wrapper">
                                    <p class="name mbr-fonts-style mb-1 display-4">
                                        <strong>Jessica Brown</strong>
                                    </p>
                                    <p class="position mbr-fonts-style display-4">
                                        <strong>Client</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-bs-version="5.1" class="map3 cid-sFGDeCn4OW" id="map3-6">                
                
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mbr-section-title mb-4 align-center mbr-fonts-style display-2"><strong>Office Locations</strong></h3>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h4 class="mbr-section-subtitle mb-3 align-center mbr-fonts-style display-5">Cavite</h4>
                            <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2542.230102737579!2d120.85640002013848!3d14.401499601656083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33962cf3366ca587%3A0x836907f8eea56d2e!2sCV24%2BGW2%2C%20Trece%20Martires%20Rd%2C%20Tanza%2C%204108%20Cavite!5e0!3m2!1sen!2sph!4v1679503456291!5m2!1sen!2sph" allowfullscreen=""></iframe></div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <h4 class="mbr-section-subtitle mb-3 mt-5 mt-lg-0 align-center mbr-fonts-style display-5">Cavite</h4>
                            <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2542.230102737579!2d120.85640002013848!3d14.401499601656083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33962cf34acc76d3%3A0xf0518a8d67f72212!2sDiocesan%20Shrine%20of%20Saint%20Augustine%20-%20Poblacion%20I%2C%20Tanza%2C%20Cavite%20(Diocese%20of%20Imus)!5e0!3m2!1sen!2sph!4v1679503606112!5m2!1sen!2sph" allowfullscreen=""></iframe></div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-bs-version="5.1" class="footer1 cid-sFGDg6hy8z" once="footers" id="footer1-7">

                <div class="container">
                    <div class="row mbr-white">
                        <div class="col-12 col-md-6 col-lg-3">
                            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                                <strong>Links</strong></h5>
                            <ul class="list mbr-fonts-style display-4">
                                <li class="mbr-text item-wrap">Home</li><li class="mbr-text item-wrap">Features</li><li class="mbr-text item-wrap">Research</li><li class="mbr-text item-wrap">Team</li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                                <strong>Info</strong></h5>
                            <ul class="list mbr-fonts-style display-4">

                                <li class="mbr-text item-wrap">About</li><li class="mbr-text item-wrap">Pricing</li><li class="mbr-text item-wrap">Contacts</li><li class="mbr-text item-wrap">Office</li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                                <strong>Features</strong></h5>
                            <ul class="list mbr-fonts-style display-4">
                                <li class="mbr-text item-wrap">Market Analysis
                                </li><li class="mbr-text item-wrap">Demand Research
                                </li><li class="mbr-text item-wrap">Competitor Analysis
                                </li><li class="mbr-text item-wrap">Research Results
                                </li><li class="mbr-text item-wrap"><br></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                                <strong>About</strong>
                            </h5>
                            <p class="mbr-text mbr-fonts-style mb-4 display-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus,</p>
                            <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                                <strong>Social</strong>
                            </h5>
                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="https://twitter.com/mobirise" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://twitter.com/mobirise" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="https://twitter.com/mobirise" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                                
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>

            <section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap; align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/2972995" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a>
            </section>
            <!--
            <section  class="d-flex flex-row justify-content-between align-items-center ">           

                <div id="content" class="hero-container" data-aos="fade-in">
                    
                </div>

            </section>
            -->
            
    </body>

</html>
