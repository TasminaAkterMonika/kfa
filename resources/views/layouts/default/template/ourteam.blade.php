@include('layouts.default.header')
<body>

<div class="boxed_wrapper">

@include('layouts.default.navigation')


<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Our Team</h3>
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
                        <a href="about.html">about us</a>
                    </li>
                    <li>
                        Our Team
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>











<section class="our-team">
    <div class="container">
        <div class="section-title">
            <h2>leadership team</h2>
        </div>  
        <div class="row">
            @foreach($teams as $team)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team-member">
                    <figure class="img-box">
                        <a href="#"><img src="{{ asset('uploads')}}/images/team/{{ $team->image }}" alt=""></a>
                        <div class="overlay">
                            <div class="inner-box">
                                <ul class="link">
                                    <li><a href="#" class="thm-btn">View Profile</a></li>
                                </ul>
                            </div>
                                
                        </div>
                    </figure>
                    <div class="author-info text-center">
                        <h4>{{ $team->name }}</h4>
                        <a href="#"><p class="position">{{ $team->designation }}</p></a>
                    </div>
                    <div class="text center">
                       {!! $team->description!!}
                    </div>
                    <ul class="social center">
                        <li><a href="{{ $team->facebook }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $team->twitter }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ $team->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="{{ $team->email }}"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                        
                </div>
            </div>
            @endforeach
               
                
        </div>
    </div>

</section>


<div class="call-out">
    <div class="container">
        <div class="float_left">
            <h4>Universal deliver the right solution for you and your business</h4>
        </div>
        <div class="float_right">
            <a href="contact.html" class="thm-btn">Free Consultation</a>
        </div>
    </div>
</div>


@include('layouts.default.footer')
