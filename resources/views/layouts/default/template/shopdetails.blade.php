@include('layouts.default.header')
<body>

<div class="boxed_wrapper">
@include('layouts.default.navigation')

 


<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Shop</h3>
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
                        Shop
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>




<div class="shop">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 sidebar_styleTwo">
                <div class="wrapper">
                    <div class="sidebar_search">
                        <form action="#">
                            <input type="text" placeholder="Search....">
                            <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> <!-- End of .sidebar_styleOne -->

                    <div class="sidebar_categories">
                        <div class="theme_inner_title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="list">
                            <li><a href="#">New Furnitures</a></li>
                            <li><a href="#">Renovation Work</a></li>
                            <li><a href="#">Wood Supply</a></li>
                            <li><a href="#">Corporate Interior</a></li>
                        </ul>
                    </div> <!-- End of .sidebar_categories -->

                    <div class="price_filter wow fadeInUp">
                        <div class="theme_inner_title">
                            <h4>Filter By Price</h4>
                        </div>
                        <div class="single-sidebar price-ranger">
                            <div id="slider-range"></div>
                            <div class="ranger-min-max-block">
                                <input type="submit" value="Filter">
                                <span>Price:</span>
                                <input type="text" readonly class="min"> 
                                <span>-</span>
                                <input type="text" readonly class="max">
                            </div>
                        </div> <!-- /price-ranger -->
                    </div> <!-- /price_filter -->

                    <div class="best_sellers clear_fix wow fadeInUp">
                        <div class="theme_inner_title">
                            <h4>popular products</h4>
                        </div>
                        <div class="best-selling-area">
                            <div class="best_selling_item clear_fix border">
                                <div class="img_holder float_left">
                                    <img src="images/shop/11.jpg" alt="image">
                                </div> <!-- End of .img_holder -->

                                <div class="text float_left">
                                    <a href="shop-single.html"><h6>Wooden Chair</h6></a>
                                    <span>$34.99</span>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div> <!-- End of .text -->
                            </div> <!-- End of .best_selling_item -->

                            <div class="best_selling_item clear_fix border">
                                <div class="img_holder float_left">
                                    <img src="images/shop/12.jpg" alt="image">
                                </div> <!-- End of .img_holder -->

                                <div class="text float_left">
                                    <a href="shop-single.html"><h6>Bridcadge Tree</h6></a>
                                    <span>$24.00</span>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div> <!-- End of .text -->
                            </div> <!-- End of .best_selling_item -->

                            <div class="best_selling_item clear_fix">
                                <div class="img_holder float_left">
                                    <img src="images/shop/13.jpg" alt="image">
                                </div> <!-- End of .img_holder -->

                                <div class="text float_left">
                                    <a href="shop-single.html"><h6>Stackable Table</h6></a>
                                    <span>$20.00</span>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                </div> <!-- End of .text -->
                            </div> <!-- End of .best_selling_item -->
                        </div>
                            
                    </div> <!-- End of .best_sellers -->


                    <div class="sidebar_tags wow fadeInUp">
                            <div class="theme_inner_title">
                            <h4>product Tags</h4>
                        </div>

                        <ul>
                            <li><a href="#" class="tran3s">Furnitures</a></li>
                            <li><a href="#" class="tran3s">Wood</a></li>
                            <li><a href="#" class="tran3s">Cost</a></li>
                            <li><a href="#" class="tran3s">Artificial Grass</a></li>
                            <li><a href="#" class="tran3s">Painting</a>  </li>
                            <li><a href="#" class="tran3s">Curtains</a></li>
                            <li><a href="#" class="tran3s">Windows</a> </li>
                            <li><a href="#" class="tran3s">Tips</a></li>
                        </ul>
                    </div> <!-- End of .sidebar_tags -->

                </div> <!-- End of .wrapper -->
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                 @foreach($shops as $shop)
                    <div class="col-md-4 col-sm-6 col-xs-12 hover-effect">
                        <div class="single-shop-item">
                            <div class="img-box">
                                <img src="{{ asset('uploads')}}/images/shop/{{ $shop->image }}" alt="">
                                <div class="default-overlay-outer">
                                    <div class="inner">
                                        <div class="content-layer">
                                            <a href="shop-cart.html" class=" tool_tip" title="Add to Cart"><i class="icon-commerce"></i></a><a href="shop-cart.html" class=" tool_tip" title="Add to whichlist"><i class="icon-shapes"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.img-box -->
                            <div class="content-box">
                                <h4><a href="{{ route('single.shop',$shop->id)}}">{{$shop->title}}</a></h4>
                                <div class="rating"><span class="{!!$shop->icon!!}"></span> <span class="{!!$shop->icon!!}"></span> <span class="{!!$shop->icon!!}"></span> <span class="{!!$shop->icon!!}"></span> <span class="{!!$shop->icon!!}"></span></div>
                                <div class="item-price">{!!$shop->price!!}</div>
                            </div>
                        </div>

                    </div>
                    
                    @endforeach
                </div><br>
                <div class="border-bottom"></div>
                <br><br>
                <ul class="page_pagination center">
                    <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="active tran3s">1</a></li>
                    <li><a href="#" class="tran3s">2</a></li>
                    <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>     
        </div>
    </div> 
</div> 


@include('layouts.default.footer')
