@include('layouts.default.header')
<body>

<div class="boxed_wrapper">
@include('layouts.default.navigation')
    

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Product Single</h3>
        </div><!-- /.box -->
    </div><!-- /.container -->
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="shop.html">Shop</a>
                    </li>
                    <li>
                        Product Single
                    </li>
                </ul><!-- /.list-line -->
            </div><!-- /.pull-left -->
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div><!-- /.pull-right -->
        </div><!-- /.container -->
    </div>
</div>



<section class="shop-single-area">
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
                            <h4>Tag Cloud</h4>
                        </div>

                        <ul>
                            <li><a href="#" class="tran3s">Idea</a></li>
                            <li><a href="#" class="tran3s">Finance</a></li>
                            <li><a href="#" class="tran3s">Experts</a></li>
                            <li><a href="#" class="tran3s">Tips</a></li>
                            <li><a href="#" class="tran3s">Marketing</a>  </li>
                            <li><a href="#" class="tran3s">Services</a></li>
                            <li><a href="#" class="tran3s">Growth</a> </li>
                        </ul>
                    </div> <!-- End of .sidebar_tags -->

                </div> <!-- End of .wrapper -->
            </div> 
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="single-products-details">       
                    <div class="product-content-box">
                        <div class="row">
                            <div class="col-md-6 img-box">
                                <div class="slider">
                                    <ul class="slides">
                                        <li data-thumb="{{ asset('uploads')}}/images/shop/{{ $shop->image }}">
                                            <div class="thumb-image">
                                                <img src="{{ asset('uploads')}}/images/shop/{{ $shop->image }}" alt="" data-imagezoom="true" class="img-responsive"> 
                                            </div>
                                        </li>
                                        {{-- <li data-thumb="{{ asset('uploads')}}/images/shop/{{ $shop->image }}">
                                            <div class="thumb-image">
                                                <img src="{{ asset('uploads')}}/images/shop/{{ $shop->image }}" alt="" data-imagezoom="true" class="img-responsive"> 
                                            </div>
                                        </li>   --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-box">
                                    <h3>{!!$shop->title!!}</h3>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="{!!$shop->icon!!}"></i></li>
                                            <li><i class="{!!$shop->icon!!}"></i></li>
                                            <li><i class="{!!$shop->icon!!}"></i></li>
                                            <li><i class="{!!$shop->icon!!}"></i></li>
                                            <li><i class="{!!$shop->icon!!}o"></i></li>
                                        </ul>
                                    </div>
                                    <span class="price">{!!$shop->price!!}</span>
                                    <div class="text">
                                        {!!$shop->details!!}
                                    </div>
                                    <div class="location-box">
                                        <p>Check Delivery Option at Your Location:</p>
                                        <form action="#">
                                            <input type="text" placeholder="Pincode">
                                            <button type="submit">Check</button><br/>
                                            <span>Expected Delivery in 4-10 Days</span>
                                        </form>
                                    </div>
                                    <div class="addto-cart-box">
                                        <input class="quantity-spinner" type="text" value="2" name="quantity">
                                        <a href="shop-cart.html" class="thm-btn">Add to Cart</a>

                                    </div>    
                                </div>
                            </div>
                        </div>   
                    </div>
                
                    <div class="product-tab-box">
                        <ul class="nav nav-tabs tab-menu">
                            <li><a href="#desc" data-toggle="tab">Descriprion</a></li>
                            <li class="active"><a href="#review" data-toggle="tab">Reviews (2)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="desc">
                                <div class="product-details-content">
                                    <div class="desc-content-box">
                                        <p>Bedroom lamps reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration. These forms of lamps are visually light and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern lamps fits best in open floor plans with clean lines that thrive in the absence of clutter. A one stop shop for home decor and furniture, Interior sells a home product every 30 seconds.</p>
                                        <p>Bedroom lamps let you fine-tune the atmosphere of a room in more ways than one. They give you additional light where you need it while also adding a bit of personality. Ours are available in a wide selection of styles to add a little extra color, texture and light to your home.</p>
                                    </div>

                                </div>    
                            </div>
                            <div class="tab-pane active" id="review">
                                <div class="review-box">
                                    <div class="tab-title-h4">
                                        <h4>2 Reviews For Bedroom Lamp</h4>
                                    </div>

                                    <div class="single-review-box">
                                        <div class="img-holder">
                                            <img src="images/shop/thumb1.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="text-holder">
                                            <div class="top">
                                                <div class="name pull-left">
                                                    <h4>Steven Rich – Sep 17, 2016:</h4>
                                                </div>
                                                <div class="review-box pull-right">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End single review box-->
                                    <!--Start single review box-->
                                    <div class="single-review-box">
                                        <div class="img-holder">
                                            <img src="images/shop/thumb2.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="text-holder">
                                            <div class="top">
                                                <div class="name pull-left">
                                                    <h4>William Cobus – Aug 21, 2016:</h4>
                                                </div>
                                                <div class="review-box pull-right">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>there anyone who loves or pursues or desires to obtain pain itself, because it is pain, but because occasionally circumstances occur some great pleasure.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End single review box-->   
                                </div>
                                <div class="review-form">
                                    <div class="tab-title-h4">
                                        <h4>Add Your Review</h4>
                                    </div>
                                    <div class="add-rating-box">
                                        <div class="add-rating-title">
                                            <h4>Your Rating</h4>    
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>   
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="field-label">
                                                    <p>First Name*</p>
                                                    <input type="text" name="fname" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="field-label">
                                                    <p>Last Name*</p>
                                                    <input type="text" name="lname" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="field-label">
                                                    <p>Email*</p>
                                                    <input type="text" name="email" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="field-label">
                                                    <p>Your Review*</p>
                                                    <textarea name="review" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="thm-btn bg-cl-1" type="submit">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>  
                                </div>
                            </div>

                        </div>      
                    </div>
                
                    <!--Start related product -->
                    <div class="related-product">
                        <div class="section-title">
                            <h3>Related Products</h3>
                        </div>
                        <div class="row">
                            <div class="related-product-items">
                                <div class="col-md-4 col-sm-6 col-xs-12 hover-effect">
                                    <div class="single-shop-item">
                                        <div class="img-box">
                                            <img src="images/shop/1.jpg" alt="Awesome Image">
                                            <div class="default-overlay-outer">
                                                <div class="inner">
                                                    <div class="content-layer">
                                                        <a href="shop-cart.html" class=" tool_tip" title="Add to Cart"><i class="icon-commerce"></i></a><a href="shop-cart.html" class=" tool_tip" title="Add to whichlist"><i class="icon-shapes"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.img-box -->
                                        <div class="content-box">
                                            <h4><a href="shop-single.html">The Innovators</a></h4>
                                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                            <div class="item-price">$34.99</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 hover-effect">
                                    <div class="single-shop-item">
                                        <div class="img-box">
                                            <img src="images/shop/2.jpg" alt="Awesome Image">
                                            <div class="default-overlay-outer">
                                                <div class="inner">
                                                    <div class="content-layer">
                                                        <a href="shop-cart.html" class=" tool_tip" title="Add to Cart"><i class="icon-commerce"></i></a><a href="shop-cart.html" class=" tool_tip" title="Add to whichlist"><i class="icon-shapes"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.img-box -->
                                        <div class="content-box">
                                            <h4><a href="shop-single.html">Win Your Friends</a></h4>
                                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                            <div class="item-price">$29.99</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 hover-effect">
                                    <div class="single-shop-item">
                                        <div class="img-box">
                                            <img src="images/shop/3.jpg" alt="Awesome Image">
                                            <div class="default-overlay-outer">
                                                <div class="inner">
                                                    <div class="content-layer">
                                                        <a href="shop-cart.html" class=" tool_tip" title="Add to Cart"><i class="icon-commerce"></i></a><a href="shop-cart.html" class=" tool_tip" title="Add to whichlist"><i class="icon-shapes"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.img-box -->
                                        <div class="content-box">
                                            <h4><a href="shop-single.html">Business Adventures</a></h4>
                                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                            <div class="item-price">$24.99</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End related product -->
                </div>    
            </div>
                   
        </div>
    </div>
</section>     


@include('layouts.default.footer')

