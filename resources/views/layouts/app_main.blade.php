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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/pnga%20553.png') }}">

    <!-- CSS
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
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
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slinky.menu.css') }}">
    <!--plugins css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}">
    <!-- Light Box -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/venobox.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">

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
@endif
<!--footer area end-->

<!-- modal area start-->
<!--
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="icon-x"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product7.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
<!-- modal area end-->

<!--news letter popup start-->

<!--news letter popup start-->


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
    <script src="{{asset('frontend/assets/js/jquery.fancybox.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

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

</body>

</html>
