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
    $less->compileFile('less/12.less', 'css/12.css');
    ?>
    <link href="css/12.css" rel="stylesheet" type="text/css"/>

    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>    
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>


</head>

<body>
    <div class="type-12">
        <!--Back to top-->
        <button onclick="topFunction()" id="myBtn" title="Go to top"> 
            ^
        </button>
        <!--End Back to top-->

        <!--HEADER-->
        <div class="module-1">
            <!--LOGO-->
            <img src="images/logo.jpg" alt=""/>
            <!--END LOGO-->

            <!--BUTTON MENU-->
            <div class="btn-menu-main">
                <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
                <div class="clearfix"></div>
            </div>
            <!--END BUTTON MENU--> 

            <!--MENU-->
            <div class="menu">
                <ul class="nav-menu collapse collapse-top-menu">
                    <li class="item active"><a href="#"> Home </a></li>
                    <li class="item"><a href="#"> About </a></li>
                    <li class="item"><a href="#"> Mission </a></li>
                    <li class="item"><a href="#"> Membership </a></li>
                    <li class="item"><a href="#"> Contacts </a></li>
                    <div class="clearfix"></div>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!--END MENU-->
        </div>
        <!--END HEADER-->               


        <!--SLIDESHOW-->
        <div class="swiper-container">
            <!--SLIDE BANNER-->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="images/slide.jpg" alt=""/>
                    </a>                       
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="images/slide 2.jpg" alt=""/>
                    </a>                            
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="images/slide 3.jpg" alt=""/>
                    </a>                              
                </div>
            </div>
            <!--END SLIDE BANNER-->
            <!--ARROWS -->
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <!--END ARROWS-->
        </div>
        <!--END SLIDESHOW-->


        <div class="module-3">
            <div class="container content-3">
                <div class="col-md-4 col-xs-12 col-sm-4 col-xs-12">
                    <div class="title">
                        <h4>Line <br> Events
                            <div class="border"></div>
                        </h4>
                        <div class="icon">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="title">
                        <h4>Line <br> Events
                            <div class="border"></div>
                        </h4>
                        <div class="icon">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="title">
                        <h4>Line <br> Events
                            <div class="border"></div>
                        </h4>
                        <div class="icon">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="module-4">
            <div class="container content-4"> 
                <div class="title-4">
                    <h2> Meet Our Pastors Who Share God's Love </h2>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <img src="images/persion.jpg" alt=""/>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">                      
                        <h5> Mark Johnson</h5>                      
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>                  
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <img src="images/persion.jpg" alt=""/>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">                      
                        <h5> Mark Johnson</h5>                      
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>                  
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <img src="images/persion.jpg" alt=""/>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">                      
                        <h5> Mark Johnson</h5>                      
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>                  
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="module-5">
            <div class="container content-5">
                <div class="col-md-6">                 
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h3>I'm New Here</h3>
                    <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem.</p>
                </div>
                <div class="col-md-6">                 
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h3>I'm New Here</h3>
                    <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem.</p>
                </div>
                <div class="col-md-6">                 
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h3>I'm New Here</h3>
                    <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem.</p>
                </div>
                <div class="col-md-6">                 
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h3>I'm New Here</h3>
                    <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem.</p>
                </div>
            </div>
        </div>

        <div class="module-6">
            <div class="container content-6">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="title-6">
                            <h4> July 22
                                <div class="border"></div>
                            </h4>
                            <div class="dec-6">
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <h5>Read More</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="title-6">
                            <h4> July 22
                                <div class="border"></div>
                            </h4>
                            <div class="dec-6">
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <h5>Read More</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="title-6">
                            <h4> July 22
                                <div class="border"></div>
                            </h4>
                            <div class="dec-6">
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <h5>Read More</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="title-6">
                            <h4> July 22
                                <div class="border"></div>
                            </h4>
                            <div class="dec-6">
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <h5>Read More</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="title-6">
                            <h4> July 22
                                <div class="border"></div>
                            </h4>
                            <div class="dec-6">
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem.
                                </p>
                                <h5>Read More</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer">
            <div class="logo-footer">
                <img src="images/logo footer.jpg" alt=""/>
            </div>
            <div class="icon-footer">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            <p> @2014 | Policy </p>
            <p> WEbsite design By LIGHT </p>
        </div>
    </div>

</body>
<script>


    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>

<script>
// When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

// When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<script src="js/12.js" type="text/javascript"></script>
