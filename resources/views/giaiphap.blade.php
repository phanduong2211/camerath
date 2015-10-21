<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:31:04 GMT -->
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
    
    <title>giải pháp lặp đặt - CameraTh</title>
    <style type="text/css">
        #header
        {
            background: rgba(14, 14, 14, 0.79) !important;
        }
        
        #navbar>ul>li:nth-child(7)
        {
            background: #ff3366;
            color: #fff;
        }

    </style>

</head>
<body class="category-page">
@extends('mainpages')
@section('giaiphap')

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Giải Pháp</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- Blog category -->
                <div class="block left-module">
                    <p class="title_block">Giải Pháp</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    @for($i=0;$i< count($giaiphap);$i++)
                                    <li><span></span><a href="{{$detailp->unicode_str_filter($giaiphap[$i]->name)}}">{{$giaiphap[$i]->name}}</a></li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./blog category  -->
                <!-- Popular Posts -->
                <div class="block left-module">
                    <p class="title_block">Dịch Vụ</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered">
                            <div class="layered-content">
                                <ul class="blog-list-sidebar clearfix">
                                    @for($i=0;$i< count($dichvu);$i++)
                                        <li>
                                            <div class="post-thumb">
                                                <a href="#"><img src="public/assets/data/option6/{{$dichvu[$i]->hinhanh}}" alt="Blog"></a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title"><a href="{{$detailp->unicode_str_filter($dichvu[$i]->name)}}-dv{{$dichvu[$i]->id}}.html">{{$dichvu[$i]->name}}</a></h5>
                                                
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./Popular Posts -->
                <!-- Banner -->
               <!--  <div class="block left-module">
                    <div class="banner-opacity">
                        <a href="#"><img src="public/assets/data/slide-left.jpg" alt="ads-banner"></a>
                    </div>
                </div> -->
                <!-- ./Banner -->
                <!-- Recent Comments -->
                <div style="display:none" class="block left-module">
                    <p class="title_block">Recent Comments</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered">
                            <div class="layered-content">
                                <ul class="recent-comment-list">
                                    <li>
                                        <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                        <div class="comment">
                                            "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                        </div>
                                        <div class="author">Posted by <a href="#">Admin</a></div>
                                    </li>
                                    <li>
                                        <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                        <div class="comment">
                                            "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                        </div>
                                        <div class="author">Posted by <a href="#">Admin</a></div>
                                    </li>
                                    <li>
                                        <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                        <div class="comment">
                                            "Consectetuer adipis. Mauris accumsan nulla vel diam. Sed in..."
                                        </div>
                                        <div class="author">Posted by <a href="#">Admin</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./Recent Comments -->
                <!-- tags -->
                <div style="display:none" class="block left-module">
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
                <!-- ./tags -->
                <!-- Banner -->
                <!-- <div class="block left-module">
                    <div class="banner-opacity">
                        <a href="#"><img src="public/assets/data/slide-left2.jpg" alt="ads-banner"></a>
                    </div>
                </div> -->
                <!-- ./Banner -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <h2 class="page-heading">
                    <span class="page-heading-title2">Giải Pháp Lắp Đặt</span>
                </h2>
                <div class="sortPagiBar clearfix">
                
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            @for($i=0;$i< count($detail_giaiphap)/7;$i++)
                            <li class=""><a href="#">{{$i+1}}</a></li>
                            @endfor
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">Next &raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
                <ul class="blog-posts">
                    @if(count($detail_giaiphap)>=7)
                    @for($i=0;$i< 7;$i++)
                    <li class="post-item">
                        <article class="entry">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="entry-thumb image-hover2">
                                        <a href="{{$detailp->unicode_str_filter($detail_giaiphap[$i]->name)}}-g{{$detail_giaiphap[$i]->id}}.html">
                                            <img src="public/assets/data/{{$detail_giaiphap[$i]->hinhanh}}" alt="Blog">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="{{$detailp->unicode_str_filter($detail_giaiphap[$i]->name)}}-g{{$detail_giaiphap[$i]->id}}.html">{{$detail_giaiphap[$i]->name}}</a></h3>
                                        <div class="entry-meta-data">
                                            <span class="author">
                                            <i class="fa fa-user"></i> 
                                            by: <a href="#">{{$detail_giaiphap[$i]->userpost}}</a></span>
                                            <span style="display:none" class="cat">
                                                <i class="fa fa-folder-o"></i>
                                                <a href="#">News, </a>
                                                <a href="#">Promotions</a>
                                            </span>
                                            <span  style="display:none" class="comment-count">
                                                <i class="fa fa-comment-o"></i> 3
                                            </span>
                                            <span class="date"><i class="fa fa-calendar"></i> {{$detail_giaiphap[$i]->datepost}}</span>
                                        </div>
                                        <div style="display:none" class="post-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(7 votes)</span>
                                        </div>
                                        <div class="entry-excerpt">
                                           <?php echo substr($detail_giaiphap[$i]->contents,0,300) ?> ...   
                                        </div>
                                        <div class="entry-more">
                                            <a href="{{$detailp->unicode_str_filter($detail_giaiphap[$i]->name)}}-g{{$detail_giaiphap[$i]->id}}.html">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </li>
                    @endfor
                    @else
                        @for($i=0;$i< count($detail_giaiphap);$i++)
                    <li class="post-item">
                        <article class="entry">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="entry-thumb image-hover2">
                                        <a href="{{$detailp->unicode_str_filter($detail_giaiphap[$i]->name)}}-g{{$detail_giaiphap[$i]->id}}.html">
                                            <img src="public/assets/data/{{$detail_giaiphap[$i]->hinhanh}}" alt="Blog">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="entry-ci">
                                        <h3 class="entry-title"><a href="{{$detailp->unicode_str_filter($detail_giaiphap[$i]->name)}}-g{{$detail_giaiphap[$i]->id}}.html">{{$detail_giaiphap[$i]->name}}</a></h3>
                                        
                                        <div style="display:none" class="post-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(7 votes)</span>
                                        </div>
                                        <div class="entry-excerpt">
                                           <?php echo substr($detail_giaiphap[$i]->contents,0,300) ?> ...   
                                        </div>
                                        <div class="entry-more">
                                            <a href="{{$detailp->unicode_str_filter($detail_giaiphap[$i]->name)}}-g{{$detail_giaiphap[$i]->id}}.html">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </li>
                    @endfor
                    @endif
                </ul>
                <div class="sortPagiBar clearfix">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            @for($i=0;$i< count($detail_giaiphap)/7;$i++)
                            <li class=""><a href="#">{{$i+1}}</a></li>
                            @endfor
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">Next &raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
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

</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:31:21 GMT -->
</html>