
@extends('layout.indexLandingPage')

@section('landing')


<div class="ttm-page-title-row">
            <div class="ttm-page-title-row-bg-layer ttm-bg-layer "></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center"> 
                        <div class="title-box ttm-textcolor-white">
                            <div class="page-title-heading ttm-textcolor-white">
                                <h1 class="title">إضافة وجبة</h1>
                            </div><!-- /.page-title-captions -->
                            <div class="breadcrumb-wrapper">
                                <!-- <span>
                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home </a>
                                </span>
                                <span class="ttm-bread-sep"> &nbsp; :&nbsp;: &nbsp; </span>
                                <span><span class="ttm-textcolor-skincolor">Meal Plan</span></span> -->
                            </div>  
                        </div>
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- page-title end-->


        
        <section class="ttm-row diet-tab-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- section title -->
                        <div class="section-title text-center clearfix">
                            <div class="title-header">
                                <h5>اضف عنصر جديد </h5>
                                <h2 class="title">تتبع برنامجك الغذائي معنا</h2>
                                <hr>
                             
                                <div class="ttm-search-outer-search">
                                    <form method="get" class="ttm-site-searchform" action="#">
                                        <input type="hidden" name="meal" value="0">
                                        <input type="hidden" name="date" value="2021-01-20">                              
                                        <input type="search" class="field searchform-s select-new" name="s" placeholder="Type Word Then Enter...">
                                        <button class="button1" type="submit" value="">
                                            <i class="ti ti-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <div class="ttm-btn-box pr-20 pb-20 mt-3">
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-round ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-skincolor" href="#" title=""> اضف <i class="ti ti-hand-point-right"></i></a>
                                </div>
                            </div>
                            
                        </div><!-- section title end -->
                    </div>
                </div>
            </div>
        </section>

        

    <!--site-main start-->
    <div class="site-main">



       


        <!-- home-cta-section -->
        <section class="ttm-row home-cta-section bg-img2 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row-title">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-xl mb-15">
                                <i class="flaticon flaticon-healthy-lifestyle-logo"></i>
                            </div>
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h2 class="title">Our Coaching <br> And Leadership Programs</h2>
                                </div>
                                <div class="title-desc"><p>It is my mission and passion to help you achieve a life of vibrant health and wellbeing!</p></div>
                            </div>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round  ttm-btn-style-fill ttm-btn-color-white ttm-btn-bgcolor-skincolor mb-20" href="#">Contact Us</a>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round  ttm-btn-style-border ttm-btn-color-black ml-15 mb-20" href="#">More About</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- home-cta-section end -->

      
    </div><!--site-main end-->

    @endsection