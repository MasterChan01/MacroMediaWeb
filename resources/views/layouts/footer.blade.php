<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->




    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('icons/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/socicon/css/styles.css') }}">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/js/typed/typed.min.js','resources/js/custom.js' ])
    @vite(['resources/css/mobirise.css'])

    

</head>

<body>

    <section data-bs-version="5.1" class="footer1 cid-sFGDg6hy8z" once="footers" id="footer1-7">

        <div class="container">
            <div class="row mbr-white">
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Links</strong></h5>
                    <ul class="list mbr-fonts-style display-4">
                        <a href="../home" class="mbr-text item-wrap">Home</a> <br>
                        <a href="../services" class="mbr-text item-wrap">Services</a> <br>
                        <a href="../about" class="mbr-text item-wrap">About</a> <br>
                        <a href="../faq" class="mbr-text item-wrap">FAQS</a> <br>
                        <a href="../contact-us" class="mbr-text item-wrap">Contact Us</a> <br>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Info</strong></h5>
                    <ul class="list mbr-fonts-style display-4">
                        <a href="../services" class="mbr-text item-wrap">Services</a> <br>
                        <a href="../about" class="mbr-text item-wrap">About</a> <br>
                        <a href="../faq" class="mbr-text item-wrap">FAQS</a> <br>
                        <a href="../contact-us" class="mbr-text item-wrap">Contact Us</a> <br>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Features</strong></h5>
                    <ul class="list mbr-fonts-style display-4">
                        <a href="#footer1-7" class="mbr-text item-wrap">Video Editing</a> <br>
                        <a href="#footer1-7" class="mbr-text item-wrap">Social Media Management</a> <br>
                        <a href="#footer1-7" class="mbr-text item-wrap">Social Media Marketing</a> <br>
                        <a href="#footer1-7" class="mbr-text item-wrap">Graphic Design</a> <br>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>About</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-4">
                        MacroMedia is a company that provides chuchuchu fill in the blanks. </p>
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                        <strong>Social</strong>
                    </h5>
                    <div class="social-row display-7">
                        <div class="soc-item">
                            <a href="https://www.instagram.com/kuya_jhakeee/" target="_blank">
                                <span class="mbr-iconfont socicon socicon-facebook"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/kuya_jhakeee/" target="_blank">
                                <span class="mbr-iconfont socicon socicon-twitter"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/kuya_jhakeee/" target="_blank">
                                <span class="mbr-iconfont socicon socicon-instagram"></span>
                            </a>
                        </div>
                        
                    </div>
                </div>                        
            </div>
        </div>
    </section>


@section('content')
    <div id="app">
        <button @click="toggleDrawer">Toggle Drawer</button>
        <drawer v-if="showDrawer"></drawer>
    </div>
@endsection

</body>
</html>
