 <!DOCTYPE html>
 <html lang="en">
 <head>
    <title>Beatnik</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('public/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/plugins/slick-1.8.0/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/responsive.css') }}">

</head>

<body>


    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><a href="/"><h1>Beatnik</h1></a></div></div>
                            <div class="top_bar_contact_item"><div class="top_bar_icon"></div><a href="mailto:fastsales@gmail.com">BRANDS</a></div>
                            <div class="top_bar_contact_item"><div class="top_bar_icon"></div><a href="mailto:fastsales@gmail.com">NYKYAA FASHION</a></div>
                            <div class="top_bar_contact_item"><div class="top_bar_icon"></div><a href="mailto:fastsales@gmail.com">Beauty ADVICE</a></div>
                            <div class="top_bar_contact_item"><div class="top_bar_icon"></div><a href="mailto:fastsales@gmail.com">NYKYAA NETWORK</a></div>
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_menu">
                                    <ul class="standard_dropdown top_bar_dropdown">
                                        <div class="search-container">
                                            <form action="">
                                              <input type="text" placeholder="Search.." name="search">
                                              <button type="submit"><i class="fa fa-search"></i></button>
                                          </form>
                                      </div>
                                  </ul>
                              </div>
                              <div class="top_bar_user">
                                <div class="user_icon"><img src="{{ asset('public/frontend/images/user.svg')}}" alt=""></div>
                                <div><a href="#">Account</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>

        <!-- Header Main -->

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    

                    <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">


                        <div class="custom_dropdown">
                            <div class="custom_dropdown_list">
                                <span class="custom_dropdown_placeholder clc"></span>
                                <i class="fas fa-chevron-down"></i>
                                <ul class="custom_list clc">
                                    <li><a class="clc" href="#"></a></li>
                                    <li><a class="clc" href="#"></a></li>
                                    <li><a class="clc" href="#"></a></li>
                                    <li><a class="clc" href="#"></a></li>
                                    <li><a class="clc" href="#"></a></li>
                                    <li><a class="clc" href="#"></a></li>
                                </ul>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    
</div>
</div>
</div>



@yield('content')

<!-- Footer -->
    <!-- Characteristics -->

    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-4 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_2.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">1500+ Brands</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-4 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_3.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Shipping</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-4 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_4.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Genuine Products</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer class="footer" style="background: black">
    <h4 style="text-align: center; color: white">Store Locator</h4>
    <div class="container">
        <div class="row">
            

            <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="395" id="gmap_canvas" src="https://maps.google.com/maps?q=Shasongacha&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a></div><style>.mapouter{position:relative;text-align:right;height:395px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:395px;width:1080px;}</style></div>

        </div>
    </div>
</footer>

<!-- Copyright -->


</div>
</div>

<script src="{{ asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('public/frontend/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('public/frontend/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/greensock/ScrollToPlugin.min.jsplugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{ asset('public/frontend/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('public/frontend/js/custom.js')}}"></script>
</body>

</html>