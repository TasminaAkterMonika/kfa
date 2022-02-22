@include('layouts.default.header')
<body>

<div class="boxed_wrapper">
@include('layouts.default.navigation')

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>{{$service->service_name}} </h3>
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
                        <a href="{{route('services')}}">Services</a>
                    </li>
                    <li>
                     {!! $service->service_name !!}   
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>




<section class="service-single sec-padd">
    <div class="container">
        <div class="row">     
            <div class="col-md-3">
            
                <div class="service-sidebar">
          
                    <ul class="service-catergory">
                                 

                 <ul class="submenu">  
                                @foreach(DB::TABLE('our_service')->where('status', 1)->orderBy('id', 'DESC')->get() AS $row)
                                <li><a href="{{route('service.details',$row->id)}}">{{ $row->service_name }}</a></li>
                                @endforeach
                            
                            </ul>
                                   
                        {{-- <li class="active"><a href="business-growth.html">Business Growth</a></li>
                        <li><a href="sustainability.html">Sustainability</a></li>
                        <li><a href="performance.html">Performance</a></li>
                        <li><a href="advanced-analytics.html">Advanced Analytics</a></li>
                        <li><a href="organization.html">Organization</a></li>
                        <li><a href="customer-insights.html">Customer Insights</a></li> --}}
                   </ul>
                    {{-- <br><br>
                    <div class="brochures"> 
                        <h4>Our Brochures</h4>
                        <p>Download our comapny profile & 2016 financial brochure.</p>

                        <ul class="brochures-lists">
                            <li>
                                <a href="#"><span class="fa fa-file-pdf-o"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="fa fa-file-text-o"></span></a>
                            </li>
                        </ul>
                        <i class="icon icon-sheet"></i>
                    </div>
                    <br><br>
                    <div class="getin-tuch">
                        <h4>Get Touch With Us</h4>
                        <p>You can also send us an <a href="#">email</a>  and we’ll get in touch shortly, or Troll Free Number <b>- (+91) 00-700-6202.</b></p>
                        <div class="link">
                            <a href="#" class="default_link">LOCATE US<i class="fa fa-angle-right"></i></a>
                        </div>
                        <i class="icon icon-multimedia-1"></i>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-9">
                <div class="outer-box">
                    {!! $service->description !!}
                </div>
            </div>
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