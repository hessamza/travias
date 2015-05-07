<!DOCTYPE html>
<html ng-app>
<head>
<title>Search form with AngualrJS</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<script src="http://code.angularjs.org/angular-1.0.0.min.js"></script>
	<script src="search.js"></script>
</head>

<body>
@yield('main-area')
</body>

</html>





<!doctype html>
<html lang="en">
<head>
    <title>
        @yield('title')
    </title>

    <meta charset="utf-8">
    <!--add responsive layout support-->
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="آرام بند،ترمز درب،ترمز در،فنر، فنر درب،فنر در،در بند،درب بند، خرید اینترنتی آرام بند، خرید اینترنتی ترمز درب، خرید اینترنتی ترمز در، خرید اینترنتی فنر، خرید اینترنتی فنر درب، خرید اینترنتی فنر در، خرید اینترنتی در بند، خرید اینترنتی درب بند
                                 خرید آنلاین آرام بند، خرید آنلاین ترمز درب، خرید آنلاین ترمز در، خرید آنلاین فنر،خرید آنلاین فنر درب،خرید آنلاین فنر در،خرید آنلاین در بند،خرید آنلاین درب بند،سفارش نصب اینترنتی ترمز درب ،سفارش نصب اینترنتی  آرام بند،سفارش نصب اینترنتی فنر درب،سفارش نصب آنلاین ترمز درب،سفارش نصب آنلاین آرام بند،سفارش نصب آنلاین  فنر درب،پنجره UPVC
                                 پنجره دو جداره،خرید اینترنتی
">
    <meta name="keywords" content="آرام بند،ترمز درب،ترمز در،فنر، فنر درب،فنر در،در بند،درب بند، خرید اینترنتی آرام بند، خرید اینترنتی ترمز درب، خرید اینترنتی ترمز در، خرید اینترنتی فنر، خرید اینترنتی فنر درب، خرید اینترنتی فنر در، خرید اینترنتی در بند، خرید اینترنتی درب بند
                                   خرید آنلاین آرام بند، خرید آنلاین ترمز درب، خرید آنلاین ترمز در، خرید آنلاین فنر،خرید آنلاین فنر درب،خرید آنلاین فنر در،خرید آنلاین در بند،خرید آنلاین درب بند،سفارش نصب اینترنتی ترمز درب ،سفارش نصب اینترنتی  آرام بند،سفارش نصب اینترنتی فنر درب،سفارش نصب آنلاین ترمز درب،سفارش نصب آنلاین آرام بند،سفارش نصب آنلاین  فنر درب،پنجره UPVC
                                   پنجره دو جداره،خرید اینترنتی
">
    <meta name="description" content="ترمز در، ترمز درب، آرام بند، فنر،فنر در، فنر درب، درب بند،در بند ، کنترل کننده درب ">
    <!--include favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/fav.ico">

    <!--fonts include-->

{{--    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,400italic,500italic,300italic,100italic,100,700italic,900,900italic,700' rel='stylesheet' type='text/css'>--}}
    <!--stylesheet include-->
<!--    <link rel="stylesheet" type="text/css" media="all" href="plugins/layerslider/css/layerslider.css">
    <link rel="stylesheet" type="text/css" media="all" href="plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="plugins/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" media="all" href="plugins/jackbox/css/jackbox.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/animate.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">-->


    <!--[if lte IE 10]>


    <![endif]-->
    {{ HTML::style('/plugins/royalslider/royalslider.css') }}

    {{ HTML::style('/plugins/royalslider/skins/default/rs-default.css') }}

    {{ HTML::style('/plugins/layerslider/css/layerslider.css') }}
    {{ HTML::style('/plugins/owl-carousel/assets/owl.carousel.min.css') }}
    {{ HTML::style('/plugins/fancybox/jquery.fancybox.css') }}
    {{ HTML::style('/plugins/jackbox/css/jackbox.min.css') }}
    {{ HTML::style('/css/animate.css') }}
  {{ HTML::style('/css/bootstrap.min.css') }}
  <!--  {{ HTML::style('css/bootstrap/bootstrap.min.css') }}-->


    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    @if($localeCode == LaravelLocalization::getCurrentLocale())

    <link rel="stylesheet" href="/css/{{$localeCode}}_style.css" />
    @endif
    @endforeach


    {{ HTML::style('/css/main.css') }}

    {{ HTML::style('plugins/selectize/css/selectize.bootstrap3.css') }}

    <!--[if lte IE 10]>

    {{ HTML::style('/css/ie.css') }}
    {{ HTML::style('/plugins/jackbox/css/jackbox-ie9.css') }}
    <![endif]-->
    <!--head libs-->
    <!--[if lte IE 8]>
    <style>
        #preloader{display:none !important;}
    </style>
    <![endif]-->



    @yield('head')
</head>
<body class="sticky_menu">


<div id= @yield('preloader')></div>


<!--layout-->
<div class="wide_layout db_centered bg_white">
<!--[if (lt IE 9) | IE 9]>
<div class="bg_red" style="padding:5px 0 12px;">
    <div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
<![endif]-->
<!--cookie-->
<!--
<div class="cookie">
    <div class="container">
        <div class="d_table w_full">
            <div class="d_table_cell v_align_m color_white fw_medium">
                Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.
            </div>
            <div class="d_table_cell v_align_m color_white">
                <a href="#" class="button_type_1 grey tr_all second_font d_block f_right fs_medium">Read More</a>
                <button class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium m_right_3">Accept Cookies</button>
            </div>
        </div>
    </div>
</div> -->
<header role="banner" class="w_inherit">















<hr>
<div class="header_middle_part t_xs_align_c">
    <div class="container">
        <div class="d_table w_full d_xs_block">
            <div class="col-lg-4 col-md-4 col-sm-4 d_table_cell d_xs_block f_none v_align_m m_xs_bottom_15">
                <!--logo-->
                <a href="/" class="d_inline_b">







                    <img src="/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 d_table_cell d_xs_block f_none v_align_m">
                <div class="clearfix">
                    <div class="clearfix f_right f_xs_none d_xs_inline_b m_xs_bottom_15 t_xs_align_l">

                        <!--language-->
                        <div class="f_right m_right_3 relative transform3d">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if($localeCode == LaravelLocalization::getCurrentLocale())
                            <button class="button_type_1 tr_all second_font color_dark grey state_2" data-open-dropdown="#language">
                                <img src="/images/flag_{{$localeCode}}.jpg" alt="" class="d_inline_m m_right_10"><i class="fa fa-angle-down d_inline_m fs_small"></i>
                            </button>
                            @endif
                            @endforeach
                            <ul id="language" data-show="wicket" data-hide="wicketout" class="sub_menu dropdown fs_medium bg_grey_light second_font animated">


                         @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if(!($localeCode == LaravelLocalization::getCurrentLocale()))
                                    <li>
                                        <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}" class="sc_hover">
                                            <img src="/images/flag_{{$localeCode}}.jpg" alt="" class="d_inline_m m_right_7">
                                            {{{ $properties['native'] }}}
                                        </a>
                                    </li>
                                @endif
                          @endforeach


                            </ul>
                        </div>
                        <!--login-->
                        <div class="f_right m_right_3 relative transform3d">

                            @if(Auth::check())

                            <div class="f_right m_right_3 relative transform3d">
                                <button class="button_type_1 tr_all second_font color_dark grey state_2" data-open-dropdown="#signme">
                                    <i class="fa fa-user d_inline_m m_right_5"></i>{{Auth::user()->firstname}}<i class="fa fa-angle-down d_inline_m fs_small"></i>
                                </button>
                                <ul id="signme" data-show="wicket" data-hide="wicketout" class="sub_menu dropdown fs_medium bg_grey_light second_font animated">
                                    @if(Auth::user()->admin == 1)
                                    <li>{{ HTML::link('admin/categories', 'Manage Categories') }}</li>
                                    <li>{{ HTML::link('admin/products', 'Manage Products') }}</li>
                                    @endif
                                    <li>{{ HTML::link('users/signout', 'Sign Out') }}</li>
                                </ul>
                            </div>


                            @else

                            <button class="button_type_1 tr_all second_font color_dark grey state_2" data-open-dropdown="#login"><i class="fa fa-user d_inline_m m_right_5"></i>







                                  </button>
                            <div id="login" data-show="fadeInUp" data-hide="fadeOutDown" class="dropdown bg_grey_light login_dropdown animated">


                                {{ Form::open(array('url'=>'users/signin', 'class'=>'m_bottom_15','method' => 'post')) }}


                                    <ul>
                                        <li class="m_bottom_15">

                                            <label for="username" class="second_font m_bottom_4 d_inline_b fs_medium">{{trans('greeting.emailadd')}}</label>
                                            {{ Form::text('email', null, array('class'=>'w_full tr_all', 'placeholder'=>'Email Address')) }}
                                        </li>
                                        <li class="m_bottom_20">
                                            <label for="password" class="second_font m_bottom_4 d_inline_b fs_medium">{{trans('greeting.passw')}}</label>
                                            {{ Form::password('password', array('class'=>'w_full tr_all', 'placeholder'=>'Password')) }}

                                        </li>

                                        @if(Session::has('message'))
                                        <span class="d_inline_m second_font color_lbrown fs_medium d_md_block">{{ Session::get('message') }}</span>
                                        @endif
                                     {{--   <li class="m_bottom_20">
                                            <input type="checkbox" name="" id="remember_me">
                                            <label for="remember_me" class="second_font fs_medium">Remember me</label>
                                        </li>--}}

                                        <li>

                                            {{ Form::submit(trans('greeting.login'), array('class'=>'t_align_c tt_uppercase w_full second_font d_block fs_medium button_type_2 lbrown tr_all','style'=>'text-align:center'))}}
                                            {{ Form::close() }}
                                           </li>



                                    </ul>

                           {{--     <div class="m_bottom_14 t_align_c">
                                    <a href="#" class="second_font sc_hover fs_small">Forgot your password?</a><br>
                                    <a href="#" class="second_font sc_hover fs_small">Forgot your username?</a>
                                </div>--}}
                                <hr class="divider_white m_bottom_25">
                                <h5 class="color_dark tt_uppercase second_font t_align_c m_bottom_15 fw_light">{{trans('greeting.NewCustomerme')}}</h5>
                                <li>{{ HTML::link('users/newaccount', trans('greeting.makeCustomerme'),array('class'=>'button_type_2 tt_uppercase fs_medium second_font d_block t_align_c black state_2','style'=>'text-align:center')) }}</li>


<!--                                <a href="/users/register" role="button" class="button_type_2 tt_uppercase fs_medium second_font d_block t_align_c black state_2">Create An Account</a>
-->                            </div>


                            @endif





                        </div>
                    </div>





                    <div id="search-form">
                        {{ Form::open(array('url'=>'/store/search', 'method'=>'get','class'=>'relative f_right f_xs_none m_right_3 db_xs_centered button_in_input')) }}
                        {{ Form::text('keyword', null, array('placeholder'=>'Search by keyword', 'class'=>'fs_medium color_light fw_light w_full tr_all')) }}
                        {{Form::button('<i class="fa fa-search d_inline_m"></i>', array('type' => 'submit', 'class' => 'color_dark tr_all color_lbrown_hover'))}}



                        {{ Form::close() }}
                    </div><!-- end search-form -->





                </div>
            </div>
        </div>
    </div>
</div>

<div class="header_bottom_part w_inherit">
<div class="container">
    <hr class="divider_black">
    <div class="shopman" >
        <ul class="hr_list si_list shop_list f_right f_sm_none d_sm_inline_b t_sm_align_l">
            <!--   <li>
                   <a href="#" class="color_lbrown_hover vc_child">
                                                   <span class="d_inline_m">
                                                       <i class="fa fa-heart fs_large"></i><sup class="color_dark">7</sup>
                                                   </span>
                   </a>
               </li>-->
            <!-- <li>
                 <a href="#" class="color_lbrown_hover vc_child">
                                                 <span class="d_inline_m">
                                                     <i class="fa fa-arrow-right fs_small"></i><i class="fa fa-arrow-left fs_small"></i><sup class="color_dark">2</sup>
                                                 </span>
                 </a>
             </li>-->
            <!--shopping cart-->

        </ul>
    </div>

<div class="bg_color_dark bg_xs_transparent">
    <button id="mobile_menu_button" class="vc_child d_xs_block db_xs_centered d_none m_bottom_10 m_top_15 bg_lbrown color_white tr_all"><i class="fa fa-navicon d_inline_m"></i></button>
    <!--main menu-->
    <nav role="navigation" class="d_xs_none" ">
        <ul class="main_menu relative hr_list second_font fs_medium"  >
            <li class="current">
              <!--  <a href="/" class="tt_uppercase tr_delay color_light_2">Home <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5"></i></a>-->
                {{ HTML::link('/',trans('greeting.HOME') , array('class' => 'tt_uppercase tr_delay color_light_2')) }}
                <!--sub menu (second level)-->
                <!--<ul class="sub_menu bg_grey_light tr_all">
                    <li class="current"><a href="index-2.html">Home v1</a></li>
                    <li><a href="index_v2.html">Home v2</a></li>
                    <li><a href="index_v3.html">Home v3</a></li>
                    <li><a href="index_v4.html">Home v4</a></li>
                </ul>-->
            </li>

            <li>
                {{ HTML::link('/store',trans('greeting.shop') , array('class' => 'tt_uppercase tr_delay color_light_2')) }}

              <!--  <div class="mega_menu bg_grey_light tr_all">-->
                    @foreach($products as $product)

                   <!-- <div class="row">
                        <section class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_15">-->
                        <!--    <h6 class="color_dark m_bottom_13"><b class="second_font "> {{ HTML::link('/store/product/'.$product->id, $product->name) }}   </b></h6>
                            {{ HTML::image($product->image, $product->title, array('class'=>'m_bottom_3')) }}-->

                         <!--   <ul class="mega_menu_list">
                                <li><a href="#" class="d_block sc_hover tr_delay">Sofas</a></li>
                                <li><a href="#" class="d_block sc_hover tr_delay">Chairs</a></li>
                                <li><a href="#" class="d_block sc_hover tr_delay">Ottomans</a></li>
                            </ul>-->
                     <!--   </section>-->
                        @endforeach

                   <!-- </div>-->
               <!-- </div>-->
            </li>


            <li>

            <li>
                {{ HTML::link('',trans('greeting.saleservices') , array('class' => 'tt_uppercase tr_delay color_light_2')) }}

                <!--                <a href="" class="tt_uppercase tr_delay color_light_2">sale services <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
                -->                <!--sub menu (second level)-->
                <ul class="sub_menu bg_grey_light tr_all">
                    <li>
                        {{ HTML::link('agent/agents',trans('greeting.agents') ) }}

                    </li>
                    <li>
                        {{ HTML::link('employ/garanty',trans('greeting.garantiagent') ) }}
                    </li>




                </ul>
            </li>

            <li>

                {{ HTML::link('/employ/employindex',trans('greeting.employwant') , array('class' => 'tt_uppercase tr_delay color_light_2')) }}

                <ul class="sub_menu bg_grey_light tr_all">

                    <li>
                        {{ HTML::link('/employ/employindex',trans('greeting.agentnewregister') ) }}
                    </li>
                    <li>
                        {{ HTML::link('employ/garanty',trans('greeting.garanty') ) }}

                    </li>
                    <li>
                        {{ HTML::link('employ/index',trans('greeting.employrequest') ) }}
                    </li>
                    <li>
                        {{ HTML::link('/employ/installerad',trans('greeting.installer') ) }}
                    </li>

                </ul>


            </li>

            <li>
            {{ HTML::link('/register',trans('greeting.Branches') , array('class' => 'tt_uppercase tr_delay color_light_2')) }}



                <!--sub menu (second level)-->
        <!--        <ul class="sub_menu bg_grey_light tr_all">
                    <li><a href="index_v4.html">Revolution</a></li>
                    <li><a href="index_v3.html">Flex</a></li>
                    <li><a href="index-2.html">Layer</a></li>
                    <li><a href="index_v2.html">Royal</a></li>
                </ul>-->
            </li>





        <!--    <li>
                <a href="pages_category_grid.html" class="tt_uppercase tr_delay">CRM <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
                <ul class="sub_menu bg_grey_light tr_all">
                    <li><a href="pages_category_grid.html">Category page v1</a></li>
                    <li><a href="pages_category_list.html">Category page v2</a></li>
                    <li><a href="pages_deals_of_the_day.html">Category page v3</a></li>
                    <li><a href="pages_product_v1.html">Product page v1</a></li>
                    <li><a href="pages_product_v2.html">Product page v2</a></li>
                    <li><a href="pages_product_v3.html">Product page v3</a></li>
                    <li><a href="pages_wishlist.html">Wishlist</a></li>
                    <li><a href="pages_compare_products.html">Compare</a></li>
                    <li><a href="pages_shopping_cart.html">Shopping cart</a></li>
                    <li><a href="pages_checkout.html">Checkout</a></li>
                    <li><a href="pages_manufacturers.html">Manufacturers</a></li>
                    <li><a href="pages_manufacturer.html">Manufacturer page</a></li>
                    <li><a href="pages_orders_list.html">Orders list</a></li>
                    <li><a href="pages_order_page.html">Order page</a></li>
                    <li><a href="pages_about.html">About us</a></li>
                    <li><a href="page_404.html">404 page</a></li>
                </ul>
            </li>-->


            <li >

                {{ HTML::link('polling', trans('greeting.pooling'), array('class' => 'tt_uppercase tr_delay color_light_2')) }}
            </li>

            <li>
<!--                <a href="blog.html" class="tt_uppercase tr_delay">About doorman <i class="fa fa-caret-down tr_inherit d_inline_m m_left_5 m_md_left_2"></i></a>
-->                {{ HTML::link('about',  trans('greeting.about')  , array('class' => 'tt_uppercase tr_delay color_light_2')) }}
            </li>

            <li >

                {{ HTML::link('store/contact',trans('greeting.contact') , array('class' => 'tt_uppercase tr_delay color_light_2')) }}
                </li>

        </ul>
    </nav>
</div>



</div>
</div>
</header>

@yield('main-area')
@yield('search-keyboard')

<!--footer-->
<footer role="contentinfo" class="bg_grey_light_2">
    <div class="container m_top_4">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_35 m_xs_bottom_30">
                        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">{{trans('greeting.TheServices')}}</h5>
                        <hr class="divider_bg m_bottom_25">
                        <ul class="second_font vr_list_type_1 with_links">





                            <li class="m_bottom_14"><a href="/store" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.shop')}}</a></li>
                            <li class="m_bottom_14"><a href="/polling" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.pooling')}}</a></li>
                            <li class="m_bottom_14"><a href="/register" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.Branches')}}</a></li>
                          <li class="m_bottom_14"><a href="/employ/garanty" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.garanty')}}</a></li>
                            <li class="m_bottom_14"><a href="/admin/products" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.Products')}}</a></li>
                            <li class="m_bottom_14"><a href="/users/signin" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.login')}}</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_35 m_xs_bottom_30" style="margin-right:45px;">
                        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">{{trans('greeting.inforamtion')}}</h5>
                        <hr class="divider_bg m_bottom_25">
                        <ul class="second_font vr_list_type_1 with_links">
                            <li class="m_bottom_14"><a href="/about" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.about')}}</a></li>
                              <li class="m_bottom_14"><a href="/store/contact" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.contact')}}</a></li>
                            <li class="m_bottom_14"><a href="/" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.HOME')}}</a></li>


                            <li class="m_bottom_14"><a href="/agent" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.agentnewregister')}}</a></li>
                            <li class="m_bottom_14"><a href="/employ/index" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.employrequest')}}</a></li>
                            <li class="m_bottom_14"><a href="/employ/installer" class="sc_hover d_inline_b"><i class="fa fa-caret-right"></i>{{trans('greeting.installer')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6" style="margin-right:45px;">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_35 m_xs_bottom_30" >
                        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">{{trans('greeting.ContactUs')}}</h5>
                        <hr class="divider_bg m_bottom_25">
                        <p class="second_font m_bottom_15">{{trans('greeting.address')}}</p>
                        <ul class="sesond_font vr_list_type_2 m_bottom_20" style="font-size: 16px;">
                            <li ><i class="fa fa-phone color_dark fs_large"></i>{{trans('greeting.telephone')}}: {{trans('greeting.tell')}}</li>
                            <li class="w_break" data-icon=""><i class="fa fa-envelope color_dark"></i><a href="mailto:#" class="sc_hover d_inline_b">info@doormanco.com</a></li>
                        </ul>
                        <ul class="hr_list">
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-facebook fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Facebook</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-twitter fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Twitter</span></a>
                            </li>
                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-google-plus fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Google Plus</span></a>
                            </li>


                            <li class="m_right_3 m_bottom_3">
                                <a href="#" class="button_type_6 d_block grey state_2 tr_delay color_dark t_align_c vc_child tooltip_container relative"><i class="fa fa-youtube-play fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Youtube</span></a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_35 m_xs_bottom_30" style="margin-right:45px;">
                      <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">{{trans('greeting.NewsletterSignUp01')}}</h5>
                        <hr class="divider_bg m_bottom_25">
                        <p class="second_font m_bottom_15" style="font-family: tahoma, serif">{{trans('greeting.NewsletterSignUp02')}}</p>
                        <form class="newsletter">
                            <input type="email" placeholder="{{trans('greeting.Enteryour')}}" name="newsletter-email" class="textme tr_all fw_light w_full fs_medium m_bottom_10">
                            <br>
                            <button class="sesond_font w_full tt_uppercase fs_medium button_type_2 black state_2 d_block tr_all" style="text-align: center">{{trans('greeting.Subscribe')}}</button>
                        </form>
                        {{--<form class="newsletter">--}}
                        										{{--<input type="email" placeholder="Enter your email address" name="newsletter-email" class="tr_all fw_light w_full fs_medium m_bottom_10">--}}
                        										{{--<button class="second_font w_full tt_uppercase fs_medium button_type_2 black state_2 d_block tr_all">Subscribe</button>--}}
                        									{{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider_black m_bottom_13">
        <div class="d_table w_full d_xs_block t_xs_align_c">
            <div class="col-lg-6 col-md-6 col-sm-6 color_light fw_light f_none d_table_cell v_align_m d_xs_block m_xs_bottom_10"  >
                {{trans('greeting.hoghogh')}} <a href="index-2.html" class="sc_hover">Doorman</a>{{trans('greeting.copyright')}}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c f_none d_table_cell v_align_m d_xs_block">
                <ul class="hr_list d_inline_b">
                  <!--  <li class="m_right_5"><img src="images/payment_1.jpg" alt=""></li>
                    <li class="m_right_5"><img src="images/payment_2.jpg" alt=""></li>
                    <li class="m_right_5"><img src="images/payment_3.jpg" alt=""></li>
                    <li class="m_right_5"><img src="images/payment_4.jpg" alt=""></li>
                    <li class="m_right_5"><img src="images/payment_5.jpg" alt=""></li>-->
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>


	<button class="back_to_top animated button_type_6 grey state_2 d_block black_hover f_left vc_child tr_all"><i class="fa fa-angle-up d_inline_m"></i></button>


<button data-popup="#quick_viewme" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp"></button>


@if(isset($current_page))
@if($current_page == 'contact') {
    <div class="init_popup" id="quick_viewme">
        <div class="popup init">
            <div class="clearfix">

                <div class="product_description f_left f_xs_none">
                    <h3 class="matntitle"><a href="#" class="sc_hover">{{ trans('greeting.safese03') }}</a></h3>

                    <hr class="divider_light m_bottom_15">
                    <p class="fw_light m_bottom_14 color_grey">{{trans('greeting.priceme03')}}</p>
                </div>
            </div>

            <button class="close_popup fw_light fs_large tr_all" style="top: 13px; right: 12px;">x</button>

        </div>
    </div>
@endif
@endif
<div class="init_popup" id="add_to_cart_popup">
			<div class="popup init">
				<div class="clearfix m_bottom_15">
					<a href="#" class="f_left d_block m_right_20">
						<img src="images/bestsellers_img_1.jpg" alt="">
					</a>
					<p class="second_font fs_large color_dark">1 x Eget elementum vel<br> was added to your cart</p>
				</div>
				<div class="clearfix">
					<a href="#" class="button_type_2 d_block f_left t_align_c grey state_2 tr_all second_font fs_medium tt_uppercase m_top_15">Continue Shopping</a>
					<a href="pages_shopping_cart.html" class="button_type_2 d_block f_right t_align_c grey state_2 tr_all second_font fs_medium tt_uppercase m_top_15">Show Cart</a>
				</div>
				<button class="close_popup fw_light fs_large tr_all">x</button>
			</div>
		</div>

























{{ HTML::script('/js/jquery-2.1.1.min.js') }}
{{ HTML::script('/js/modernizr.js') }}
{{ HTML::script('/plugins/selectize/js/standalone/selectize.min.js') }}



{{ HTML::script('/plugins/royalslider/jquery.royalslider.min.js') }}
{{ HTML::script('/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}

{{ HTML::script('/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js') }}
{{ HTML::script('/plugins/royalslider/jquery.easing-1.3.js') }}



{{ HTML::script('/plugins/isotope.pkgd.min.js') }}

{{ HTML::script('/plugins/layerslider/js/greensock.js') }}
{{ HTML::script('/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js') }}
{{ HTML::script('/plugins/layerslider/js/layerslider.transitions.js') }}
{{ HTML::script('/plugins/jquery.appear.js') }}
{{ HTML::script('/plugins/jquery.elevateZoom-3.0.8.min.js') }}


{{ HTML::script('/plugins/fancybox/jquery.fancybox.pack.js') }}
{{ HTML::script('/plugins/jquery.easytabs.min.js') }}
{{ HTML::script('/plugins/owl-carousel/owl.carousel.min.js') }}

{{ HTML::script('/plugins/flickr.js') }}
{{ HTML::script('/plugins/twitter/jquery.tweet.min.js') }}
{{ HTML::script('/plugins/afterresize.min.js') }}
{{ HTML::script('/plugins/colorpicker/colorpicker.js') }}
{{ HTML::script('/plugins/jackbox/js/jackbox-packed.min.js') }}
{{--{{ HTML::script('http://s7.addthis.com/js/300/addthis_widget.js#pubid="') }}--}}

{{ HTML::script('/js/retina.min.js') }}


{{ HTML::script('/js/themeCore.js') }}
{{ HTML::script('/js/theme.js') }}





{{ HTML::script('/js/main.js') }}

</body>
</html>