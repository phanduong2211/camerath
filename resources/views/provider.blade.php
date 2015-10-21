<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:28:15 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/css/responsive.css" />
    
    <title>Camera</title>
</head>
<body class="category-page">

@extends('mainpages')
@section('provider')
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Trang Chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Danh Mục</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block camera -->
                <div class="block left-module">
                    <p class="title_block">Danh Mục Camera</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    @for($i=0;$i< count($dm_camera);$i++)                                    
                                    <li><span></span><a href="{{$detailp->unicode_str_filter($dm_camera[$i]->tendanhmuc)}}">{{$dm_camera[$i]->tendanhmuc}}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block camera  -->
                <!-- block dau ghi -->
                <div class="block left-module">
                    <p class="title_block">Danh Mục Đầu Ghi</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    @for($i=0;$i< count($dm_daughi);$i++)                                    
                                    <li><span></span><a href="{{$detailp->unicode_str_filter($dm_daughi[$i]->tendanhmuc)}}">{{$dm_daughi[$i]->tendanhmuc}}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block dau ghi  -->
               <!-- block phukien -->
                <div class="block left-module">
                    <p class="title_block">Danh Mục Phụ Kiện</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    @for($i=0;$i< count($dm_phukien);$i++)                                    
                                    <li><span></span><a href="{{$detailp->unicode_str_filter($dm_phukien[$i]->tendanhmuc)}}">{{$dm_phukien[$i]->tendanhmuc}}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block phukien  -->
               
                <!-- SPECIAL -->
                <div class="block left-module">
                     @if(count($c_camera)>0)
                    <p class="title_block">Bán Chạy</p>
                    <div class="block_content">
                        <ul class="products-block">
                            <li>
                               
                                <div class="products-block-left">
                                    <a href="#">
                                        <img src="public/assets/data/{{$c_camera[0]->hinhanh}}" alt="Bán Chạy">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    
                                    <p class="product-name">
                                        <a href="{{$detailp->unicode_str_filter($c_camera[0]->tensanpham)}}-p{{$c_camera[0]->id_sanpham}}.html">{{$c_camera[0]->tensanpham}}</a>
                                    </p>
                                    <p class="product-price">{{number_format($c_camera[0]->gia)}} vnđ</p>
                                    <p style="display:none" class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </p>
                                    
                                </div>
                               
                            </li>
                        </ul>
                        <div class="products-block">
                            <div class="products-block-bottom">
                                <a class="link-all" href="{{$detailp->unicode_str_filter($c_camera[0]->tensanpham)}}-p{{$c_camera[0]->id_sanpham}}.html">Chi Tiết</a>
                            </div>
                        </div>                        
                    </div>
                     @endif
                </div>
                <!-- ./SPECIAL -->
                <!-- TAGS -->
                <div style='display:none' class="block left-module">
                    <p class="title_block">TAGS</p>
                    <div class="block_content">
                        <div class="tags">
                            <a href="#"><span class="level1">actual</span></a>
                            <a href="#"><span class="level2">adorable</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level4">consider</span></a>
                            <a href="#"><span class="level3">phenomenon</span></a>
                            <a href="#"><span class="level4">span</span></a>
                            <a href="#"><span class="level1">spanegs</span></a>
                            <a href="#"><span class="level5">spanegs</span></a>
                            <a href="#"><span class="level1">actual</span></a>
                            <a href="#"><span class="level2">adorable</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level4">consider</span></a>
                            <a href="#"><span class="level2">gives</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level2">gives</span></a>
                            <a href="#"><span class="level1">good</span></a>
                            <a href="#"><span class="level3">phenomenon</span></a>
                            <a href="#"><span class="level4">span</span></a>
                            <a href="#"><span class="level1">spanegs</span></a>
                            <a href="#"><span class="level5">spanegs</span></a>
                        </div>
                    </div>
                </div>
                <!-- ./TAGS -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- category-slider -->
                <div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">

                       @for($i=0;$i< count(explode(";",$c_side));$i++)
                        <li>
                            <img src="public/assets/data/{{explode(';',$c_side)[$i]}}" alt="camera side">
                        </li>
                        @endfor
                    </ul>
                </div>
                <!-- ./category-slider -->
                <!-- subcategories -->
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="#">{{$naemdm}}</a>
                        </li>
                        <!-- <li>
                            <a href="#">Tops</a>
                        </li>
                        <li>
                            <a href="#">Dresses</a>
                        </li>
                        <li>
                            <a href="#">Bags & Shoes</a>
                        </li>
                        <li>
                            <a href="#">Pants</a>
                        </li>
                        <li>
                            <a href="#">Blouses</a>
                        </li> -->
                    </ul>
                </div>
                <!-- ./subcategories -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title"></span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                        @if(count($s_daughi)>0)
                        @for($i=0;$i< count($s_daughi);$i++)
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="#">
                                        <img class="img-responsive" alt="product" src="public/assets/data/{{$s_daughi[$i]->hinhanh}}" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#add">Thêm vào giỏ</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="{{$detailp->unicode_str_filter($s_daughi[$i]->tendaughi)}}-d{{$s_daughi[$i]->id_daughisanpham}}.html">{{$s_daughi[$i]->tendaughi}}</a></h5>
                                    <div style="display:none" class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price">{{number_format($s_daughi[$i]->gia)}} vnđ</span>
                                        <span class="price old-price">{{number_format($s_daughi[$i]->gia)}} vnđ</span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Mã sản phẩm: #c0{{$s_daughi[$i]->id_daughisanpham}}</p>
                                        <p class="availability">Danh Mục: <span>{{$naemdm}}</span></p>
                                        <div class="product-desc">    
                                        <?php echo substr($s_daughi[$i]->noidung,0,200) ?>   ....                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endfor
                        @endif
                        @if(count($c_camera)>0)
                        @for($i=0;$i< count($c_camera);$i++)
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="#">
                                        <img class="img-responsive" alt="product" src="public/assets/data/{{$c_camera[$i]->hinhanh}}" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#add">Thêm vào giỏ</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="{{$detailp->unicode_str_filter($c_camera[$i]->tensanpham)}}-c{{$c_camera[$i]->id_sanpham}}.html">{{$c_camera[$i]->tensanpham}}</a></h5>
                                    <div style="display:none" class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price">{{number_format($c_camera[$i]->gia)}} vnđ</span>
                                        <span class="price old-price">{{number_format($c_camera[$i]->gia)}} vnđ</span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Mã sản phẩm: #c0{{$c_camera[$i]->id_sanpham}}</p>
                                        <p class="availability">Danh Mục: <span>{{$naemdm}}</span></p>
                                        <div class="product-desc">    
                                        <?php echo substr($c_camera[$i]->noidung,0,200) ?>   ....                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endfor
                        @endif

                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
                <!-- ./view-product-list-->
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            @for($i=0;$i< ((count($c_camera)+count($s_daughi))/12);$i++)                                
                                    <li class="active"><a href="#1">{{$i+1}}</a></li>                                                         
                            @endfor

                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">Next &raquo;</span>
                              </a>
                            </li>

                          </ul>
                        </nav>
                    </div>
                    <div style="display:none" class="show-product-item">
                        <select name="">
                            <option value="">Show 18</option>
                            <option value="">Show 20</option>
                            <option value="">Show 50</option>
                            <option value="">Show 100</option>
                        </select>
                    </div>
                    <div class="sort-product">
                        <select>
                            <option value="">Tên Sản Phẩm</option>
                            <option value="">Giá</option>
                        </select>
                        <div class="sort-product-icon">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@endsection
<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->

</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:29:23 GMT -->
</html>