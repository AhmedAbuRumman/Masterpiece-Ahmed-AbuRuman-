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
                        <h1 class="title">Categories</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home </a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; :&nbsp;: &nbsp; </span>
                        <span><span class="ttm-textcolor-skincolor">Categories</span></span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->

<!-- row-top-section end -->
<div class="ttm-row home-banner-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    @if(isset($all_category))
                    @foreach($all_category as $cate)
                    <div class="col-md-6">

                        <div class="featured-imagebox featured-imagebox-team box-shadow1 mb-35">
                            <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                <div class=" banner-image ">
                                    <figure class="ttm-figure mb-30">
                                        <a href="/recipes/{{$cate->id}}"><img class="img-fluid" src="{{asset('uploads/photo/'.$cate->category_image)}}" alt=""></a>
                                    </figure>
                                </div>
                                <div class="featured-content featured-content-team">
                                    <div class="featured-title">
                                        <!-- team-member-name -->
                                        <h5><a href="/recipes/{{$cate->id}}">{{$cate->category_name}}</a></h5>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
<!-- row-top-section end -->
@endsection