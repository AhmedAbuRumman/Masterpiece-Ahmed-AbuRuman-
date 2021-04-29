@extends('layout.indexLandingPage')

@section('landing')


<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title-box ttm-textcolor-white">
                    <div class="page-title-heading ttm-textcolor-white">
                        <h1 class="title">Contact Us</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html"><i class="ti ti-home"></i> Home </a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; :&nbsp;: &nbsp; </span>
                        <span><span class="ttm-textcolor-skincolor">Contact Us</span></span>
                    </div>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- page-title end-->

<div class="site-main">

    <!-- sidebar -->
    <div class="sidebar ttm-sidebar-left ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row d-block">
                <div class="col-lg-9 content-area">
                    <!-- ttm-service-single-content-are -->
                    <div class="ttm-service-single-content-area">
                        <div class="row  spacing-12 box-shadow1 ttm-bgcolor-white mt-25 mb-25">
                            <div class="col-md-12">
                                <h4>Submit Recipe</h4>
                                <form action="/createRecipe" method="post" class="submit-recipe-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Recipe Name</label>
                                <input type="text" placeholder="Recipe Name" class="form-control" name="recipe_name">
                            </div>
                            @error('recipe_name')
                           <div>
                            <p style="color: red;font-size:1.5rem">{{$message}}</p>
                            </div>
                           @enderror

                            <div class="form-group">
                                <label for="category_id">Choose Category</label>
                                <select class="select2" name="category_id" id="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea placeholder="Describe the Recipe" class="textarea form-control" name="description" id="form-message"
                                    rows="7" cols="20"></textarea>
                            </div>
                            @error('description')
                           <div>
                            <p style="color: red;font-size:1.5rem">{{$message}}</p>
                            </div>
                           @enderror
                            
                            <div class="additional-input-wrap">
                                <label>Upload Recipe photo</label>
                                <div class="form-group">
                                    <input type="file" name="image">
                                </div>
                            </div>
                            @error('image')
                           <div>
                            <p style="color: red;font-size:1.5rem">{{$message}}</p>
                            </div>
                           @enderror
                            <div class="additional-input-wrap">
                                <div class="row gutters-5">
                                    <div class="col-lg-6">
                                        <label for="Calories">Recipe Calories:</label>
                                        <div class="form-group additional-input-box icon-left">
                                            <input type="number" placeholder="" class="form-control"
                                                name="recipe_calorie">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="Fat">Recipe Fat:</label>
                                        <div class="form-group additional-input-box icon-left">
                                            <input type="number" placeholder="" class="form-control"
                                                name="recipe_fat">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="Protien">Recipe Protien:</label>
                                        <div class="form-group additional-input-box icon-left">
                                            <input type="number" placeholder="" class="form-control"
                                                name="recipe_protien">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="Carb">Recipe Carb:</label>
                                        <div class="form-group additional-input-box icon-left">
                                            <input type="number" placeholder="" class="form-control"
                                                name="recipe_carb">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-submit">SUBMIT RECIPE</button>
                        </form>
                            </div>
                        </div>
                    </div>


                </div><!-- ttm-service-single-content-are end -->

                <div class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <aside class="widget post-widget">
                        <h3 class="widget-title">Latest News</h3>
                        <ul class="widget-post ttm-recent-post-list">
                            <li>
                                <a href="single-blog.html"><img src="{{asset('public_theme/images/blog/post1.jpg')}}" alt="post-img"></a>
                                <span class="post-date"><i class="fa fa-calendar"></i>20 April,2018</span>
                                <a href="single-blog.html" class="clearfix">How Much Do Eat You Really Need Day?</a>
                            </li>
                            <li>
                                <a href="single-blog.html"><img src="{{asset('public_theme/images/blog/post-2.jpg')}}" alt="post-img"></a>
                                <span class="post-date"><i class="fa fa-calendar"></i>01 August, 2018</span>
                                <a href="single-blog.html" class="clearfix">7 Simple &amp; Healthy Gluten Free Cookie</a>
                            </li>
                            <li>
                                <a href="single-blog.html"><img src="{{asset('public_theme/images/blog/post-3.jpg')}}" alt="post-img"></a>
                                <span class="post-date"><i class="fa fa-calendar"></i>13 March, 2018</span>
                                <a href="single-blog.html" class="clearfix">Tips For Staying Healthy On Vacations</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget contact-widget">
                        <h3 class="widget-title">Get in touch</h3>
                        <ul class="contact-widget-wrapper">
                            <li><i class="fa fa-map-marker"></i>Nutricare Business <br>24 Fifth st., Los Angeles, <br>USA </li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">info@example.com</a></li>
                            <li><i class="fa fa-phone"></i>(+01) 123 456 7890</li>
                            <li><i class="ti ti-world"></i><a href="#" target="_blank">http://www.example.com</a></li>
                            <li><i class="ti ti-alarm-clock"></i>Mon to Sat - 9:00am to 6:00pm <br> (Sunday Closed)</li>
                        </ul>
                    </aside>
                    <aside class="widget widget_media_image">
                        <a href="#"><img class="img-fluid" src="{{asset('public_theme/images/widget-banner.jpg')}}" alt="widget-banner"></a>
                    </aside>
                    <aside class="widget tagcloud-widget">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Dite</a>
                            <a href="#" class="tag-cloud-link">Fitness</a>
                            <a href="#" class="tag-cloud-link">Green Food</a>
                            <a href="#" class="tag-cloud-link">Health</a>
                            <a href="#" class="tag-cloud-link">Organic</a>
                            <a href="#" class="tag-cloud-link">Protin</a>
                            <a href="#" class="tag-cloud-link">Supplement</a>
                            <a href="#" class="tag-cloud-link">Yoga</a>
                        </div>
                    </aside>
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->

</div>
<!--site-main end-->

@endsection