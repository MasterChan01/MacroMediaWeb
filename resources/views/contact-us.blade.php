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
    
         <!-- Hero Section --> 
         <section id="hero" class=" hero-contact d-flex justify-content-center align-items-center p-5">           

            <div class="hero-container text-center" data-aos="fade-in">
                <h1 style="font-family: 'Lato', sans-serif;">Contact Us</h1>         
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
           
     <div id="lead-form" class="x-section section__content pbl" style="margin: 0px;padding: 0px; background-color: transparent;"><div class="x-container max width" style="margin: 0px auto;padding: 0px;"><div class="x-column x-sm x-1-1" style="padding: 0px;"><h2 class="h-custom-headline cs-ta-center h3"><span>Let’s Start a Conversation</span></h2></div></div><div class="x-container max width" style="margin: 0px auto 80px;padding: 0px;"><div class="x-column x-sm x-1-2" style="padding: 0px;"><div class="x-text"><h4 class="h-custom-headline h4" style="margin-top: -10px;"><strong>Ask how we can help you:</strong></h4>
        <p><span style="color: #000000;"><span style="font-weight: 400;">See our platform in action<br>
        </span></span><span style="font-weight: 300;"></span>Request a personalized demo of TUNE’s partner marketing platform<span style="font-weight: 300;">.</span></p>
        <p><span style="font-weight: 400;"><span style="color: #000000;">Master performance marketing<br>
        </span><span style="font-weight: 300;">From&nbsp;</span><a href="https://academy.tune.com/"><span style="font-weight: 400;">TUNE Academy courses</span></a><span style="font-weight: 300;"> to industry&nbsp;</span><a href="https://www.tune.com/resources/resource-library/#industry-research"><span style="font-weight: 400;">research</span></a><span style="font-weight: 300;"> and </span><a href="https://www.tune.com/blog/"><span style="font-weight: 400;">insights</span></a><span style="font-weight: 300;">, learn how to grow your business through performance-based partnerships.</span></span></p>
        <p><span style="font-weight: 400;"><span style="color: #000000;">Explore life at TUNE<br>
        </span></span><span style="font-weight: 300;">Search <a href="https://www.tune.com/careers/"><span style="font-weight: 400;">open positions</span></a>, read about company culture and values, and explore our charitable initiatives.<br>
        </span></p>
        <h4></h4>
        <h4 class="h-custom-headline h4"><strong>Points of Contact</strong></h4>
        <p><span style="color: #000000;"><span style="font-weight: 400;">U.S. | TUNE</span></span><br>
        <span style="font-weight: 300;">11350 McCormick Rd, EP III, Suite 200, <br>
        Hunt Valley, MD 21031</span></p>
        <p></p>
        <p><span style="color: #000000;"><span style="font-weight: 400;">Information and Sales</span></span><br>
        <a href="mailto:partnermarketing@tune.com"><span style="font-weight: 400;">partnermarketing@tune.com</span></a></p>
        <p><span style="font-weight: 300;"><span style="color: #000000;"><span style="font-weight: 400;">Support</span></span><br>
        </span><a href="mailto:support@tune.com"><span style="font-weight: 400;">support@tune.com</span></a></p>
        <p><span style="font-weight: 300;"><span style="color: #000000;"><span style="font-weight: 400;">Verification of Employment</span></span><br>
        </span><a href="mailto:voe@constellationhbs.com"><span style="font-weight: 400;">voe@constellationhbs.com</span></a></p>
        <h4 class="h-custom-headline h4"><strong>Additional Office Locations</strong></h4>
        <p><span style="color: #000000;"><span style="font-weight: 400;">Germany</span></span><br>
        <span style="font-weight: 300;">Torstr. 231, Vorderhaus, 1. OG, 10115 Berlin</span></p>
        </div></div><div class="x-column x-sm lead-form x-1-2" style="padding: 0px;"><div class="x-raw-content">

        <div class="form--helper-text">Please note: all fields are required.</div>
        <script src="//app-ab40.marketo.com/js/forms2/js/forms2.min.js" type="text/javascript"></script>
        <form id="mktoForm_1008" novalidate="novalidate" class="mktoForm mktoHasWidth mktoLayoutAbove" style="font-family: Lato; color: rgb(51, 51, 51); width: 1368px;"><style type="text/css">.mktoForm .mktoButtonWrap.mktoSimple .mktoButton {
            color:#fff;
            border:1px solid #75ae4c;
            padding:0.4em 1em;
            font-size:1em;
            background-color:#99c47c;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#99c47c), to(#75ae4c));
            background-image: -webkit-linear-gradient(top, #99c47c, #75ae4c);
            background-image: -moz-linear-gradient(top, #99c47c, #75ae4c);
            background-image: linear-gradient(to bottom, #99c47c, #75ae4c);
            }
            .mktoForm .mktoButtonWrap.mktoSimple .mktoButton:hover {
            border:1px solid #447f19;
            }
            .mktoForm .mktoButtonWrap.mktoSimple .mktoButton:focus {
            outline:none;
            border:1px solid #447f19;
            }
            .mktoForm .mktoButtonWrap.mktoSimple .mktoButton:active{
            background-color:#75ae4c;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#75ae4c), to(#99c47c));
            background-image: -webkit-linear-gradient(top, #75ae4c, #99c47c);
            background-image: -moz-linear-gradient(top, #75ae4c, #99c47c);
            background-image: linear-gradient(to bottom, #75ae4c, #99c47c);
            }
        </style>        
             <script type="text/javascript">MktoForms2.loadForm("//app-ab40.marketo.com", "014-JEF-065", 1008, function(form){
                form.onValidate(function(isValid){
                    if(!isValid){ 
                        tuneForm.setEventStatus('error');
                    } else { 
                        tuneForm.setEventStatus('success');
                    }
                    tuneForm.init(); 
            });
        });

        </script>
        </div></div></div></div>
                    
                    
    </body>

    <footer>
        @include('layouts.footer')
    </footer>

</html>
