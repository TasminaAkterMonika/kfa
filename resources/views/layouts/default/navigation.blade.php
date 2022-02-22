
        <header class="header-area">
            <div class="top-bar">
                <div class="container">
                    <div class="clearfix">
                        <ul class="top-bar-text float_left">
                            <li><i class="fa fa-map-signs"></i>234, Triumph St, Los Angeles, California, US.</li>
                            <li><i class="fa fa-clock-o"></i>Mon - Satday: 9.00 am to 6.00 pm.</li>
                        </ul>
                        <ul class="social float_right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <div id="polyglotLanguageSwitcher" class="float_right">
                            <form action="#">
                                <select id="polyglot-language-options">
                            <option id="en" value="en" selected>English</option>
                            <option id="fr" value="fr">French</option>
                            <option id="de" value="de">German</option>
                            <option id="it" value="it">Italian</option>
                            <option id="es" value="es">Spanish</option>
                        </select>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-bottom-bg clearfix">
                        <div class="main-logo float_left">
                            <a href="index.html"><img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" alt="" height="100%" width="100%"></a>
                        </div>
                        <div class="top-info float_right">
                            <ul>
                                <li class="single-info-box">
                                    <div class="icon-holder">
                                        <span class="icon-technology"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p><span>Call Us Now</span><br>1800-45-678-9012</p>
                                    </div>
                                </li>
                                <li class="single-info-box">
                                    <div class="icon-holder">
                                        <span class="icon-multimedia"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p><span>Send Mail Us</span> <br>Info@domainname.com</p>
                                    </div>
                                </li>
                                <li class="link_btn">
                                    <a href="#" class="thm-btn-tr">CONSULTATION</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </header>

        <!-- Menu ******************************* -->
        <section class="theme_menu stricky">
            <div class="container">
                <div class="menu-bg">
                    <div class="row">
                        <div class="col-md-9 menu-column">
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">

                                        <li class="home"><a href="index.html"><span class="fa fa-home"></span></a></li>

                                        <li class="dropdown"><a href="#">About us</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('about') }}">About Company</a></li>
                                                <li><a href="{{route('meet.our.team')}}">Meet Our Team</a></li>
                                                <li><a href="{{route('faq.s')}}">FAQ’s</a></li>
                                                <li><a href="{{route('testimonial.s')}}">Testimonials</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown"><a href="{{route('services')}}">services</a>
                                            <ul class="submenu">
                                                @foreach(DB::TABLE('our_service')->where('status', 1)->orderBy('id', 'DESC')->get() AS $row)
                                                <li><a href="{{route('service.details',$row->id)}}">{{ $row->service_name }}</a></li>
                                                @endforeach
                                            </ul>

                                        </li>

                                        <li class="dropdown"><a href="{{route('blogs')}}">blog</a>
                                          
                                          
                                        </li>
                                        <li class="dropdown"><a href="{{route('projects')}}">PROJECTS</a>
                                            
                                        </li>

                                        <li class="dropdown"><a href="{{route('shops')}}">SHOP</a>
                                            {{-- <ul class="submenu">
                                                <li><a href="shop.html">Shop Products</a></li>
                                                <li><a href="shop-single.html">Product Detail Page</a></li>
                                                <li><a href="shop-cart.html">View Shopping Items</a></li>
                                                <li><a href="checkout.html">Checkout Your Page</a></li>
                                                <li><a href="account.html">Login or Register</a></li>
                                            </ul> --}}

                                        </li>

                                        <li><a href="contact.html">CONTACT US</a></li>




                                    </ul>
                                    <ul class="mobile-menu clearfix">

                                        <li class="home"><a href="index.html"><span class="fa fa-home"></span></a></li>

                                        <li class="dropdown"><a href="#">About us</a>
                                            <ul>
                                                <li><a href="about.html">About Company</a></li>
                                                <li><a href="team.html">Meet Our Team</a></li>
                                                <li><a href="faq.html">FAQ’s</a></li>
                                                <li><a href="testimonials.html">Testimonials</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown"><a href="servie.html">services</a>
                                            <ul>
                                                <li><a href="business-growth.html">Business Growth</a></li>
                                                <li><a href="sustainability.html">Sustainability</a></li>
                                                <li><a href="performance.html">Performance</a></li>
                                                <li><a href="advanced-analytics.html">Advanced Analytics</a></li>
                                                <li><a href="organization.html">Organization</a></li>
                                                <li><a href="customer-insights.html">Customer Insights</a></li>
                                            </ul>

                                        </li>

                                        <li class="dropdown"><a href="#">blog</a>
                                            <ul>
                                                <li><a href="blog-default.html">Blog Default</a></li>
                                                <li><a href="blog-large.html">Blog Large Image</a></li>
                                                <li><a href="blog-details.html">Blog Single Post</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">PROJECTS</a>
                                            <ul>
                                                <li><a href="projects.html">Our Projects</a></li>
                                                <li><a href="projects-single.html">Projects Single</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown"><a href="#">SHOP</a>
                                            <ul>
                                                <li><a href="shop.html">Shop Products</a></li>
                                                <li><a href="shop-single.html">Product Detail Page</a></li>
                                                <li><a href="shop-cart.html">View Shopping Items</a></li>
                                                <li><a href="checkout.html">Checkout Your Page</a></li>
                                                <li><a href="account.html">Login or Register</a></li>
                                            </ul>

                                        </li>

                                        <li><a href="contact.html">CONTACT US</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- End of #main_menu -->
                        </div>
                        <div class="right-column">
                            <div class="right-area">
                                <div class="nav_side_content">
                                    <div class="select-box">
                                        <select name="branceh" class="selectpicker">
                                    <option>Los Angeles Branch</option>
                                    <option>San Fransisco Branch</option>
                                    <option>Chicago Branch</option>
                                    <option>San Jose Branch</option>
                                    <option>Newyork City Branch</option>
                                </select>
                                    </div>
                                    <div class="search_option">
                                        <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                            <input type="text" placeholder="Search...">
                                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End of .conatiner -->
        </section>
        <!-- End of .theme_menu -->