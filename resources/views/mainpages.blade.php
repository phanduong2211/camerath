<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/option6.css" />

</head>
<body>

    <!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container" >
            <div class="currency ">
                <div class="dropdown">
                      <a style="display:none" class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Dollar</a></li>
                        <li><a href="#">Euro</a></li>
                      </ul>
                </div>
            </div>
            <div class="language ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                      <img alt="email" src="public/assets/images/fr.jpg" />Language
                      
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="public/assets/images/en.jpg" />English</a></li>
                        <li><a href="#"><img alt="email" src="public/assets/images/fr.jpg" />VI</a></li>
                    </ul>
                </div>
            </div>
            <div class="top-bar-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            <div class="support-link">
                <a href="#">Abount Us</a>
                <a href="#">Support</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->    
        <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo">
                <a href="index-2.html"><img alt="Kute Shop" src="public/assets/data/option6/logo.png" /></a>
            </div>
            <div class="col-xs-7 col-sm-8 col-md-7 header-search-box">
                <form class="form-inline">
                      <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">Tất Cả</option>
                            <option value="1">Camera</option>
                            <option value="2">Đầu Ghi</option>
                            <option value="3">Phụ Kiện</option>
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text"  placeholder="Tìm Kiếm... ">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
                <div class="keyword" style="display:none">
                    <p class="lebal">Keywords:</p>
                    <p>
                        <a href="#">T-shirt, </a>
                        <a href="#">Leggings, </a>
                        <a href="#">Cotton, ...</a>
                    </p>
                </div>
            </div>
            <div class="col-xs-5 col-sm-3 col-md-2 group-button-header">
                <a title="So Sánh" href="#" class="btn-compare">So Sánh</a>
                <a title="yêu thích" href="#" class="btn-heart">yêu thích</a>
                <div class="btn-cart" id="cart-block">
                    <a title="Giỏ Hàng" href="cart.html">Giỏ Hàng</a>
                    <span class="notify notify-right">0</span>
                    <!-- <div class="cart-block">
                        <div class="cart-block-content">
                            <h5 class="cart-title">2 Items in my cart</h5>
                            <div class="cart-block-list">
                                <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="public/assets/data/product-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="public/assets/data/product-s5-100x122.jpg" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="toal-cart">
                                <span>Total</span>
                                <span class="toal-price pull-right">122.38 €</span>
                            </div>
                            <div class="cart-buttons">
                                <a href="order.html" class="btn-check-out">Checkout</a>
                            </div>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
        
    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                    <h4 class="title">
                        <span class="btn-open-mobile"><i class="fa fa-bars"></i></span>
                    </h4>
                    <!-- <div class="vertical-menu-content is-home">
                        <ul class="vertical-menu-list">
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/12.png">Electronics</a></li>
                            <li>
                                <a class="parent" href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/13.png">Sports &amp; Outdoors</a>
                                <div class="vertical-dropdown-menu">
                                    <div class="vertical-groups col-sm-12">
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
                                            <ul class="group-link-default">
                                                <li><a href="#">Tennis</a></li>
                                                <li><a href="#">Coats &amp; Jackets</a></li>
                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                <li><a href="#">Tops &amp; Tees</a></li>
                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                <li><a href="#">Intimates</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
                                            <ul class="group-link-default">
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Coats &amp; Jackets</a></li>
                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                <li><a href="#">Tops &amp; Tees</a></li>
                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                <li><a href="#">Intimates</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
                                            <ul class="group-link-default">
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Coats &amp; Jackets</a></li>
                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                <li><a href="#">Tops &amp; Tees</a></li>
                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                <li><a href="#">Intimates</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-custom-html col-sm-12">
                                            <a href="#"><img src="public/assets/data/banner-megamenu.jpg" alt="Banner"></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/14.png">Smartphone &amp; Tablets</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/15.png">Health &amp; Beauty Bags</a></li>
                            <li>
                                <a class="parent" href="#">
                                <img class="icon-menu" alt="Funky roots" src="public/assets/data/16.png">Shoes &amp; Accessories</a>
                                <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-12">
                                                <h4 class="mega-group-header"><span>Special products</span></h4>
                                                <div class="row mega-products">
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="public/assets/data/p10.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="public/assets/data/p11.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="public/assets/data/p12.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="public/assets/data/p13.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/17.png">Toys &amp; Hobbies</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/18.png">Computers &amp; Networking</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/19.png">Laptops &amp; Accessories</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/20.png">Jewelry &amp; Watches</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/21.png">Flashlights &amp; Lamps</a></li>
                            <li>
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="public/assets/data/21.png">
                                    Cameras &amp; Photo
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="public/assets/data/22.png">
                                    Television
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="public/assets/data/12.png">Computers &amp; Networking
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="public/assets/data/14.png">
                                    Toys &amp; Hobbies
                                </a>
                            </li>
                            <li class="cat-link-orther">
                            <a href="#"><img class="icon-menu" alt="Funky roots" src="public/assets/data/17.png">Jewelry &amp; Watches</a></li>
                        </ul>
                        <div class="all-category"><span class="open-cate">All Categories</span></div>
                    </div> -->
                </div>
                </div>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class=""><a href="{{Asset('')}}">Trang Chủ</a></li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Camera</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="public/assets/data/men.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="">Camera Giám Sát</a>
                                                    </li>
                                                    <li class="link_container"><a href="{{Asset('')}}Camera-ban-cau">Camera bán cầu</a></li>
                                                    <li class="link_container"><a href="{{Asset('')}}Camera-khong-day">Camera không dây</a></li>
                                                    <li class="link_container"><a href="{{Asset('')}}Camera-hong-ngoai">Camera hồng ngoại</a></li>
                                                    <li class="link_container"><a href="{{Asset('')}}Camera-zoom-sieu-net">Camera zoom siêu nét</a></li>
                                                    <li class="link_container"><a href="{{Asset('')}}Camera-IP">Camera IP</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="public/assets/data/women.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="">Camera Trọn Bộ</a>
                                                    </li>
                                                    <li class="link_container"><a href="{{Asset('')}}Tron-bo-camera-IP">Trọn bộ camera IP</a></li>
                                                    <li class="link_container"><a href="{{Asset('')}}Tron-bo-camera-HD">Trọn bộ camera HD</a></li>
                                                     <li class="link_container"><a href="{{Asset('')}}Tron-bo-camera-gia-re">Trọn bộ camera giá rẻ</a></li>                                                       
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="public/assets/data/kid.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="">Camera Hành Trình</a>
                                                    </li>
                                                    <li class="link_container"><a href="{{Asset('')}}Car-Cam">Car Cam</a></li>
                                                    <li class="link_container"><a href="{{Asset('')}}Camera-hanh-trinh-GPS">Camera hành trình GPS</a></li>
                                                    <li class="link_container"><a href="{{Asset('')}}Camera-hanh-trinh-wifi">Camera hành trình wifi</a></li>
                                                   
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="public/assets/data/trending.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="">Các Hãng Camera</a>
                                                    </li>
                                                    @for($i=0;$i< count($dbnhacungcap);$i++)
                                                    <li class="link_container"><a href="{{$detailp->unicode_str_filter($dbnhacungcap[$i]->tennhacungcap)}}">{{$dbnhacungcap[$i]->tennhacungcap}}</a></li>
                                                    @endfor
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li style="display:none"><a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Thể Thao</a></li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Phụ Kiện</a>
                                            <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">

                                                <ul class="block">
                                                    @for($i=0;$i< count($dbdanhmucphukien);$i++)
                                                    <li class="link_container"><a href="{{$detailp->unicode_str_filter($dbdanhmucphukien[$i]->tendanhmuc)}}">{{$dbdanhmucphukien[$i]->tendanhmuc}}</a></li>
                                                    @endfor
                                                </ul>
                                            </li>
                                           
                                            

                                        </ul>
                                    </li>
                                    <li class="dropdown">

                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Đầu Ghi Hình<span style="display:none" class="notify notify-right">new</span></a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    @for($i=0;$i< count($dbdanhmucdaughi);$i++)
                                                    <li class="link_container"><a href="{{$detailp->unicode_str_filter($dbdanhmucdaughi[$i]->tendanhmuc)}}">{{$dbdanhmucdaughi[$i]->tendanhmuc}}</a></li>
                                                    @endfor
                                                </ul>
                                            </li>
                                        </ul> 
                                    </li>
                                    <li style="display:none"><a href="category.html">Furniture</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="#">Mobile</a></li>
                                                    <li class="link_container"><a href="#">Tablets</a></li>
                                                    <li class="link_container"><a href="#">Laptop</a></li>
                                                    <li class="link_container"><a href="#">Memory Cards</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul> 
                                    </li>
                                    <li><a href="giai-phap.html">Giải Pháp</a></li>
                                    <li><a href="blog.html">Tin Tức</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li style="display:none"><a class="link-buytheme" href="#"><i class="fa fa-angle-double-right"></i> Buy This Template</a></li>
                                  </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
    <section>
    	@yield('index')
    	@yield('cdetailpages')
    	@yield('ddetailpages')
    	@yield('pdetailpages')
        @yield('c_catogary')
        @yield('d_catogary')
        @yield('p_catogary')
        @yield('blog')
        @yield('blog-detail')
        @yield('provider')
        @yield('lap-dat')
        @yield('service')
        @yield('giaiphap')
        @yield('giaphap-detail')
    </section>
<!-- Footer -->
<footer id="footer" style="background: rgba(58, 103, 9, 0.32);">
     <div class="container" >
            <!-- introduce-box -->
            <div id="introduce-box" class="row">
                <div class="col-md-4">
                    <div id="address-box">
                        <a href="#"><img src="public/assets/data/option6/logo-footer.png" alt="logo" /></a>
                        <div id="address-list">
                            <div class="tit-name">Địa Chỉ:</div>
                            <div class="tit-contain">17 QL51, Long Bình Tân, tp. Biên Hòa, Đồng Nai.</div>
                            <div class="tit-name">DĐ:</div>
                            <div class="tit-contain">+84 128 337 6725</div>
                            <div class="tit-name">Email:</div>
                            <div class="tit-contain">duong.phanvan2211@gmail.com</div>
                            <div class="tit-name">Skepy:</div>
                            <div class="tit-contain">phanduong221193</div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-4" style="padding-left:80px">  
                    <div class="row">
                        <!-- <div class="col-sm-4" style="display:none">
                            <div class="introduce-title" >Company</div>
                            <ul id="introduce-company"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4" style="display:none">
                            <div class="introduce-title">My Account</div>
                            <ul id = "introduce-Account" class="introduce-list">
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">yêu thích</a></li>
                                <li><a href="#">My Credit Slip</a></li>
                                <li><a href="#">My Addresses</a></li>
                                <li><a href="#">My Personal In</a></li>
                            </ul>
                        </div> -->
                        <div class="col-sm-12 ">
                            <div class="introduce-title">Hỗ Trở</div>
                            <ul id = "introduce-support"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                
                                <li><a href="#">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="contact-box">
                        <div class="introduce-title">Đăng Ký Nhận Tin</div>
                        <div class="input-group" id="mail-box">
                          <input type="text" placeholder="Your Email Address"/>
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                          </span>
                        </div><!-- /input-group -->
                        <div class="introduce-title">Liên Kết</div>
                        <div class="social-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /#introduce-box -->
        
            <!-- #trademark-box -->
            <div id="trademark-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-list">
                        <li id="payment-methods">Chấp nhận các hình thức thanh toán: </li>
                        <li>
                            <a href="#"><img src="public/assets/data/visa.png"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/assets/data/vietcombank.png"  alt="ups"/></a>
                        </li>
                   <!--      <li>
                            <a href="#"><img src="public/assets/data/trademark-qiwi.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/assets/data/trademark-wu.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/assets/data/trademark-cn.jpg"  alt="ups"/></a>
                        </li> -->
                        <li>
                            <a href="#"><img src="public/assets/data/acb.png"  alt="ups"/></a>
                        </li>
                        <!-- <li>
                            <a href="#"><img src="public/assets/data/trademark-mc.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/assets/data/trademark-ems.jpg"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/assets/data/trademark-dhl.jpg"  alt="ups"/></a>
                        </li> -->
                        <li>
                            <a href="#"><img src="public/assets/data/paypal.png"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="public/assets/data/baokim.jpg"  alt="ups"/></a>
                        </li>
                       <!--  <li>
                            <a href="#"><img src="public/assets/data/trademark-wm.jpg"  alt="ups"/></a>
                        </li> -->
                    </ul> 
                </div>
            </div> <!-- /#trademark-box -->
            
          
            <div id="footer-menu-box">
               <!--  <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Company Info - Partnerships</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Online Shopping</a></li>
                        <li><a href="#" >Promotions</a></li>
                        <li><a href="#" >My Orders</a></li>
                        <li><a href="#" >Help</a></li>
                        <li><a href="#" >Site Map</a></li>
                        <li><a href="#" >Customer Service</a></li>
                        <li><a href="#" >Support</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Most Populars</a></li>
                        <li><a href="#" >Best Sellers</a></li>
                        <li><a href="#" >New Arrivals</a></li>
                        <li><a href="#" >Special Products</a></li>
                        <li><a href="#" >Manufacturers</a></li>
                        <li><a href="#" >Our Stores</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Warantee</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Checkout</a></li>
                        <li><a href="#" >Discount</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Terms & Conditions</a></li>
                        <li><a href="#" >Policy</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Returns</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Warrantee</a></li>
                        <li><a href="#" >FAQ</a></li>
                        <li><a href="#" >Contact</a></li>
                    </ul>
                </div> -->
                <p class="text-center">Copyrights &#169; 2015 CameraTH.com. All Rights Reserved.</p>
            </div><!-- /#footer-menu-box -->
        </div> 
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="public/assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="public/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="public/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="public/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<!--<script type="text/javascript" src="assets/lib/jquery.countdown/jquery.countdown.min.js"></script>-->
<!-- COUNTDOWN -->
<script type="text/javascript" src="public/assets/lib/countdown/jquery.plugin.js"></script>
<script type="text/javascript" src="public/assets/lib/countdown/jquery.countdown.js"></script>
<!-- ./COUNTDOWN -->
<script type="text/javascript" src="public/assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="public/assets/js/theme-script.js"></script>
<script type="text/javascript" src="public/assets/js/menu.js"></script>

</body>
</html>