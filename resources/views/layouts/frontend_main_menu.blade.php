<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                    </div>
                    <div class="language_currency">
                        <ul>
                            <li class="language"><a href="#" style="color:#999999" id="time"></a>

                            </li>
                            @if(! \Illuminate\Support\Facades\Auth::check())
                            <li><a href="{{route('register')}}">{{ __('Sign Up') }}</a></li>
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @else
                            <li><a href="{{route('logout')}}"
                                   onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"
                                >{{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endif
                        <li><a href="#">English</a></li>
                            <li><a href="{{ route('contact.show') }}">Customer Care</a></li>
                        </ul>
                    </div>
                    <div class="header_social text-right">
                        @php $categories = \App\Models\Category::with(['subcategory', 'subcategory.secondary_sub_categories'])->orderBy('created_at','desc')->GetActive()->get();  @endphp
                    </div>
                    <div class="search_container">
                        <form action="{{route('pages.search')}}" method="get" enctype="multipart/form-data">
                            <div class="hover_category">
                                <select class="select_option" name="category_name" id="categori1">
                                    <option selected disabled value="" >Select a categories</option>
                                    @if(isset($categories))
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">
                                                {{$category->category_name}}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="search_box">
                                <input name="product_name" placeholder="Search product..." type="text"><a href=""><i class="fa fa-camera" aria-hidden="true"></i></a>
                                <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                            </div>
                        </form>
                    </div>


                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="{{url('/')}}">Home</a>
                            </li>

                            <li class="has-child c-1">
                                <a href="#">E-CAMP</a>
                                <ul class="drop-down drop-menu-1">
                                    <li><a href="{{ route('brands.show') }}">Brand</a></li>
                                    <li><a href="{{ route('allVendor.show') }}">Shop</a></li>

                                </ul>
                            </li>

                            @php
                                $id = substr(strrchr(url()->current(), '/'), 1 );
                            @endphp
                            @if(route('topSale.show',$id) == url()->current() || route('overview',$id) == url()->current())
                                <li class="menu-item-has-children">
                                <a href="{{route('topSale.show',$id)}}">Company Profile</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Layouts</a>
                                        <ul class="sub-menu">

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            @endif

                            @php
                                $id = substr(strrchr(url()->current(), '/'), 1 );
                            @endphp
                            @if(route('topSale.show',$id) == url()->current() || route('overview',$id) == url()->current())
                                <li class="menu-item-has-children">
                                    <a href="{{route('topSale.show',$id)}}">Company Profile</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('overview',$id)}}#sec1">Company Overview</a></li>
                                        <li><a href="{{route('overview',$id)}}#sec2">Company Capability</a></li>
                                        <li><a href="{{route('overview',$id)}}#sec3">Business Performance</a></li>
                                    </ul>

                                </li>
                            @endif


                            @if( \Illuminate\Support\Facades\Auth::check())
                                <li class="has-child c-1">
                                    <a href="#">Vlog</a>
                                    <ul class="drop-down drop-menu-1">
                                        <li><a href="{{ route('blog.allBog') }}">All Vlogs</a></li>
                                        <li><a href="{{ route('blog.create') }}">Create Vlog</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="{{route('profile.show')}}">Profile</a>
                                <li class="menu-item-has-children "><a href="{{route('wish.list')}}">Wishlist</a>
                            @else
                                <li class="has-child c-1 c-1"><a href="{{ route('blog.allBog') }}"> Vlog </a> </li>
                            @endif
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> tabrickhan112@gmail.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<header>
    <div class="main_header">
        <div class="header_top">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header-inner">
                        <div class="col-lg-4 col-md-4">
                            <div class="language_currency">

                                <a href="#" id="time"></a>
                                <a href="#" id="time2"></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="language_currencys">
                                <a href=""><h4 class="ml23">GET APPS</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                           <div class="top_last">
                            <ul>
{{--                                <li><a href="{{route('admin.register')}}">Sell</a></li>--}}
{{--                                <li><a href="#">EMI</a></li>--}}
{{--                                <li><a href="#">Gift Card</a></li>--}}
                                <li><a href="{{ route('contact.show') }}">Customer Care</a></li>
                            </ul>
                           </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="header_middle">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{asset('frontend/assets/eplanet.png')}}" width="250px" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">

                        <div class="header_right_info">

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="search_container">
                                        <form action="{{route('pages.search')}}" method="get" enctype="multipart/form-data">

                                            <div class="hover_category">

                                                <select class="select_option" style="color:#000" name="category_name" id="categori2">
                                                    <option selected disabled value="">Select a categories</option>

                                                    @if(isset($categories))
                                                        @foreach($categories as $category)
                                                                <option value="{{$category->id}}">
                                                                    {{$category->category_name}}
                                                                </option>
                                                        @endforeach
                                                    @endif
                                                </select>

                                            </div>

                                            <div class="search_box">
                                                <input name="product_name" placeholder="Search product..." type="text">
                                                <a href=""><i class="fa fa-camera" aria-hidden="true"></i></a>
                                                <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-2 area_top">
                                    <div class="header_account_area">
                                        <div class="header_account_list register">
                                            <ul>
                                                @if(! \Illuminate\Support\Facades\Auth::check())
                                                    <li><a href="{{route('register')}}">{{ __('Signup') }}</a></li>
                                                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                                @else
                                                    <li><a href="{{route('logout')}}"
                                                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"
                                                        >{{ __('Logout') }}</a></li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                @endif
                                                <li><a href="#">English</a></li>
                                            </ul>
                                        </div>

                                        @if( Session::has('cart') && \Illuminate\Support\Facades\Auth::check())
                                            <div class="header_account_list  mini_cart_wrapper">
                                            @php $addTocarts = Session::get('cart'); @endphp
                                               <a href="#" id="cardDiv"><span class="lnr lnr-cart"></span><span class="item_count">{{ count($addTocarts) }}</span></a>
                                                <!--mini cart-->
                                                <div class="mini_cart">
                                                    <div class="cart_gallery">
                                                        <div class="cart_close">
                                                            <div class="cart_text">
                                                                <h3>cart</h3>
                                                            </div>
                                                            <div class="mini_cart_close">
                                                                <a href="javascript:void(0)" id="cross"><i class="icon-x"></i></a>
                                                            </div>
                                                        </div>

                                                        @php
                                                            //$addTocarts = Session::get('cart');
                                                            $total=0;
                                                        @endphp
                                                        @if($addTocarts != null)
                                                        @foreach($addTocarts as $addTocart)

                                                            @php

                                                               // $price= $addTocart['quantity'] * $addTocart['product_price'];
                                                                $total += $addTocart['quantity'] * $addTocart['product_price'];

                                                            @endphp

                                                        <div class="cart_item">
                                                           <div class="cart_img">
                                                               <a href="#"><img src="{{assetImageAndVideo('images').$addTocart['feature_image']}}" alt=""></a>
                                                           </div>
                                                            <div class="cart_info">
                                                                <a href="#">{{$addTocart['product_name']}}</a>
                                                                <p>{{$addTocart['quantity']}} x <span> BDT {{$addTocart['quantity'] * $addTocart['product_price']}} </span></p>
                                                            </div>
                                                            <div class="cart_remove">
                                                                <form action="{{route('cart.destroy',$addTocart['id'])}}" method="post">
                                                                    @csrf
                                                                    @method("DELETE")
                                                                    <button type="submit"><i class="icon-x"></i></button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                        @endforeach
                                                            @endif
                                                    </div>
                                                    <div class="mini_cart_table">
                                                        <div class="cart_table_border">
                                                            <div class="cart_total mt-10">
                                                                <span>total:</span>
                                                                <span class="price">BDT {{$total}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mini_cart_footer">
                                                       <div class="cart_button">
                                                            <button>
                                                                <span onclick="window.location='{{ route('checkout.final') }}' " class="order">Order Now</span>
                                                                <span class="total">BDT {{$total}}</span>

                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!--mini cart end-->
                                           </div>

                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="main-nav sticky-header ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-1">
                        <div class="location" style="text-align: center;margin-top:10px;">
                            <a href="{{ route('contact.show') }}">
                                <i class="fa fa-map-marker " aria-hidden="true"></i> <br>
                                <span class="text-white">Dhaka</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 col-10">
                        <nav class="nav" id="main-nav">
                            <ul class="responsive-menu">

{{--                                <li class="has-child c-1">--}}
{{--                                    <a href="{{ route('home') }}">{{__('Home')}}</a>--}}
{{--                                </li>--}}

                                <li class="has-child c-1">
                                    <a href="">E-CAMP</a>
                                    <ul class="drop-down drop-menu-1">
                                        <li><a href="{{route('brands.show')}}">Brand</a></li>
                                        <li><a href="{{route('allVendor.show')}}">Shop</a></li>
                                    </ul>
                                </li>

                                @php
                                    $id = substr(strrchr(url()->current(), '/'), 1 );
                                @endphp
                                @if(route('topSale.show',$id) == url()->current() || route('overview',$id) == url()->current())
                                <li class="has-child c-1">
                                    <a href="{{route('topSale.show',$id)}}">{{__('Company Profile')}}</a>
                                    <ul class="drop-down drop-menu-1">
                                        <li><a id="" href="{{route('overview',$id)}}#sec1">Company Overview</a></li>
                                        <li><a id="" href="{{route('overview',$id)}}#sec2">Company Capability</a></li>
                                        <li><a id="" href="{{route('overview',$id)}}#sec3">Business Performance</a></li>
                                    </ul>
                                </li>
                                @endif
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <li class="has-child c-2">
                                            <a href="{{route('cat.show',$category->category_slug)}}">{{$category->category_name}}
                                                @if( count($category->subcategory) >0 )
{{--                                                    <i class="fa fa-caret-down"></i>--}}
                                                @endif
                                            </a>
                                            @if( count($category->subcategory) >0 )
                                            <ul class="drop-down drop-menu-1">
                                                @foreach($category->subcategory as $cat)
                                                <li class="has-child ">
                                                    <a href="{{route('subcat.show',$cat->subcategory_slug)}}">{{$cat->subcategory_name}}</a>
                                                    @if( count($cat->secondary_sub_categories) > 0 )
                                                        <ul class="drop-down drop-menu-2">
                                                            @foreach($cat->secondary_sub_categories as $secondary_sub )
                                                                <li><a href="{{route('secondary_sub.show',$secondary_sub->secondary_subcategory_slug)}}">{{$secondary_sub->secondary_subcategory_name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endforeach
                                            </ul>
                                                @endif
                                        </li>
                                    @endforeach
                                @endif


                                @if( \Illuminate\Support\Facades\Auth::check())
                                    <li class="has-child c-1">
                                        <a href="#">Vlog</a>
                                        <ul class="drop-down drop-menu-1">
                                            <li><a href="{{ route('blog.allBog') }}">All Vlogs</a></li>
                                            <li><a href="{{ route('blog.create') }}">Create Vlog</a></li>

                                        </ul>
                                    </li>
                                    <li class="has-child c-1"><a href="{{route('profile.show')}}">Profile</a> </li>
                                    <li class="menu-item-has-children "><a href="{{route('wish.list')}}">Wishlist</a>
                                @else
                                    <li class="has-child c-1 c-1"><a href="{{ route('blog.allBog') }}"> Vlog </a> </li>
                                @endif
                                <li class=" anime"><a href="{{route('promotion.category')}}"><h4 class="ml2">নবাবীহাট</h4></a></li>

                            </ul>
                        </nav>
                    </div>
{{--                    <div class="col-md-1"></div>--}}
                </div>

            </div>
        </div>


    </div>
</header>

@php $addTocarts = Session::get('cart'); @endphp
@if(!$addTocarts == NULL)
<section class="cart_fixed">
    <div class="cart_fixed_img mini_cart_wrapper">
        <a href="#">
            <div class="img_inner">
                <svg version="1.1" id="Calque_1" x="0px" y="0px" style="fill:#FDD670;stroke:#FDD670;" width="16px" height="24px" viewBox="0 0 100 160.13" data-reactid=".2031ihboqom.3.0.1.2.0.0"><g data-reactid=".2031ihboqom.3.0.1.2.0.0.0"><polygon points="11.052,154.666 21.987,143.115 35.409,154.666  " data-reactid=".2031ihboqom.3.0.1.2.0.0.0.0"></polygon><path d="M83.055,36.599c-0.323-7.997-1.229-15.362-2.72-19.555c-2.273-6.396-5.49-7.737-7.789-7.737   c-6.796,0-13.674,11.599-16.489,25.689l-3.371-0.2l-0.19-0.012l-5.509,1.333c-0.058-9.911-1.01-17.577-2.849-22.747   c-2.273-6.394-5.49-7.737-7.788-7.737c-8.618,0-17.367,18.625-17.788,37.361l-13.79,3.336l0.18,1.731h-0.18v106.605l17.466-17.762   l18.592,17.762V48.06H9.886l42.845-10.764l2.862,0.171c-0.47,2.892-0.74,5.865-0.822,8.843l-8.954,1.75v106.605l48.777-10.655   V38.532l0.073-1.244L83.055,36.599z M36.35,8.124c2.709,0,4.453,3.307,5.441,6.081c1.779,5.01,2.69,12.589,2.711,22.513   l-23.429,5.667C21.663,23.304,30.499,8.124,36.35,8.124z M72.546,11.798c2.709,0,4.454,3.308,5.44,6.081   c1.396,3.926,2.252,10.927,2.571,18.572l-22.035-1.308C61.289,21.508,67.87,11.798,72.546,11.798z M58.062,37.612l22.581,1.34   c0.019,0.762,0.028,1.528,0.039,2.297l-23.404,4.571C57.375,42.986,57.637,40.234,58.062,37.612z M83.165,40.766   c-0.007-0.557-0.01-1.112-0.021-1.665l6.549,0.39L83.165,40.766z" data-reactid=".2031ihboqom.3.0.1.2.0.0.0.1"></path></g></svg>
            </div>
        </a>
        <div class="cart_quantity">
            <p>{{ count($addTocarts) }} items</p>
        </div>
    </div>
    <div class="cart_price">
        <span class="price">BDT {{$total}}</span>
    </div>
</section>

    @else

</section>
@endif

<section class="chat">
    <div class="chat_inner">
        <a href="#"><i class="fa fa-comments" aria-hidden="true"></i>Live Chat</a>
    </div>
</section>
