@include('layouts.default.header')
<body>

<div class="boxed_wrapper">
@include('layouts.default.navigation')


<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>projects single</h3>
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
                        <a href="our-projects.html">Projects</a>
                    </li>
                    <li>
                        projects single
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>



<div class="single-projects sec-padd">
    <div class="container">
        <div class="img-box">
            <img src="{{ asset('uploads')}}/images/project/{{ $project->image }}" alt="" width="1170px" height ="650px">
        </div>
        <br><br>
        <div class="client-information">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <ul class="inform-list">
                        <li><span>Customer    &nbsp;&nbsp;&nbsp; : </span> &nbsp;&nbsp;  {!! $project->customer!!}</li>
                        <li><span>Live demo   &nbsp;&nbsp; : </span> &nbsp;&nbsp; {!! $project->live_demo!!}</li>
                        <li><span>Category    &nbsp;&nbsp;&nbsp;&nbsp; : </span>&nbsp;&nbsp;  {!! $project->category!!}</li>
                        <li><span>Date        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   : </span> &nbsp;&nbsp; {!! $project->date!!}</li>
                        <li><span>Tags        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   : </span> &nbsp;&nbsp; {!! $project->tags!!}</li>
                    </ul>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <h3>{!! $project->title!!}</h3>
                    <p class="title">{!! $project->category!!}</p>
                    <div class="text">
                    {!! $project->description!!}
                    </div>
                    <div class="link">
                        <a href="#" class="thm-btn">Launch Project</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="project-analysis">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="section-title">
                        <h3>Project Analysis</h3>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="text">
                    {!! $project->description!!}

                        <br><br>
                    {!! $project->description!!}

                        <br>
                    </div>
                    <div class="img-box">
                        <img src="images/resource/graph2.jpg" alt="">
                    </div><br><br>
                </div>
            </div>
        </div>
        <div class="project-result">
            <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="section-title">
                        <h3>Project Result</h3>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    
                    <div class="text">
                        <p>
                            This mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. 
                        </p><br>
                    </div>
                    <ul class="analysis-list">
                        <li><span class="fa fa-check-square-o"></span>Which toil and pain can procure him some great pleasure.</li>
                        <li><span class="fa fa-check-square-o"></span>Any right to find fault with a man who annoying.</li>
                        <li><span class="fa fa-check-square-o"></span>Consequences, or one who avoids a pain that produces.</li>
                        <li><span class="fa fa-check-square-o"></span>Denouncing pleasure praising was born and I will give a complete. </li>
                        <li><span class="fa fa-check-square-o"></span>expound the actual teachings of the great explorer of the truth.</li>
                        <li><span class="fa fa-check-square-o"></span>Pleasure rationally encounter consequences that extremely. </li>
                    </ul><br>
                    <div class="img-box">
                        <img src="images/resource/graph3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.default.footer')





