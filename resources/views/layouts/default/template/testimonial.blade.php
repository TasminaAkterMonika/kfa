@include('layouts.default.header')
<body>
<div class="boxed_wrapper">

@include('layouts.default.navigation')

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Testimonials</h3>
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
                        Testimonials
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>




<section class="testimonials sec-padd-top">
    <div class="container"> 
        <div class="row">
         @foreach($testimonials as $testimonial)
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="item">
                    <div class="text">
                    {{ $testimonial->description }}
                    
                        <div class="quot"><i class="fa fa-quote-left"></i></div>
                    </div>
                    
                    <div class="author-info">
                        <ul class="list-inline">
                            <li>
                                <img src="{{ asset('uploads') }}/images/testimonial/{{ $testimonial->image }}" alt="">
                            </li>
                            <li>
                                <h2 class="author">{!!$testimonial->name!!}</h2>
                                <p class="author-title"> {{ $testimonial->designation }}</p>
                            </li>
                        </ul>
                    </div>

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