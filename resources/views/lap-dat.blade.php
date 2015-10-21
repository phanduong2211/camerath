<!DOCTYPE html>
<html>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:31:21 GMT -->
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
    
    <title>{{$detail[0]->name}}</title>
</head>
<body class="category-page">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@extends("mainpages")
@section('lap-dat')
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a class="home" href="{{Asset('')}}blog.html" title="Blog">lắp đặt</a>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- Blog category -->
               
           
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
                <h1 class="page-heading">
                    <span class="page-heading-title2">{{$detail[0]->name}}</span>
                </h1>
                <article class="entry-detail">
                   
                    <div class="entry-photo">
                        <img src="public/assets/data/option6/{{$detail[0]->hinhanh}}" alt="Blog">
                    </div>
                    <div class="content-text clearfix">
                        {{$detail[0]->contents}}
                    </div>
                    <!-- <div class="entry-tags">
                        <span>Tags:</span>
                        <a href="#">beauty,</a>
                        <a href="#">medicine,</a>
                        <a href="#">health</a>
                    </div> -->
                </article>
                <!-- Related Posts -->
                <div class="single-box">
                    <h2>Dịch Vụ Khác</h2>
                    <ul class="related-posts owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                        @for($i=0;$i< count($dichvu);$i++)
                                    <li class="post-item">
                            <article class="entry">
                                <div class="entry-thumb image-hover2">
                                    <a href="{{$detailp->unicode_str_filter($dichvu[$i]->name)}}-b{{$dichvu[$i]->id}}.html">
                                        <img src="public/assets/data/option6/{{$dichvu[$i]->hinhanh}}" alt="Blog">
                                    </a>
                                </div>
                                <div class="entry-ci">
                                    <h3 class="entry-title"><a href="{{$detailp->unicode_str_filter($dichvu[$i]->name)}}-dv{{$dichvu[$i]->id}}.html">{{$dichvu[$i]->name}}</a></h3>
                                   
                                    <div class="entry-more">
                                        <a href="{{$detailp->unicode_str_filter($dichvu[$i]->name)}}-dv{{$dichvu[$i]->id}}.html">Read more</a>
                                    </div>
                                </div>
                            </article>
                        </li>
                 @endfor
                    </ul>
                </div>
                <!-- ./Related Posts -->
                <!-- Comment -->
                <div class="single-box">
                    <h2 class="">Comments</h2>
                    <div class="comment-list">
                       <div class="fb-comments" data-href="{{Asset('')}}{{$detailp->unicode_str_filter($detail[0]->name)}}-dv{{$detail[0]->id}}.html" data-numposts="5"></div>
                    </div>
                </div>
               
                <!-- ./Comment -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
@endsection
<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>

</body>

<!-- Mirrored from kutethemes.com/demo/kuteshop/html/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jul 2015 07:31:26 GMT -->
</html>