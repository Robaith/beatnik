@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/blog_single_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/blog_single_responsive.css')}}">

@section('content')
@php
$top_slider = DB::table('products')->where('top_slider',1)->orderBy('id','asc')->limit(3)->get();

$category = DB::table('categories')->orderBy('id','asc')->get();

$best_seller = DB::table('products')->where('best_seller',1)->orderBy('id','desc')->limit(8)->get();

$product = DB::table('products')
        ->join('categories','products.category_id','categories.id')
        ->select('products.*','categories.category_name')
        ->orderBy('id','desc')
        ->get();

$news = DB::table('news')->orderBy('id','desc')->limit(2)->get();
$recent_news = DB::table('news')->orderBy('id','desc')->limit(3)->get();

$daily_essentials = DB::table('products')->where('daily_essentials',1)->orderBy('id','desc')->limit(8)->get();

$diaries = DB::table('products')->where('diaries',1)->orderBy('id','desc')->limit(3)->get();

@endphp
    <!-- Banner -->

    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url({{ asset('public/frontend/images/banner_2_background.jpg')}})"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->

            <div class="owl-carousel owl-theme banner_2_slider">

                <!-- Banner 2 Slider Item -->
                @foreach($top_slider as $ts)
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-6 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_title"><h3>Family Protection Plans</h3></div><br>
                                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</div>
                                        
                                        
                                    </div>
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="{{ URL::to($ts->product_image) }}" alt="" width="300px" height="300px"></div>
                                    </div>
                                    <h4 align="right">{{$ts->product_name}}</h4>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
@endforeach
            </div>
        </div>
    </div>
    


    <!-- Characteristics -->

    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-4 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start" style="background: #b9cfb6">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_2.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Premium Calculator</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-4 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start" style="background: #f5e6f0">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_3.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Policy Information</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-4 col-md-6 char_col">
                    
                    <div class="char_item d-flex flex-row align-items-center justify-content-start" style="background: #ffb3e6">
                        <div class="char_icon"><img src="{{ asset('public/frontend/images/char_4.png')}}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">My Transaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->
    <div class="deals_featured">
        <h1 style="padding-left: 200px">Our Products</h1>
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
                    
                    
                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix">
                                    @foreach($category as $cat)
                                    <li class="active">{{$cat->category_name}}</li>
                                    @endforeach
                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            

                        </div>
                    </div>

                    <div class="deals">
                        <div class="deals_title"></div>
                        <div class="deals_slider_container">
                            
                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">
                                
                                <!-- Deals Item -->
                                @foreach($product as $pr)
                                <div class="owl-item deals_item">
                                    <div class="deals_image"><img src="{{ URL::to($pr->product_image) }}" alt=""></div>
                                    <div class="deals_content">
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_category"><a href="#">Category : {{$pr->category_name}}</a></div>
                                            <div class="deals_item_price_a ml-auto"></div>
                                        </div>
                                        <div class="deals_info_line d-flex flex-row justify-content-start">
                                            <div class="deals_item_name">{{$pr->product_name}}</div>
                                            <div class="deals_item_price ml-auto">{{$pr->product_price}} TK</div>
                                        </div>
                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">Available: <span>{{$pr->product_quantity}}</span></div>
                                                
                                            </div>
                                            <div class="available_bar"><span style="width:17%"></span></div>
                                        </div>
                                       
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>

                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <p style="padding-left: 650px"><a href="#" class="myButton">View All</a></p>
    </div>


    <!-- Best Seller -->

    <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">Best Seller</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">
                        
                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">
                            
                            <!-- Recently Viewed Item -->
                            @foreach($best_seller as $bs)
                            <div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ URL::to($bs->product_image) }}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">{{$bs->product_price}} TK</div>
                                        <div class="viewed_name"><a href="#">{{$bs->product_name}}</a></div>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- News and Events  -->
        <div class="blog">
            <h3 style="padding-left: 200px">News and Events</h3> <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog_posts d-flex flex-row align-items-start justify-content-between">

                        <!-- Blog post -->
                        @foreach ($news as $ne)
                        <div class="blog_post">
                            <div class="blog_image" style="background-image:url({{ URL::to($ne->news_image) }})"></div>
                            <div class="blog_text">{{$ne->news_title}}</div>
                            
                            <div class="blog_button"><a href="/">Continue Reading</a></div>
                        </div>
                        @endforeach

                        <!-- Blog post -->
                        <div class="blog_post">
                            <ul>
                            <li><h4>Recent News</h4></li>
                            @foreach ($recent_news as $rn)
                            <a href="/"><li><img src="{{ URL::to($rn->news_image) }}" alt="not found" width="70px" height="60px"> &nbsp;{{$rn->news_title}}</li> <br></a>
                            @endforeach
                        </ul>
                        </div>

                    </div>
                </div>  
            </div>
        </div>
        <p style="padding-left: 650px"><a href="#" class="myButton">View All</a></p>
    </div>

        <!-- Daily Essentials -->

    <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">Daily Essentials</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">
                        
                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">
                            
                            <!-- Recently Viewed Item -->
                            @foreach($daily_essentials as $de)
                            <div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ URL::to($de->product_image) }}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">{{$de->product_price}} TK</div>
                                        <div class="viewed_name"><a href="#">{{$de->product_name}}</a></div>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- #Diaries -->
        <br>
        <br>
        <div style="text-align: center;"><h2>#Diaries</h2></div> <br><br>
        <div class="container">
            <div class="row">
                @foreach($diaries as $d)
                <div class="col-xs-4 col-md-4">
                    <img src="{{ URL::to($d->product_image) }}" width="300px" height="300px" style="border: 1px solid black">
                    <h6 style="text-align: center;">{{$d->product_name}}</h6>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter" style="background: #474343">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-md-5">
                    <div><h6 style="color: white"><i class="fa fa-envelope-open" aria-hidden="true"></i>   Get special discount in your inbox</h6></div><br>
                    <form action="#" class="newsletter_form" style="width: 400px">
                                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                                <button class="newsletter_button" style="width: 70px; background: #474343; border: 1px solid white">Send</button>
                            </form>
                </div>
                <div class="col-xs-4 col-md-4">
                    <div><h6 style="text-align: center; color: white">Experience the MIKYA Mobile App</h6></div>
                    <div><img src="public\frontend\images\android.PNG" width="150px" height="50px">
                     <img src="public\frontend\images\ios.PNG" width="150px" height="50px" style="float: right;"></div>
                </div>
                <div class="col-xs-3 col-md-3">
                    <div><h6 style="text-align: center; color: white">For any help You may call us at <br>123456789</h6></div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection