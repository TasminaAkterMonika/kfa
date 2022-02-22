@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
@include('layouts.default.navigation')

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>services</h3>
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
                        services
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>





<section class="service sec-padd-top">
    <div class="container">

        <div class="row">
          @foreach($services as $service)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                    <figure class="img-box">
                        <a href="#"><img src="{{ asset('uploads')}}/images/service/{{ $service->image }}" alt=""></a>
                        <div class="bottom-content">
                            <div class="clearfix">
                                <div class="icon_box">
                                    <span class="{{ $service->icon }}"></span>
                                </div>
                                <h4>{!! $service->service_name !!}</h4>
                            </div>
                                
                        </div>
                        <div class="overlay-box">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="icon_box">
                                        <span class="{{ $service->icon }}"></span>
                                    </div>
                                    <h4>{!! $service->service_name !!}</h4>
                                </div>
                                    
                                <div class="text">
                                   {{ $service->short_description }}
                                </div>
                                <div class="link">
                                    <a href="#" class="default_link">READ MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                                
                        </div>
                        
                    </figure>  
                </div>
            </div>
            {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                    <figure class="img-box">
                        <a href="#"><img src="images/service/2.jpg" alt=""></a>
                        <div class="bottom-content">
                            <div class="clearfix">
                                <div class="icon_box">
                                    <span class="icon-travel"></span>
                                </div>
                                <h4>Sustainability</h4>
                            </div>
                                
                        </div>
                        <div class="overlay-box">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="icon_box">
                                        <span class="icon-travel"></span>
                                    </div>
                                    <h4>Sustainability</h4>
                                </div>
                                    
                                <div class="text">
                                    <p>Priority interst for many organizations, when <br>comes to sustainbility & corporate responsiblity,  <br>we believe normal rules of busines apply.  </p>
                                </div>
                                <div class="link">
                                    <a href="#" class="default_link">READ MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                                
                        </div>
                    </figure>  
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                    <figure class="img-box">
                        <a href="#"><img src="images/service/3.jpg" alt=""></a>
                        <div class="bottom-content">
                            <div class="clearfix">
                                <div class="icon_box">
                                    <span class="icon-search"></span>
                                </div>
                                <h4>Performance</h4>
                            </div>
                                
                        </div>
                        <div class="overlay-box">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="icon_box">
                                        <span class="icon-search"></span>
                                    </div>
                                    <h4>Performance</h4>
                                </div>
                                    
                                <div class="text">
                                    <p>Priority interst for many organizations, when <br>comes to sustainbility & corporate responsiblity,  <br>we believe normal rules of busines apply.  </p>
                                </div>
                                <div class="link">
                                    <a href="#" class="default_link">READ MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                                
                        </div>
                    </figure>  
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                    <figure class="img-box">
                        <a href="#"><img src="images/service/4.jpg" alt=""></a>
                        <div class="bottom-content">
                            <div class="clearfix">
                                <div class="icon_box">
                                    <span class="icon-business"></span>
                                </div>
                                <h4>Advanced Analytics</h4>
                            </div>
                                
                        </div>
                        <div class="overlay-box">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="icon_box">
                                        <span class="icon-business"></span>
                                    </div>
                                    <h4>Advanced Analytics</h4>
                                </div>
                                    
                                <div class="text">
                                    <p>Priority interst for many organizations, when <br>comes to sustainbility & corporate responsiblity,  <br>we believe normal rules of busines apply.  </p>
                                </div>
                                <div class="link">
                                    <a href="#" class="default_link">READ MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                                
                        </div>
                        
                    </figure>  
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                    <figure class="img-box">
                        <a href="#"><img src="images/service/5.jpg" alt=""></a>
                        <div class="bottom-content">
                            <div class="clearfix">
                                <div class="icon_box">
                                    <span class="icon-business-2"></span>
                                </div>
                                <h4>Organization</h4>
                            </div>
                                
                        </div>
                        <div class="overlay-box">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="icon_box">
                                        <span class="icon-business-2"></span>
                                    </div>
                                    <h4>Organization</h4>
                                </div>
                                    
                                <div class="text">
                                    <p>Priority interst for many organizations, when <br>comes to sustainbility & corporate responsiblity,  <br>we believe normal rules of busines apply.  </p>
                                </div>
                                <div class="link">
                                    <a href="#" class="default_link">READ MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                                
                        </div>
                    </figure>  
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item">
                    <figure class="img-box">
                        <a href="#"><img src="images/service/6.jpg" alt=""></a>
                        <div class="bottom-content">
                            <div class="clearfix">
                                <div class="icon_box">
                                    <span class="icon-people"></span>
                                </div>
                                <h4>Customer Insights</h4>
                            </div>
                                
                        </div>
                        <div class="overlay-box">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class="icon_box">
                                        <span class="icon-people"></span>
                                    </div>
                                    <h4>Customer Insights</h4>
                                </div>
                                    
                                <div class="text">
                                    <p>Priority interst for many organizations, when <br>comes to sustainbility & corporate responsiblity,  <br>we believe normal rules of busines apply.  </p>
                                </div>
                                <div class="link">
                                    <a href="#" class="default_link">READ MORE <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                                
                        </div>
                    </figure>  
                </div>
            </div> --}}
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

