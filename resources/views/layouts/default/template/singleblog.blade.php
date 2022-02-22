@include('layouts.default.header')
<body>

<div class="boxed_wrapper">
@include('layouts.default.navigation')


<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Blog Single Post</h3>
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
                        <a href="blog-default.html">blog</a>
                    </li>
                    <li>
                        Blog Single Post
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>



<div class="sidebar-page-container sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <section class="blog-section">
                    <div class="default-blog-news single-blog-post single-blog wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="img-box">
                            <a href="blog-details.html"><img src="{{ asset('uploads')}}/images/blog/{{ $blog->image }}" width="770px" alt="News"></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="blog-details.html">Seminar for improve your business profit & loss</a></h3>
                            <div class="date center">21 <br> Aug</div>
                            <div class="post-meta"><span><i class="fa fa-user"></i>By Fletcher</span><span><i class="fa fa-tag"></i>Consulting</span><span><i class="fa fa-comments"></i>22 Comments</span><span><i class="fa fa-heart"></i>84 Like</span></div>
                            <div class="text">
                                
                                <p>The great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, avoids seds pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pursue pleasure.  </p>     

                                <p>Who loves or pursues or desires to obtain pain of itself, because it is painbecause occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it right to find fault.</p>                       
                            </div>
                            <div class="author">
                                <!-- Image -->
                                <img src="images/blog/12.jpg" alt="">
                                <div class="author-comment">
                                    <div class="quote">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>They have got my project on time with competition seds with a highly skilled, well-organized and denouncing of pleasures experienced team of professional.</p>
                                    <h5>Dohn Gaskel</h5>
                                    <p class="a-title">Manager</p>
                                </div>                                              
                            </div><br>
                            <div class="text">
                                <p>Know how to pursue pleasure rationally encounter consequences that are extremely painful seds or again is there anyone who loves or pursues or desires to obtain pain of itself, because seds our it pain, but because occasionally circumstances occur which toil and pain can  undertakes laborious physical exercise.</p>
                            </div>
                            <div class="border-bottom"></div>
                            <div class="share-box clearfix">
                                <ul class="tag-box pull-left">
                                    <li>Tags:</li>
                                    <li><a href="#">Consulting,</a></li>
                                    <li><a href="#">Business,</a></li>
                                    <li><a href="#">Seminar,</a></li>
                                </ul>
                                <div class="social-box pull-right">
                                <span>Share <i class="fa fa-share-alt"></i></span>
                                <ul class="list-inline social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                        
                    <div class="post-author">

                        <div class="inner-box">
                            <figure class="author-thumb"><img src="images/blog/author.jpg" alt=""></figure>
                            <h4>Mark Richardson</h4>
                                <div class=""><p>We will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p> 
                                <ul class="list-inline social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>                              
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>                               
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>                               
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-youtube"></i></a>                               
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        
                    <div class="product-review-tab">
                            
                        <div class="section-title">
                            <h3>read Comments</h3>
                        </div>
                        <div class="review-box">


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
                        <div class="add_your_review">
                            <div class="section-title">
                                <h3>Add Your comments</h3>
                            </div>

                            <span>Your Rating</span>
                            <ul class="rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <ul class="active rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <ul class="rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <ul class="rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <ul class="fix_border rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>

                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label>First Name*</label>
                                        <input type="text" placeholder="">
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <label>Last Name*</label>
                                        <input type="text" placeholder="">
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Email*</label>
                                        <input type="email" placeholder="">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <label>Your Comments*</label>
                                        <textarea placeholder=""></textarea>
                                    </div>
                                    
                                </div>
                                <button class="thm-btn thm-tran-bg tran3s">submit now</button>
                            </form>

                        </div> <!-- End of .add_your_review -->
                    </div>
                        

                </section>



            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="blog-sidebar">
                    <div class="sidebar_search">
                        <form action="#">
                            <input type="text" placeholder="Search....">
                            <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> <!-- End of .sidebar_styleOne -->

                    <div class="category-style-one">
                        <div class="inner-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="list">
                            <li><a href="#" class="clearfix"><span class="float_left">Business Growth </span><span class="float_right">(6)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Consulting </span><span class="float_right">(2)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Management  </span><span class="float_right">(5)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Customer Insights </span><span class="float_right">(10)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Organization  </span><span class="float_right">(4)</span></a></li>
                        </ul>
                    </div> <!-- End of .sidebar_categories -->

                    <div class="popular_news">
                        <div class="inner-title">
                            <h4>latest news</h4>
                        </div>

                        <div class="popular-post">
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="images/blog/post-1.jpg" alt=""></a></div>
                                <h4><a href="#">6 ways to keep in control <br>your debtors</a></h4>
                                <div class="post-info">October 21, 2016 </div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="images/blog/post-2.jpg" alt=""></a></div>
                                <h4><a href="#">What a finance director  <br>could add business </a></h4>
                                <div class="post-info">January 14, 2016</div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="images/blog/post-3.jpg" alt=""></a></div>
                                <h4><a href="#">Tips for sucess in 2016: Ways <br>to grow your business</a></h4>
                                <div class="post-info">December 17, 2015 </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-intsgram">
                        <div class="inner-title">
                            <h4>Instagram</h4>
                        </div>
                        <ul class="list-inline clearfix">
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i1.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i2.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i3.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i4.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i5.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i6.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="sidebar-archive">
                        <div class="inner-title">
                            <h4>Blog Archives</h4>
                        </div>
                        <select class="text-capitalize selectpicker" name="form_subject" class="form-control required" data-style="g-select" data-width="100%">
                            <option value="0" selected="">September</option>
                            <option value="1">August</option>
                            <option value="2">November</option>
                            <option value="3">December</option>
                        </select>
                    </div>

                    <div class="sidebar_tags wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="inner-title">
                            <h4>Tag Cloud </h4>

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
        </div>
    </div>
</div>


@include('layouts.default.footer')









