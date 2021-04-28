@extends('layout.indexLandingPage')

@section('landing')

<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading ttm-textcolor-white">
                        <h1 class="title">Gallery Single</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home </a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; :&nbsp;: &nbsp; </span>
                        <span><span class="ttm-textcolor-skincolor">Gallery Single</span></span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->


<!--site-main start-->
<div class="site-main">

    <!-- portfolio-style-section -->
    <section class="ttm-row portfolio-style-section clearfix">
        <div class="container">
            <div class="row">
                <!-- row -->
                <div class="col-lg-12">
                    <!-- ttm-pf-single-content-wrapper-innerbox -->
                    <div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-left-image">
                        <div class="row no-gutters">
                            <div class="col-md-12 col-lg-8">
                                <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                    <img class="img-fluid" src="{{asset('uploads/photo/'.$recipe->image)}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="ttm-pf-single-detail-box res-991-mt-30">
                                    <div class="ttm-portfolio-title">
                                        <h2 class="ttm-pf-detailbox-title">Gallery Info</h2>
                                    </div>
                                    <div class="ttm-pf-detailbox">
                                        <ul class="ttm-pf-detailbox-list">
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-briefcase"></i>
                                                <span class="ttm-pf-left-details">Title : </span>
                                                <span class="ttm-pf-right-details">{{$recipe->recipe_name}}</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-clock-o"></i>
                                                <span class="ttm-pf-left-details">Calories : </span>
                                                <span class="ttm-pf-right-details">{{$recipe->recipe_calorie}}</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-bookmark-o"></i>
                                                <span class="ttm-pf-left-details">Fat : </span>
                                                <span class="ttm-pf-right-details">{{$recipe->recipe_fat}}</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-calendar"></i>
                                                <span class="ttm-pf-left-details">Carb : </span>
                                                <span class="ttm-pf-right-details">{{$recipe->recipe_carb}}</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-clock-o"></i>
                                                <span class="ttm-pf-left-details">Protien : </span>
                                                <span class="ttm-pf-right-details">{{$recipe->recipe_protien}}</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-user"></i>
                                                <span class="ttm-pf-left-details">Customer : </span>
                                                <span class="ttm-pf-right-details">ThemeForest Envato</span>
                                            </li>
                                            <li class="ttm-pf-details-date">
                                                <i class="fa fa-bookmark-o"></i>
                                                <span class="ttm-pf-left-details">Category : </span>
                                                <span class="ttm-pf-right-details">{{$recipe->category_id}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters mt-35">
                            <div class="col-md-12">
                                <div class="ttm-portfolio-description res-991-mt-30">
                                    <h4 class="font-27 line-h35 pb-10">Recipe Description</h4>
                                    <p>{{$recipe->description}}</p>
                                    <blockquote>
                                        <p class="mb-20">In 10 months following Health Coach, i have has lost 128 pounds. If you are overweight out of shape, and worried that it’s too late to get started.</p>
                                        <div class="author-title pb-10">– Sara Tailor, <span class="designation">Client</span></div>
                                    </blockquote>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.</p>
                                    <div class="ttm-post-prev-next-buttons clearfix">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-icon-btn-left ttm-btn-style-fill ttm-btn-bgcolor-skincolor mb-20" href="#"><i class="ti ti-angle-double-left"></i>Previous</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ttm-pf-single-content-wrapper-innerbox end-->
                </div>
            </div><!-- row end -->
            <div class="row ttm-pf-single-related-wrapper">
                <!-- row -->
                <div class="col-lg-12">
                    <h3 class="ttm-pf-single-related-title">Related Projects</h3>
                </div>
                <div class="col-md-4">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-team  ttm-box-view-top-image ttm-team-box-view-overlay box-shadow1 mb-30">
                        <div class="featured-imagebox-team-inner">
                            <div class="featured-thumbnail">
                                <!-- team-member-image -->
                                <img class="img-fluid" src="images/portfolio/06.jpg" alt="">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Pilates Exercises" href="images/portfolio/06.jpg" data-rel="prettyPhoto">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a href="portfolio-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-box-bottom-content">
                            <p class="category">Fitness</p><!-- team-member-category -->
                            <div class="featured-title">
                                <!-- team-member-name -->
                                <h5><a href="portfolio-style-3.html">Pilates Exercises</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-md-4">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-team  ttm-box-view-top-image ttm-team-box-view-overlay box-shadow1 mb-30">
                        <div class="featured-imagebox-team-inner">
                            <div class="featured-thumbnail">
                                <!-- team-member-image -->
                                <img class="img-fluid" src="images/portfolio/07.jpg" alt="">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Athletic Leg Exercise" href="images/portfolio/07.jpg" data-rel="prettyPhoto">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a href="portfolio-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-box-bottom-content">
                            <p class="category">Fitness, Weight lose</p><!-- team-member-category -->
                            <div class="featured-title">
                                <!-- team-member-name -->
                                <h5><a href="portfolio-style-3.html">Athletic Leg Exercise</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-md-4">
                    <!-- featured-imagebox -->
                    <div class="featured-imagebox featured-imagebox-team  ttm-box-view-top-image ttm-team-box-view-overlay box-shadow1 mb-30">
                        <div class="featured-imagebox-team-inner">
                            <div class="featured-thumbnail">
                                <!-- team-member-image -->
                                <img class="img-fluid" src="images/portfolio/08.jpg" alt="">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Diet Old People" href="images/portfolio/08.jpg" data-rel="prettyPhoto">
                                        <i class="ti ti-search"></i>
                                    </a>
                                    <a href="portfolio-style-3.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ttm-box-bottom-content">
                            <p class="category">Diet</p><!-- team-member-category -->
                            <div class="featured-title">
                                <!-- team-member-name -->
                                <h5><a href="portfolio-style-3.html">Diet Old People</a></h5>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
            </div><!-- row end-->
        </div>
    </section>
    <!-- portfolio-style-section end -->

</div>

@endsection