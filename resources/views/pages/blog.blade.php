@extends ('layouts.app')
@section('content')
    <body class="page-template-default page page-id-213 blog-list tg-inner-header  wallpaper-inititalized">
    <div class="preloader-outer" style="display: none;">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>
    <div id="wrapper" class="tg-haslayout">

        <main id="main" class="tg-page-wrapper tg-haslayout">

            <div class="container">
                <div class="row">
                    <div class="main-page-wrapper tg-haslayout">
                        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right  page-section">
                            <div class="row">
                                <div class="fw-page-builder-content">
                                    <section class="tg-main-section haslayout  default">
                                        <div class="builder-items">
                                            <div class="col-xs-12 col-md-12 builder-column ">



                                                    @foreach($posts as $post)
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h1 class="page-header">{{$post->title}}
                                                                    <small>{{$post->seo_title}}</small>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">

                                                                <a href="#">
                                                                    <img class="img-responsive" src={{asset('storage/'.$post->image)}} alt="">
                                                                </a>
                                                            </div>

                                                            <div class="col-md-8">
                                                                <h4>{{$post->excerpt}}</h4>
                                                                <p style="font-size: 13px;">{{str_limit(trim(strip_tags($post->body)),200)}}</p>
                                                                <a class="btn btn-primary" href="{{ url('/tstPost/'.$post->id) }}">View details </a>
                                                            </div>
                                                        </div>
                                                @endforeach

                                                <!-- Pagination -->
                                                    <div class="row text-center">
                                                        <div class="col-lg-12">
                                                            {{$posts->links()}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                    </section>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 aside sidebar-section pull-left" id="sidebar">
                            <aside id="tg-sidebar" class="tg-sidebar tg-haslayout">
                                <div id="search-2" class="tg-widget widget_search">
                                    <div class="tg-search">

                                        {!!Form :: open(array('url' => url('foo/bar'), 'class'=>'form-search tg-search-form'))!!}
                                        <fieldset>
                                            {!!Form :: text('Search', null, array('class'=>'form-control','placeholder'=>'Search')) !!}
                                            {!!Form::submit('', array('class'=>'fa search-button'))!!}

                                        </fieldset>
                                        {!!Form :: close() !!}

                                    </div>
                                </div>
                                <div id="categories-2" class="tg-widget widget_categories"><h3>Catégories</h3>
                                    <ul>
                                        <li class="cat-item cat-item-59"><a
                                                    href="http://santemap.firstonenews.com/category/directory/">Directory</a>
                                        </li>
                                        <li class="cat-item cat-item-58"><a
                                                    href="http://santemap.firstonenews.com/category/medical/">Medical</a>
                                        </li>
                                        <li class="cat-item cat-item-60"><a
                                                    href="http://santemap.firstonenews.com/category/responsive/">Responsive</a>
                                        </li>
                                        <li class="cat-item cat-item-61"><a
                                                    href="http://santemap.firstonenews.com/category/unique/">Unique</a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="docdirect_recent_posts-2" class="tg-widget tg-widget-recentposts"><h3>Recent
                                        Posts</h3>
                                    <ul>
                                        <li>
                                            <a href="http://santemap.firstonenews.com/family-clinic/">Family clinic</a>
                                            <time datetime="2016-04-21">21 avril 2016</time>
                                        </li>
                                        <li>
                                            <a href="http://santemap.firstonenews.com/athletic-clubs/">Athletic
                                                Clubs</a>
                                            <time datetime="2016-04-21">21 avril 2016</time>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tg_accordion-2" class="tg-widget tg-widget-accordions"><h3>Accordion</h3>
                                    <ul class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <li class="panel panel-default actives">
                                            <div class="tg-panel-heading" role="tab" id="heading0">
                                                <h3 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapse0" aria-expanded="true" aria-controls="collapse0">Our
                                                        Solution</a>
                                                </h3>
                                            </div>
                                            <div id="collapse0" class="panel-collapse collapse in" role="tabpanel"
                                                 aria-labelledby="heading0">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, conser adipiscing elit, sed diam
                                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                        erat volupat amitsh sangi.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="panel panel-default ">
                                            <div class="tg-panel-heading" role="tab" id="heading1">
                                                <h3 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapse1" aria-expanded="true" aria-controls="collapse1">Our
                                                        Mission</a>
                                                </h3>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse " role="tabpanel"
                                                 aria-labelledby="heading1">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, conser adipiscing elit, sed diam
                                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                        erat volupat amitsh sangi.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="panel panel-default ">
                                            <div class="tg-panel-heading" role="tab" id="heading2">
                                                <h3 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapse2" aria-expanded="true" aria-controls="collapse2">Our
                                                        Technology</a>
                                                </h3>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse " role="tabpanel"
                                                 aria-labelledby="heading2">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, conser adipiscing elit, sed diam
                                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                        erat volupat amitsh sangi.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="panel panel-default ">
                                            <div class="tg-panel-heading" role="tab" id="heading3">
                                                <h3 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapse3" aria-expanded="true" aria-controls="collapse3">Our
                                                        Specification</a>
                                                </h3>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse " role="tabpanel"
                                                 aria-labelledby="heading3">
                                                <div class="panel-body">
                                                    <p>Lorem ipsum dolor sit amet, conser adipiscing elit, sed diam
                                                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                        erat volupat amitsh sangi.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>

                    </div>
                </div>

            </div>
        </main>

    </div>


@endsection