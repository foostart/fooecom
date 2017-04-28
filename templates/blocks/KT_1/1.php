<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1.less', 'css/1.css');
    ?>
    <link href="css/1.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="type-1">
        <div class="container">
            <!--TOP MENU-->
            <div class="module-1">
                <div class="content-1">
                    <div class="arrow-left"></div>
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <input type="text" name="search" placeholder="Search..">
                    <div class="menu-small">

                        <li><a href="#">Account</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Log In</a></li>
                        <li><a href="#">Resgister</a></li>
                        <div class="cart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <p>Cart Empty</p>
                        </div>
                        <div class="language">
                            <p>Select Language</p>
                            <img src="images/usa.png" alt=""/>
                            <img src="images/usa.png" alt=""/>

                        </div>

                        <div class="clearfix">
                        </div>


                    </div>


                </div>
                <!--END TOP MENU-->
            </div>
            <!--MENU-->
            <div class="module-2">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="menu-home" >
                    <div class="container">
                        <!--LOGO-->
                        <div class="logo">
                            <a href="#">
                                <a href=""><img src="images/logo.jpg" alt=""></a>
                            </a>
                        </div>
                        <!--/END LOGO-->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <!--MENU DROP DOWN-->
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Joomla</a></li>
                                <li><a href="#">Preset</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="clearfix"></div>
            </div>
            <!--END MENU-->

            <!--SLIDE-->

            <div class="module-3">
                <div class="swiper-container" id="horizontal">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/hinh.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/hinh2.jpg" alt=""/>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/hinh3.jpg" alt=""/>
                        </div>

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="content-3">
                    <h1>best <div class="green"> shop </div>  </h1>
                    <div class="border-h3">
                        <h3>Best Ecomerce Ready Template</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pede magna rutrum mauris erat elit litora. Justo massa a turpis iaculis mus accumsan? Per aptent hendrerit dignissim torquent ut ullamcorper?</p>
                </div>
            </div>
            <!--END SLIDE-->

            <!--SALE-->
            <div class="module-4">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="blocks">
                            <div class="col-md-6">
                                <h1>80%</h1>
                                <p> Discount Off </p>
                            </div>
                            <div class="col-md-6">
                                <img src="images/sale1.jpg" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="blocks">
                            <div class="col-md-6">
                                <h1>80%</h1>
                                <p> Discount Off </p>
                            </div>
                            <div class="col-md-6">
                                <img src="images/sale1.jpg" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="blocks">
                            <div class="col-md-6">
                                <img src="images/sale1.jpg" alt=""/>
                            </div>
                            <div class="col-md-6">
                                <div class="sale">
                                    <p>50% Offer</p>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>


                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--END SALE-->

            <!--PRODUCT-->
            <div class="module-5">
                <div class="row">

                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="product">
                            <div class="title-5">                          
                                Featured Product
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="product-detail">
                                    <div class="img-hover">
                                        <img src="images/product1.jpg" class="img-main"/>
                                        <img src="images/product1-1.jpg" class="img-thumb"/>
                                    </div>
                                    <div class="dec">
                                        <p>Shoes</p>
                                        <h4>$ 100.000.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="product-detail">
                                    <div class="img-hover">
                                        <img src="images/product1.jpg" class="img-main"/>
                                        <img src="images/product1-1.jpg" class="img-thumb"/>
                                    </div>
                                    <div class="dec">
                                        <p>Shoes</p>
                                        <h4>$ 100.000.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="product-detail">
                                    <div class="img-hover">
                                        <img src="images/product1.jpg" class="img-main"/>
                                        <img src="images/product1-1.jpg" class="img-thumb"/>
                                    </div>
                                    <div class="dec">
                                        <p>Shoes</p>
                                        <h4>$ 100.000.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="product-detail">
                                    <div class="img-hover">
                                        <img src="images/product1.jpg" class="img-main"/>
                                        <img src="images/product1-1.jpg" class="img-thumb"/>
                                    </div>
                                    <div class="dec">
                                        <p>Shoes</p>
                                        <h4>$ 100.000.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="product-detail">
                                    <div class="img-hover">
                                        <img src="images/product1.jpg" class="img-main"/>
                                        <img src="images/product1-1.jpg" class="img-thumb"/>
                                    </div>
                                    <div class="dec">
                                        <p>Shoes</p>
                                        <h4>$ 100.000.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="product-detail">
                                    <div class="img-hover">
                                        <img src="images/product1.jpg" class="img-main"/>
                                        <img src="images/product1-1.jpg" class="img-thumb"/>
                                    </div>
                                    <div class="dec">
                                        <p>Shoes</p>
                                        <h4>$ 100.000.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="infor">
                            <div class="title-5">                          
                                Category
                            </div>
                            <div class="show-infor">
                                <div class="section faq-area">
                                    <div class="panel5">
                                        <div class="panel-heading-5">
                                            <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-0">Accessories</a>
                                            </h5>
                                        </div>
                                        <div id="faq-0" class="panel-collapse collapse">
                                            <div class="panel-body">                           
                                                <p>Aenean id aliquam velit, eget consequat neque.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel5">
                                        <div class="panel-heading-5">
                                            <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-1">Accessories</a>
                                            </h5>
                                        </div>
                                        <div id="faq-1" class="panel-collapse collapse">
                                            <div class="panel-body">                           
                                                <p>Aenean id aliquam velit, eget consequat neque.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel5">
                                        <div class="panel-heading-5">
                                            <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-2">Accessories</a>
                                            </h5>
                                        </div>
                                        <div id="faq-2" class="panel-collapse collapse">
                                            <div class="panel-body">                           
                                                <p>Aenean id aliquam velit, eget consequat neque.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="email">
                            <div class="title-5">                          
                                NewsLetter
                            </div>
                            <div class="show-infor">
                                <p>Ready to get....</p>
                                <p>Enter Email</p>

                                <input type="text" name="email" placeholder="Email Address" class="simple-input">
                                <div class="btn-sub">
                                    SUBSCRIBE
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END PRODUCT-->

            <!--FOOTER-->
            <div class="module-6">
                <div class="arrow-left"></div>
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="about">
                        <h3> About Us </h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                        <p>
                            Phone : + 01234567
                        </p>
                        <p>
                            Fax: + 0987654
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="Link">
                        <h3> USEFUL LINK </h3>

                        <li>Content content 1</li>
                        <li>Content content 1</li>
                        <li>Content content 1</li>
                        <li>Content content 1</li>
                        <li>Content content 1</li>

                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="Link">
                        <h3> USEFUL LINK </h3>

                        <li>Content content 1</li>
                        <li>Content content 1</li>
                        <li>Content content 1</li>
                        <li>Content content 1</li>
                        <li>Content content 1</li>


                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="photo">
                        <h3> PHOTO </h3>
                        <div class="row">
                            <div class="col-md-4 col-xs-4">
                                <img src="images/product1-1.jpg" alt=""/>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <img src="images/product1.jpg" alt=""/>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <img src="images/product1-1.jpg" alt=""/>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <img src="images/product1.jpg" alt=""/>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <img src="images/product1-1.jpg" alt=""/>
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <img src="images/product1.jpg" alt=""/>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="footer">
                    <div class="title-6">
                        @2014 Web design By Web
                    </div>
                    <div class="logo">
                        <img src="images/logo-footer.jpg" alt=""/>
                        <img src="images/logo-footer.jpg" alt=""/>
                        <img src="images/logo-footer.jpg" alt=""/>
                        <img src="images/logo-footer.jpg" alt=""/>
                        <img src="images/logo-footer.jpg" alt=""/>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
            <!--END FOOTER-->

        </div>

        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                slidesPerView: 1,
                spaceBetween: 0,
            });
        </script>
</body>
