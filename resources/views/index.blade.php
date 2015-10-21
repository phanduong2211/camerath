<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:26:30 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>CameraTechShop</title>
    <style type="text/css">
        #navbar>ul>li:nth-child(1)
        {
            background: #ff3366;
            color: #fff;
        }
    </style>
</head>
<body class="option6">
@extends('mainpages')
@section('index')

<!-- Home slideder-->
<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-8" style="padding-right: 0px;">
                <div class="homeslider">
                    <ul id="contenhomeslider-customPage">
                      <li><img alt="Funky roots" src="public/assets/data/option6/slide1.png" title="Funky roots" /></li>
                      <li><img alt="Funky roots" src="public/assets/data/option6/side2.png" title="Funky roots" /></li>
                      <li><img  alt="Funky roots" src="public/assets/data/option6/sile3.png" title="Funky roots" /></li>
                    </ul>
                    <div class="bx-control">
                        <div class="slide-prev">
                            <span id="bx-prev"></span>
                        </div>
                        <div id="bx-pager" class="slide-pager">
                              <a data-slide-index="0" href="#">1</a>
                              <a data-slide-index="1" href="#">2</a>
                              <a data-slide-index="2" href="#">3</a>
                        </div>
                        <div class="slide-next">
                            <span id="bx-next"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 group-banner-slider" style="padding-left: 2px;">
                <div class="item banner-opacity">
                    <a href="#"><img src="public/assets/data/option6/banner9.jpg" alt="Banner"></a>
                </div>
                <div class="item banner-opacity">
                    <a href="#"><img src="public/assets/data/option6/banner10.jpg" alt="Banner"></a>
                </div>
                <div class="banner-opacity">
                    <a href="#"><img src="public/assets/data/option6/banner11.jpg" alt="Banner"></a>
                </div>
            </div>
            <div class="col-sm-2 group-banner-slider" style="padding-left: 2px; margin-left:-15px; padding-right: 0;">
                <div class=" item policy">
                    <h5 class="title">policy</h5>
                    <ul>
                        <li><a href="#">
                        <img class="icon1" src="public/assets/data/option6/safe1.png" alt="Icon">
                        <img class="icon2" src="public/assets/data/option6/safe2.png" alt="Icon">
                        Safe Payment
                        </a></li>
                        <li><a href="#">
                        <img class="icon1" src="public/assets/data/option6/icon2.png" alt="Icon">
                        <img class="icon2" src="public/assets/data/option6/icon2-1.png" alt="Icon">
                        Worldwide Delivery</a></li>
                        <li><a href="#">
                        <img class="icon1" src="public/assets/data/option6/icon3.png" alt="Icon">
                        <img class="icon2" src="public/assets/data/option6/icon3-1.png" alt="Icon">
                        Change Pay</a></li>
                        <li><a href="#">
                        <img class="icon1" src="public/assets/data/option6/icon4.png" alt="Icon">
                        <img class="icon2" src="public/assets/data/option6/icon4-1.png" alt="Icon">
                        Customer Service</a></li>
                        <li><a href="#">
                        <img class="icon1" src="public/assets/data/option6/icon5.png" alt="Icon">
                        <img class="icon2" src="public/assets/data/option6/icon5-1.png" alt="Icon">
                        Sales Of Prestige</a></li>
                    </ul>
                </div>
                <div class="item banner-opacity">
                    <a href="#"><img src="public/assets/data/option6/banner12.jpg" alt="Banner"></a>
                </div>
                <div class="banner-opacity">
                    <a href="#"><img src="public/assets/data/option6/banner13.jpg" alt="Banner"></a>
                </div>
            </div>
            <div class="col-sm-12 header-top-right">
                <div class="group-banner-slide">
                    <div class="col-left">
                        
                    </div>
                    <div class="col-right">
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Home slideder-->
<div class="page-top">
    <div class="container">
        <!-- block-popular-cat -->
        <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/assets/data/icon-fashion.png">Dịch Vụ</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li style="display:none"><a data-toggle="tab" href="#tab-5">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-1" class="floor-elevator" style="display:none">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
        <div class="row">
            @for($i=0;$i< count($dbservice);$i++)

            <div class="col-sm-3">
                <div class="block-popular-cat">
                    <div class="parent-categories">{{$dbservice[$i]->name}}</div>
                    <div class="block-popular-inner">
                        <div class="image banner-boder-zoom2">
                            <a href="{{$detailp->unicode_str_filter($dbservice[$i]->name)}}-dv{{$dbservice[$i]->id}}.html"><img src="public/assets/data/option6/{{$dbservice[$i]->hinhanh}}" alt="popular"></a>
                        </div>
                        <div class="sub-categories">
                            <ul style="display:none">
                                <li><a href="#">Eye Shadow</a></li>
                                <li><a href="#">Eyes Care</a></li>
                                <li><a href="#">Lipstick</a></li>
                                <li><a href="#">Face Color</a></li>
                                <li><a href="#">Nails</a></li>
                            </ul>
                            <a href="{{$detailp->unicode_str_filter($dbservice[$i]->name)}}-dv{{$dbservice[$i]->id}}.html" class="more">More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <!-- ./block-popular-cat -->
        <!-- Baner bottom -->
        <div class="row banner-bottom">
            <div class="col-sm-6 item-left">
                <div class="banner-boder-zoom2">
                    <a href="#"><img alt="ads" class="img-responsive" src="public/assets/data/option6/banner1.jpg" /></a>
                </div>
            </div>
            <div class="col-sm-6 item-right">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="public/assets/data/option6/banner2.jpg" /></a>
                </div>
            </div>
        </div>
        <!-- end banner bottom -->
    </div>
</div>
<!---->
<div class="content-page" style="background:white">
    <div class="container">
        <!-- featured category camera -->
        <div class="category-featured fashion">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/assets/data/icon-fashion.png" />Camera</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    @for($i=0;$i< count($dbnhacungcap);$i++)
                           <li class="tab-{{$i}}" id="{{$dbnhacungcap[$i]->id_nhacungcap}}"><a data-toggle="tab" href="#tab-{{$i}}">{{$dbnhacungcap[$i]->tennhacungcap}}</a></li>                       
                     @endfor
                    
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-3 sub-category-wapper">
                        <ul class="sub-category-list">
                        @for($i=0;$i< count($dbdanhmuc);$i++)
                            <li><a href="{{$detailp->unicode_str_filter($dbdanhmuc[$i]->tendanhmuc)}}">{{$dbdanhmuc[$i]->tendanhmuc}}</a></li>                            
                        @endfor
                        </ul>
                    </div>
                    <div class="col-sm-9 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                @for($i=0;$i< count($dbnhacungcap);$i++)                           
                                <div class="tab-panel" id="tab-{{$i}}">
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="public/assets/data/option6/{{$dbnhacungcap[$i]->hinhanh}}" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                       <?php $limit=1; ?>
                                        @for($sp=0;$sp< count($dbsanpham);$sp++)
                                            @if($dbnhacungcap[$i]->id_nhacungcap==$dbsanpham[$sp]->id_nhacungcap)
                                                @if($limit>6)
                                                    <?php break; ?>
                                                    @else
                                                        <?php $limit++; ?>
                                                @endif
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="{{$detailp->unicode_str_filter($dbsanpham[$sp]->tensanpham)}}-c{{$dbsanpham[$sp]->id_sanpham}}.html">{{ucfirst($dbsanpham[$sp]->tensanpham)}}</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">{{number_format($dbsanpham[$sp]->gia)}} VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/assets/data/{{$dbsanpham[$sp]->hinhanh}}" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif()
                                            @endfor
                                       </ul>
                                   </div>
                                </div>
                                 @endfor
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category camera -->
        <!-- featured category daughi -->
      <div class="category-featured sports">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/assets/data/icon-sports.png" />Đầu Ghi</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                     @for($i=0;$i< count($dbnhacungcap);$i++)
                           <li class="tab-{{$i}}" id="{{$dbnhacungcap[$i]->id_nhacungcap}}"><a data-toggle="tab" href="#tab-{{$i+count($dbnhacungcap)}}">{{$dbnhacungcap[$i]->tennhacungcap}}</a></li>                       
                     @endfor
                 <!--    <li class="active"><a data-toggle="tab" href="#tab-6">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-7">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-6">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-7">Most Reviews</a></li> -->
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-2" class="floor-elevator">
                    <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-3 sub-category-wapper">
                        <div class="owl-carousel-vertical" data-items="1" data-nav="true" data-dots="false" data-loop="true">
                            <div class="item">
                                <ul class="sub-category-list">
                                    @for($i=0;$i< count($dbdanhmucdaughi);$i++)
                                        <li><a href="{{$detailp->unicode_str_filter($dbdanhmucdaughi[$i]->tendanhmuc)}}">{{$dbdanhmucdaughi[$i]->tendanhmuc}}</a></li>                            
                                    @endfor
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="sub-category-list">
                                    <li><a href="#" >Shoes</a></li>
                                    <li><a href="#" >Casual Shoes</a></li>
                                    <li><a href="#" >Sports Shoes</a></li>
                                    <li><a href="#" >Adidas Shoes</a></li>
                                    <li><a href="#" >Gas Shoes</a></li>
                                    <li><a href="#" >Puma Shoes</a></li>
                                    <li><a href="#" >Reebok Shoes</a></li>
                                    <li><a href="#" >Woodland Shoes</a></li>
                                    <li><a href="#" >Red tape Shoes</a></li>
                                    <li><a href="#" >Nike Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                @for($i=0;$i< count($dbnhacungcap);$i++)
                                    @if($i==0)                          
                                        <div class="tab-panel tab-0" id="tab-{{$i+count($dbnhacungcap)}}">
                                        @else
                                        <div class="tab-panel" id="tab-{{$i+count($dbnhacungcap)}}">
                                    @endif
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="public/assets/data/option6/{{$dbnhacungcap[$i]->hinhanh}}" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">

                                       <?php $limit=1; ?>
                                        @for($sp=0;$sp< count($dbdaughi_sanpham);$sp++)
                                            @if($dbnhacungcap[$i]->id_nhacungcap==$dbdaughi_sanpham[$sp]->id_nhacungcap)
                                                @if($limit>6)
                                                    <?php break; ?>
                                                    @else
                                                        <?php $limit++; ?>
                                                @endif
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="{{$detailp->unicode_str_filter($dbdaughi_sanpham[$sp]->tendaughi)}}-d{{$dbdaughi_sanpham[$sp]->id_daughisanpham}}.html">{{ucfirst($dbdaughi_sanpham[$sp]->tendaughi)}}</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">{{number_format($dbdaughi_sanpham[$sp]->gia)}} VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/assets/data/{{$dbdaughi_sanpham[$sp]->hinhanh}}" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif()
                                        @endfor
                                       </ul>
                                   </div>
                                </div>
                                 @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category daughi -->        
        <!-- featured category electronic -->
        <div class="category-featured electronic">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/assets/data/icon-electronic.png" />Phụ Kiện</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    @for($i=0;$i< count($dbdanhmucphukien);$i++)
                           <li class="tab-{{$i}}" id=""><a data-toggle="tab" href="#tab-{{$i+(2*count($dbnhacungcap))}}">{{$dbdanhmucphukien[$i]->tendanhmuc}}</a></li>                       
                     @endfor
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-3" class="floor-elevator">
                    <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    
                    <div class="col-sm-10 col-right-tab col-sm-offset-1">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                @for($i=0;$i< count($dbdanhmucphukien);$i++)  
                                    @if($i==0)                          
                                        <div class="tab-panel tab-0" id="tab-{{$i+(2*count($dbnhacungcap))}}">
                                        @else
                                        <div class="tab-panel" id="tab-{{$i+(2*count($dbnhacungcap))}}">
                                    @endif                         
                                
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="public/assets/data/option6/{{$dbdanhmucphukien[$i]->hinhanh}}" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                       <?php $limit=1; ?>
                                        @for($sp=0;$sp< count($dbphukien_sanpham);$sp++)
                                            @if($dbdanhmucphukien[$i]->id_danhmucphukien==$dbphukien_sanpham[$sp]->id_danhmucphukien)
                                                @if($limit>6)
                                                    <?php break; ?>
                                                    @else
                                                        <?php $limit++; ?>
                                                @endif
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="{{$detailp->unicode_str_filter($dbphukien_sanpham[$sp]->tenphukien)}}-p{{$dbphukien_sanpham[$sp]->id_phukiensanpham}}.html">{{ucfirst($dbphukien_sanpham[$sp]->tenphukien)}}</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">{{number_format($dbphukien_sanpham[$sp]->gia)}} VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="public/assets/data/{{$dbphukien_sanpham[$sp]->hinhanh}}" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif()
                                            @endfor
                                       </ul>
                                   </div>
                                </div>
                                 @endfor
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category electronic-->
        <!-- featured category Digital -->
        <div class="category-featured digital" style="display:none">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="public/assets/data/icon-digital.png" />DIGITAL</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-10">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-10">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-4" class="floor-elevator">
                    <a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Tablet selfie</a></li>
                            <li><a href="#">Laptop Batteries</a></li>
                            <li><a href="#">OTG flash drives</a></li>
                            <li><a href="#">Mouse</a></li>
                            <li><a href="#">Keyboard</a></li>
                            <li><a href="#">SSD</a></li>
                            <li><a href="#">Tenda router</a></li>
                            <li><a href="#">3D printer</a></li>
                            <li><a href="#">Laser Pens</a></li>
                            <li><a href="#">Printer Supplies</a></li>
                            <li><a href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-10">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="public/assets/data/option6/banner6.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Ipad</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/option6/p5.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Sonic Camera</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/option6/p70.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Blue Nano Projector</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/option6/p71.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Smartphone Battery</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/option6/p10.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/option6/p6.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">SamSing Gallaxy S5</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/option6/p11.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-11">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="public/assets/data/option6/banner6.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <!-- <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/p73.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/p72.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/p71.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/p70.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/p69.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="public/assets/data/p68.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category Digital-->

    </div>
</div>

<div id="content-wrap">
    <div class="container">
        <div class="band-logo owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "1.2" data-autoplay="true" data-responsive='{"0":{"items":3},"600":{"items":5},"1000":{"items":8}}'>
            <a href="#"><img src="public/assets/data/option6/band-logo1.png" alt="Band logo"></a>
            <a href="#"><img src="public/assets/data/option6/band-logo2.png" alt="Band logo"></a>
            <a href="#"><img src="public/assets/data/option6/band-logo3.png" alt="Band logo"></a>
            <a href="#"><img src="public/assets/data/option6/band-logo4.png" alt="Band logo"></a>
            <a href="#"><img src="public/assets/data/option6/band-logo5.png" alt="Band logo"></a>
            <a href="#"><img src="public/assets/data/option6/band-logo6.png" alt="Band logo"></a>
            <a href="#"><img src="public/assets/data/option6/band-logo7.png" alt="Band logo"></a>
            <a href="#"><img src="public/assets/data/option6/band-logo8.png" alt="Band logo"></a>
        </div>
        <!-- blog list -->
        <div class="blog-list">
            <h2 class="page-heading">
                <span class="page-heading-title">Tin Tức</span>
            </h2>
            <div class="blog-list-wapper">
                <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                    @for($i=0;$i< count($blog);$i++)
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img height="157px" src="public/assets/data/{{$blog[$i]->img}}" alt="Blog"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="{{$detailp->unicode_str_filter($blog[$i]->name)}}-b{{$blog[$i]->id}}.html">{{$blog[$i]->name}}</a>
                            </h5>
                            <div class="post-meta">
                                <span class="date">{{$blog[$i]->datepost}}</span>
                                
                            </div>
                            <div class="readmore">
                                <a href="{{$detailp->unicode_str_filter($blog[$i]->name)}}-b{{$blog[$i]->id}}.html">Readmore</a>
                            </div>
                        </div>
                    
                    </li>
                    @endfor
                </ul>
            </div>
        </div>
        <!-- ./blog list -->
       
    </div> <!-- /.container -->
</div>

@endsection
</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:28:15 GMT -->
</html>