@include('layouts.default.header')
<body>

<div class="boxed_wrapper">
@include('layouts.default.navigation')


 


<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Our Projects</h3>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        Projects
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>






<section class="latest-project sec-padd">
    <div class="container">
        
        
        <ul class="post-filter list-inline">
            <li class="active" data-filter=".filter-item">
                <span>View All</span>
            </li>
            <li data-filter=".Consulting">
                <span>Consulting</span>
            </li>
            <li data-filter=".Finance">
                <span>Finance</span>
            </li>
            <li data-filter=".Marketing">
                <span>Marketing</span>
            </li>
            <li data-filter=".Growth">
                <span>Growth</span>
            </li>
        </ul>

        <div class="row masonary-layout filter-layout">
        @foreach($projects as $project)

            <div class="col-md-4 col-sm-6 col-xs-12 filter-item Marketing">
           
                <div class="single-project">
                

                    <div class="img-box">
                       <img src="c" alt=""/>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="{{ route('single.project',$project->id)}}"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a data-group="1" href="{{ asset('uploads')}}/images/project/{{ $project->image }}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="title">
                        <h5>{!!$project->title!!}</h5>
                        <p>{!!$project->category!!}</p>
                    </div>
                
               
                </div>

           
            </div>
          
         @endforeach
        </div><!-- /.row -->

        <div class="border-bottom"></div>
        <br><br>
        <ul class="page_pagination center">
            <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <li><a href="#" class="active tran3s">1</a></li>
            <li><a href="#" class="tran3s">2</a></li>
            <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>

    </div><!-- /.container -->
</section><!-- /.latest-project sec-pad -->


@include('layouts.default.footer')
