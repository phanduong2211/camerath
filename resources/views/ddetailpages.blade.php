<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/detail3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:30:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--     <link rel="stylesheet" type="text/css" href="public/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/select2/css/select2.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="public/assets/lib/jquery.bxslider/jquery.bxslider.css" />
<!--     <link rel="stylesheet" type="text/css" href="public/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/jquery-ui/jquery-ui.css" /> -->
    <link rel="stylesheet" type="text/css" href="public/assets/lib/fancyBox/jquery.fancybox.css" />
<!--     <link rel="stylesheet" type="text/css" href="public/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive.css" /> -->
    <title>{{$detail[0]->tendaughi}}</title>
    <style type="text/css">
        #navbar>ul>li:nth-child(5)
        {
            background: #ff3366;
            color: #fff;
        }
    </style>
</head>
<body class="product-page right-sidebar">
@extends('mainpages')
@section('pdetailpages')
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Trang Chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="" title="Return to Home">Đầu ghi</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="" title="Return to Home"><?php foreach ($danhmuc as $vars) {
                                        if($vars->id_danhmuc==$detail[0]->id_danhmuc)
                                            echo $vars->tendanhmuc;
                                    } ?></a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="" title="Return to Home">{{$detail[0]->tendaughi}}</a>
            
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block best sellers -->
                <div class="block left-module">
                    <p class="title_block">Sản Phẩm Mới</p>
                    <div class="block_content">
                        <ul class="products-block best-sell">
                        @for($i=0;$i< count($splienquan);$i++)
                            @if($i==5)
                                <?php break; ?>
                            @endif    
                                <li>
                                    <div class="products-block-left">
                                        <a href="#">
                                            <img src="public/assets/data/{{$splienquan[$i]->hinhanh}}" alt="SPECIAL PRODUCTS">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="{{$detailp->unicode_str_filter($splienquan[$i]->tendaughi)}}-d{{$splienquan[$i]->id_daughisanpham}}.html">{{$splienquan[$i]->tendaughi}}</a>
                                        </p>
                                        <p class="product-price">{{number_format($splienquan[$i]->gia)}} VNĐ</p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>
                                </li>
                            
                        @endfor
                            </ul>
                    </div>
                </div>
                <!-- ./block best sellers  -->
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">Danh Mục</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                @for($i=0;$i< count($danhmuc);$i++)
                                   <!--  <li class="active">
                                        <span></span><a href="#">Tops</a>
                                        <ul>
                                            <li><span></span><a href="#">T-shirts</a></li>
                                            <li><span></span><a href="#">Dresses</a></li>
                                            <li><span></span><a href="#">Casual</a></li>
                                            <li><span></span><a href="#">Evening</a></li>
                                            <li><span></span><a href="#">Summer</a></li>
                                            <li><span></span><a href="#">Bags & Shoes</a></li>
                                            <li><span></span><a href="#"><span></span>Blouses</a></li>
                                        </ul>
                                    </li>
                                    <li><span></span><a href="#">T-shirts</a></li>
                                    <li><span></span><a href="#">Dresses</a></li>
                                    <li><span></span><a href="#">Jackets and coats </a></li>
                                    <li><span></span><a href="#">Knitted</a></li>
                                    <li><span></span><a href="#">Pants</a></li>
                                    <li><span></span><a href="#">Bags & Shoes</a></li> -->
                                    <li><span></span><a href="{{$detailp->unicode_str_filter($danhmuc[$i]->tendanhmuc)}}">{{$danhmuc[$i]->tendanhmuc}}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block category  -->
                
                
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        <li><a href="#"><img src="public/assets/data/slide-left.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="public/assets/data/slide-left2.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="public/assets/data/slide-left3.png" alt="slide-left"></a></li>
                    </ul>
                </div>
                <!--./left silde-->
                <!-- block best sellers -->
               <!--  <div class="block left-module">
                    <p class="title_block">Giảm giá</p>
                    <div class="block_content product-onsale">
                        <ul class="product-list owl-carousel" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        @for($j=0;$j< 1;$j++)
                            <li>
                           <div class="product-container">
                                    <div class="left-block">
                                        <a href="#">
                                            <img class="img-responsive" alt="product" src="public/assets/data/{{$detail[$j]->hinhanh}}" />
                                        </a>
                                        <div class="price-percent-reduction2">-30% OFF</div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">dfa</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">adf</span>
                                            <span class="price old-price">asdf</span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Thêm vào giỏ" href="#add">Thêm vào giỏ</a>
                                    </div>
                                </div>
                                </li>
                        @endfor
                        </ul>
                    </div>
                </div> -->
                <!-- ./block best sellers  -->
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <div class="banner-opacity">
                        <a href="#"><img src="public/assets/data/ads-banner.jpg" alt="ads-banner"></a>
                    </div>
                </div>
                <!--./left silde-->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src='public/assets/data/{{$detail[0]->hinhanh}}' data-zoom-image="public/assets/data/{{$detail[0]->hinhanh}}"/>
                                    </div>
                                   <!--  <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="true">
                                        @if(count(explode(";",$detail[0]->hinhanh))>0)
                                            @for($i=0;$i< count(explode(";",$detail[0]->hinhanh));$i++)
                                            <li>
                                                <a href="#" data-image="public/assets/data/product-s3-420x512.jpg" data-zoom-image="public/assets/data/{{explode(";",$detail[0]->hinhanh)[$i]}}">
                                                    <img id="product-zoom"  src="public/assets/data/{{explode(";",$detail[0]->hinhanh)[$i]}}" /> 
                                                </a>
                                            </li>
                                            @endfor
                                        @endif
                                        </ul>
                                    </div> -->
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name">{{$detail[0]->tendaughi}}</h1>
                                <!-- <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="comments-advices">
                                        <a href="#">Based  on 3 ratings</a>
                                        <a href="#"><i class="fa fa-pencil"></i> write a review</a>
                                    </div>
                                </div> -->
                                <div class="product-price-group">
                                    <span class="price">{{number_format($detail[0]->gia)}} VNĐ</span>
                                    <span class="old-price">{{number_format($detail[0]->gia)}} VNĐ</span>
                                    <span class="discount">-30%</span>
                                </div>
                                <div class="info-orther">
                                   <p>Mã Sản Phẩm: #c0{{$detail[0]->id_daughisanpham}}</p>
                                    <p>Danh mục: <span class="in-stockmuc"><?php foreach ($danhmuc as $vars) {
                                        if($vars->id_danhmuc==$detail[0]->id_danhmuc)
                                            echo $vars->tendanhmuc;
                                    } ?></span></p>
                                    <p>Tình Trạng: Mới</p>
                                </div>
                                <!-- <div class="product-desc">
                                    Vestibulum eu odio. Suspendisse potenti. Morbi mollis tellus ac sapien. Praesent egestas tristique nibh. Nullam dictum felis eu pede mollis pretium.Fusce egestas elit eget lorem. 
                                </div> -->
                                <!-- <div class="form-option">
                                    <p class="form-option-title">Available Options:</p>
                                    <div class="attributes">
                                        <div class="attribute-label">Color:</div>
                                        <div class="attribute-list">
                                            <ul class="list-color">
                                                <li style="background:#0c3b90;"><a href="#">red</a></li>
                                                <li style="background:#036c5d;" class="active"><a href="#">red</a></li>
                                                <li style="background:#5f2363;"><a href="#">red</a></li>
                                                <li style="background:#ffc000;"><a href="#">red</a></li>
                                                <li style="background:#36a93c;"><a href="#">red</a></li>
                                                <li style="background:#ff0000;"><a href="#">red</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Qty:</div>
                                        <div class="attribute-list product-qty">
                                            <div class="qty">
                                                <input id="option-product-qty" type="text" value="1">
                                            </div>
                                            <div class="btn-plus">
                                                <a href="#" class="btn-plus-up">
                                                    <i class="fa fa-caret-up"></i>
                                                </a>
                                                <a href="#" class="btn-plus-down">
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Size:</div>
                                        <div class="attribute-list">
                                            <select>
                                                <option value="1">X</option>
                                                <option value="2">XL</option>
                                                <option value="3">XXL</option>
                                            </select>
                                            <a id="size_chart" class="fancybox" href="public/assets/data/size-chart.jpg">Size Chart</a>
                                        </div>
                                        
                                    </div>
                                </div> -->
                                <div class="form-action">
                                    <div class="button-group">
                                        <a class="btn-add-cart" href="#">Thêm vào giỏ</a>
                                    </div>
                                    <!-- <div class="button-group">
                                        <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                        <br>Wishlist</a>
                                        <a class="compare" href="#"><i class="fa fa-signal"></i>
                                        <br>        
                                        Compare</a>
                                    </div> -->
                                </div>
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Thông Tin Sản Phẩm</a>
                                </li>
                                <!-- <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#information">information</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">reviews</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#extra-tabs">Extra Tabs</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#guarantees">guarantees</a>
                                </li> -->
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                    {{$detail[0]->noidung}}
                                </div>
                               <!--  <div id="information" class="tab-panel">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="200">Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr>
                                            <td>Styles</td>
                                            <td>Girly</td>
                                        </tr>
                                        <tr>
                                            <td>Properties</td>
                                            <td>Colorful Dress</td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="reviews" class="tab-panel">
                                    <div class="product-comments-block-tab">
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Jame</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
                                            </div>
                                        </div>
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Author</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
                                            </div>
                                        </div>
                                        <p>
                                            <a class="btn-comment" href="#">Write your review !</a>
                                        </p>
                                    </div>
                                    
                                </div>
                                <div id="extra-tabs" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.</p> 
                                </div>
                                <div id="guarantees" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.</p> 
                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>
                                </div> -->
                            </div>
                        </div>
                        <!-- ./tab product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Sản Phẩm Liên Quan</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                            @for($i=0;$i< count($splienquan);$i++)
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="public/assets/data/{{$splienquan[$i]->hinhanh}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Thêm vào giỏ" href="#add">Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{{$detailp->unicode_str_filter($splienquan[$i]->tendaughi)}}-d{{$splienquan[$i]->id_daughisanpham}}.html">{{$splienquan[$i]->tendaughi}}</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">{{number_format($splienquan[$i]->gia)}} VNĐ</span>
                                                <span class="price old-price">{{number_format($splienquan[$i]->gia)}} VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endfor
                            </ul>
                        </div>
                        <!-- ./box product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Có Thể Bạn Muốn Xem</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                @for($i=0;$i< count($spmuonxem);$i++)

                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="public/assets/data/{{$spmuonxem[$i]->hinhanh}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Thêm vào giỏ" href="#add">Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{{$detailp->unicode_str_filter($spmuonxem[$i]->tensanpham)}}-c{{$spmuonxem[$i]->id_sanpham}}.html">{{$spmuonxem[$i]->tensanpham}}</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">{{number_format($spmuonxem[$i]->gia)}} VNĐ</span>
                                                <span class="price old-price">{{number_format($spmuonxem[$i]->gia)}} VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               @endfor
                            </ul>
                        </div>
                        <!-- ./box product -->
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>


<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
@endsection
<!-- Script-->
<script type="text/javascript" src="public/assets/lib/jquery/jquery-1.11.2.min.js"></script>

<script type="text/javascript" src="public/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="public/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="public/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="public/assets/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="public/assets/lib/jquery.elevatezoom.js"></script>

<script type="text/javascript" src="public/assets/lib/jquery-ui/jquery-ui.min.js"></script>

<script type="text/javascript" src="public/assets/lib/fancyBox/jquery.fancybox.js"></script>

<script type="text/javascript" src="public/assets/js/jquery.actual.min.js"></script>


<script type="text/javascript" src="public/assets/js/theme-script.js"></script>

</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/detail3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:30:46 GMT -->
</html>