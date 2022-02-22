@include('layouts.default.header')
<body>

<div class="boxed_wrapper">

@include('layouts.default.navigation')

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>About Us</h3>
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
                        About Us
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>



<section class="about-faq sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <figure class="img-box">
                    <a href="#"><img src="{{ asset('uploads') }}/images/about/{{ $about->image }}" alt=""></a>
                </figure>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-info">
                    {!! $about->about_us !!}
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<div class="container">
    <div class="border-bottom"></div>
</div>


<section class="four-column sec-padd-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item center">
                    <figure class="img-box">
                        <a href="#"><img src="{{ asset('uploads') }}/images/about/{{ $about->mission_image }}" alt=""></a>
                    </figure>
                    <div class="content">
                        <h4>Our Mission</h4>
                        {!!$about->mission_details!!}
                        
                    </div>
                        
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item center">
                    <figure class="img-box">
                        <a href="#"><img src="{{ asset('uploads') }}/images/about/{{ $about->vision_image}}" alt=""></a>
                    </figure>
                    <div class="content">
                        <h4>Our Vision</h4>
                        {!!$about->vision_details!!}
                    </div>
                        
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item center">
                    <figure class="img-box">
                        <a href="#"><img src="{{ asset('uploads') }}/images/about/{{ $about->value_image }}" alt=""></a>
                    </figure>
                    <div class="content">
                        <h4>Live Values</h4>
                          {!!$about->value_details!!}
                    </div>
                        
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item center">
                    <figure class="img-box">
                        <a href="#"><img src="{{ asset('uploads') }}/images/about/{{ $about->brand_image }}" alt=""></a>
                    </figure>
                    <div class="content">
                        <h4>Be the Brand</h4>
                         {!!$about->brand_details!!}
                    </div>
                        
                </div>
            </div>

        </div>
    </div>
</section>






<section class="our-team">
    <div class="container">
        <div class="section-title center">
            <h2>Meet Our Team</h2>
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




<section class="achive sec-padd">
    <div class="container">
        <div class="section-title center">
            <h2>Our Achivement</h2>
        </div>
        <div class="achive-carousel">
         @foreach($achivements as $achivement)
            <figure class="item">
                <a href="#"><img src="{{ asset('uploads') }}/images/achivement/{{ $achivement->image }}" alt=""></a>
            </figure>
            {{-- <figure class="item">
                <a href="#"><img src="images/resource/achive2.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive3.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive4.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive1.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive2.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive3.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive4.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive1.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive2.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive3.jpg" alt=""></a>
            </figure>
            <figure class="item">
                <a href="#"><img src="images/resource/achive4.jpg" alt=""></a>
            </figure> --}}

@endforeach
        </div>
    </div>
</section>


<div class="call-out style-2">
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