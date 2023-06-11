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
        <link rel="stylesheet" href="{{ asset('icons/mobirise-icons/mobirise-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('icons/mobirise-icons-bold/mobirise-icons-bold.css') }}">
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

        @vite(['resources/css/faq/mobirisefaq.css','resources/css/faq/style.css','resources/css/faq/animate.css'])
        @vite(['resources/css/faq/bootstrap/bootstrap-grid.min.css','resources/css/faq/bootstrap/bootstrap-reboot.min.css','resources/css/faq/bootstrap/bootstrap.min.css'])
        
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
        <section data-bs-version="5.1" class="header3 cid-tGS3dVv7Cr mbr-fullscreen" id="header3-d">
    
            <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(255, 255, 255);"></div>

            <div class="align-center container">
                <div class="row justify-content-end">
                    <div class="col-12 col-lg-6">
                        
                        <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Got a question?</strong><br><strong>We got you</strong></h1>
                        <p class="mbr-text mbr-fonts-style display-7">Curious about our brand? Learn more below!&nbsp;</p>
                        
                    </div>
                </div>
            </div>

        </section>

        <section data-bs-version="5.1" class="content4 cid-tGRWzB3mUJ" id="content4-c">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="title col-md-12 col-lg-10">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                            <strong>Frequently Asked Questions</strong></h3>
                        
                        
                    </div>
                </div>
            </div>
        </section>

        <section data-bs-version="5.1" class="features1 cid-tGRVRylhLI" id="features2-b">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-wrapper">
                            <div class="card-box align-center">
                                <span class="mbr-iconfont mbrib-camera"></span>
                                <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                    <strong>Video Editing</strong></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-wrapper">
                            <div class="card-box align-center">
                                <span class="mbr-iconfont mbri-laptop"></span>
                                <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                    <strong>Social Media Management</strong></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-wrapper">
                            <div class="card-box align-center">
                                <span class="mbr-iconfont mobi-mbri-shopping-basket mobi-mbri"></span>
                                <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                    <strong>Social Media Marketing</strong></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-wrapper">
                            <div class="card-box align-center">
                                <span class="mbr-iconfont mbrib-change-style"></span>
                                <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                    <strong>Graphic Design</strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section data-bs-version="5.1" class="content17 cid-tGRNxZfJyL" id="content17-a">

            <div class="container">
            
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="section-head align-center mb-4">
                            <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2">
                                <strong>Toggle FAQ</strong>
                            </h3>
                            
                        </div>
                        
                        <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="collapsed panel-title text-black mx-3" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_4" aria-expanded="false" aria-controls="collapse1">
                                        <h6 class="panel-title-edit mbr-fonts-style mb-0 mx-2 display-7"><strong>Question 1</strong></h6>
                                        <span class="sign mbr-iconfont mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse1_4" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text mx-4 display-7">Answer 1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <a role="button" class="collapsed panel-title text-black mx-3" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_4" aria-expanded="false" aria-controls="collapse2">
                                        <h6 class="panel-title-edit mbr-fonts-style mb-0 mx-2 display-7"><strong>Question 2</strong></h6>
                                        <span class="sign mbr-iconfont mbri-arrow-down"></span>
                                    </a>

                                </div>
                                <div id="collapse2_4" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text mx-4 display-7">Answer 2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a role="button" class="collapsed panel-title text-black mx-3" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_4" aria-expanded="false" aria-controls="collapse3">
                                        <h6 class="panel-title-edit mbr-fonts-style mx-2 mb-0 display-7"><strong>Question 3</strong></h6>
                                        <span class="sign mbr-iconfont mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse3_4" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text mx-4 display-7">Answer 3</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a role="button" class="collapsed panel-title text-black mx-3" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse4_4" aria-expanded="false" aria-controls="collapse4">
                                        <h6 class="panel-title-edit mbr-fonts-style mb-0 mx-2 display-7"><strong>Question 4</strong></h6>
                                        <span class="sign mbr-iconfont mbri-arrow-down"></span>
                                    </a>
                                </div>
                                <div id="collapse4_4" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text mx-4 display-7">
                                        Answer 4</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a role="button" class="collapsed panel-title text-black mx-3" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse5_4" aria-expanded="false" aria-controls="collapse5">
                                    <h6 class="panel-title-edit mbr-fonts-style mb-0 mx-2 display-7"><strong>Question 5</strong></h6>
                                            <span class="mbr-iconfont mobi-mbri-arrow-down mobi-mbri"></span>
                                    </a>
                                </div>
                                <div id="collapse5_4" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text display-7 mx-4">
                                        Answer 5</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a role="button" class="collapsed panel-title text-black mx-3" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse6_4" aria-expanded="false" aria-controls="collapse6">
                                        <h6 class="panel-title-edit mbr-fonts-style mb-0 mx-2 display-7"><strong>Question 6</strong></h6>
                                        <span class="mbr-iconfont mobi-mbri-arrow-down mobi-mbri"></span>
                                    </a>
                                </div>
                                <div id="collapse6_4" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p class="mbr-fonts-style panel-text mx-4 display-7">Answer 6</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section data-bs-version="5.1" class="form2 cid-tGS5ydq84y" id="form2-e">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                    Oops...! some problem!
                                </div>
                            </div>
                            <div class="dragArea row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h1 class="mbr-section-title mb-4 align-center mbr-fonts-style display-2">
                                        <strong>Ready to improve your brand?!</strong></h1>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p class="mbr-text mbr-fonts-style mb-4 align-center display-7">Contact us today!&nbsp;</p>
                                </div>                                
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center">
                                        <a href="/contact-us" class="btn btn-primary-outline display-4" style="color: #000000; border-color: #000000;">Inquire Now</a>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </section>

        <input name="animation" type="hidden">
    
    </body>

    <footer>
        @include('layouts.footer')
    </footer>

</html>
