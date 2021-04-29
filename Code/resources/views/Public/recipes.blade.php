@extends('layout.indexLandingPage')

@section('landing')

<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading ttm-textcolor-white">
                        <h1 class="title">Recipes</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home </a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; :&nbsp;: &nbsp; </span>
                        <span><span class="ttm-textcolor-skincolor">Recipes</span></span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->

<section class="ttm-row our-letest-classes-section  clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- section title -->
                <div class="section-title text-center clearfix">
                    <div class="title-header">
                        <h5>what we offer</h5>
                        <h2 class="title">Our Latest Classes</h2>
                    </div>
                    <div class="title-desc">
                        <P>A course is often a series of classes framed around a certain topics. Browse our nutrition courses and specializations classes.
                        </P>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row end -->
        <div class="row ttm-boxes-spacing-30px">
            @foreach($recipes as $recipe)
            <div class="col-md-6 col-sm-6 ttm-box-col-wrapper">
                <div class="row no-gutters break-991-colum">
                    <div class="col-md-12 col-lg-6">
                        <!-- col-img-bg-img-ten end-->
                        <div class="col-bg-img-ten ttm-col-bgimage-yes ttm-bg">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-bg-layer-inner"></div>
                            </div>
                        </div><!-- col-img-bg-img-ten end-->
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="ttm-bg ttm-bgcolor-white ttm-col-bgcolor-yes spacing-9">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <img src="{{asset('uploads/photo/'.$recipe->image)}}" class="ttm-equal-height-image" alt="bg-image">
                                <h5>{{$recipe->recipe_name}}</h5>
                                <ul class="ttm-list ttm-list-style-icon">
                                    <li><i class="fa fa-user ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Trainer: Sam Martin</span></li>
                                </ul>
                                <div class="separator clearfix">
                                    <div class="sep-line mt_5 mb-15"></div>
                                </div>
                                <p class="ttm-textcolor-dark">{{$recipe->description}}</p>
                                <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-black btn-inline mb-20 ttm-btn-underline" href="/recipe/single/{{$recipe->id}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection