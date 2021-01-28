<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Eplanet') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/logo3.jpg') }}">

    <!-- CSS========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <!--slick min css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font.awesome.css') }}">
    <!--ionicons css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ionicons.min.css') }}">
    <!--linearicons css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/linearicons.css') }}">
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/toastr.min.css')}}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slinky.menu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/toastr.min.css') }}">
    <!--plugins css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}">
    <!-- Light Box -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slider.css') }}">

    <!--modernizr min js here-->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
</head>

<body>

@include('layouts.frontend_main_menu')

@yield('content')

@if( url()->full() == route('home') )
<footer class="footer_widgets">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">

                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#"> Privacy Policy</a></li>
                                <li><a href="#"> Terms & Conditions</a></li>
                                <li><a href="contact.html"> Contact Us</a></li>
                                <li><a href="#"> Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">

                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#"> Privacy Policy</a></li>
                                <li><a href="#"> Terms & Conditions</a></li>
                                <li><a href="contact.html"> Contact Us</a></li>
                                <li><a href="#"> Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="widgets_container widget_menu">
                        <h3>Extras</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">  Gift Certificates</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#"> Order History</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">

                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#"> Privacy Policy</a></li>
                                <li><a href="#"> Terms & Conditions</a></li>
                                <li><a href="contact.html"> Contact Us</a></li>
                                <li><a href="#"> Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<hr style="border:1px solid #FFF">
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="copyright_area">
                        <p>All Rights Reserved  © 2020</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="footer_payment">
                        <ul>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icon/paypal1.jpg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icon/paypal2.jpg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icon/paypal3.jpg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/assets/img/icon/paypal4.jpg') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

@else
    <div style="height : 10px"></div>
@endif
<!--footer area end-->



 <!-- JS
============================================ -->
    <!--jquery min js-->
    <script src="{{asset('frontend/assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
    <!--popper min js-->
    <script src="{{asset('frontend/assets/js/popper.js')}}"></script>
    <!--bootstrap min js-->
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <!--owl carousel min js-->
     <!--  Light box  -->
     <script src="{{asset('frontend/assets/js/venobox.js')}}"></script>
     <script src="{{asset('frontend/assets/js/venobox.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <!--slick min js-->
    <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
    <!--magnific popup min js-->
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--counterup min js-->
    <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <!--jquery countdown min js-->
    <script src="{{asset('frontend/assets/js/jquery.countdown.js')}}"></script>
    <!--jquery ui min js-->
    <script src="{{asset('frontend/assets/js/jquery.ui.js')}}"></script>
    <!--jquery elevatezoom min js-->
    <script src="{{asset('frontend/assets/js/jquery.elevatezoom.js')}}"></script>
    <!--isotope packaged min js-->
    <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
    <!--slinky menu js-->
    <script src="{{asset('frontend/assets/js/slinky.menu.js')}}"></script>
    <!--instagramfeed menu js-->
    <script src="{{asset('frontend/assets/js/jquery.instagramFeed.min.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/assets/js/toastr.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.fancybox.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>
    <script src="{{asset('frontend/assets/js/script.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/slider.js')}}"></script>
<script>


    var timeID = document.getElementById('time');
    var timeID2 = document.getElementById('time2');
    setInterval(() => {
        var time = new Date();
        timeID.innerHTML = ' ';
        timeID.innerHTML = time.toLocaleTimeString();

        timeID2.innerHTML = ' ';
        timeID2.innerHTML = time.toLocaleTimeString();
    }, 1000);
</script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif

    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}");
    @endif

    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif
</script>

   <script type="text/javascript">

        $(document).on('click', '#add_to_wish_list', function (e) {
            var id = (this.getAttribute('data-target'));

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: window.location.origin +'/addWishList/' + id,
                method: 'get',


                success: function (response) {
                    console.log(response.responseText);
                    toastr.success(response.message);
                    console.log(response);
                },
                error:function(response)
                {
                    let error = JSON.parse(response.responseText);

                    if( error.error == 'Unauthenticated.' ){
                        window.location = window.location.origin + '/login';
                    }
                }
            });


        });

        $(document).on('click', '#express_wish', function (e) {
            var id = (this.getAttribute('data-target'));

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: window.location.origin +'/addExpressList/' + id,
                method: 'get',


                success: function (response) {
                    console.log(response.responseText);
                    toastr.success(response.message);
                    console.log(response);
                },
                error:function(response)
                {
                    let error = JSON.parse(response.responseText);

                    if( error.error == 'Unauthenticated.' ){
                        window.location = window.location.origin + '/login';
                    }
                }
            });


        });

        function createElement(element) {
            return document.createElement(element);
        }


        $('.venobox').venobox({
        numeratio: true,
        border: '20px'
       });

      $('.venoboxframe').venobox({
        border: '6px',
        overlayColor : 'rgba(255,255,255,0.85)',
        titlePosition : 'bottom',
        titleColor: '#333',
        titleBackground: 'transparent',
        closeColor: '#333',
        closeBackground: 'transparent',
                spinner : 'wave'
      });


</script>



<script>
	$(function(){
        $('.bo-slider').boSlider({
            slideShow: true,
            interval: 5000,
            animation:false,
            playing : true,
            video : true
        });
	});

</script>

</body>

</html>
