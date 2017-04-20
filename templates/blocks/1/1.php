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

    
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script src="js/xzoom.min.js" type="text/javascript"></script>
    <script src="js/1.js" type="text/javascript"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="type-1">
                <div class="img-product">


                    <!--SLIDESHOW VERTICAL-->
                    <div class="swiper-container" id="swiper-vertical">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-2.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-3.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-4.jpg" alt=""/>
                            </div>

                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-2.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-3.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-4.jpg" alt=""/>
                            </div>

                        </div>
                        <!-- Add Pagination -->

                    </div>
                    <!--END SLIDESHOW VERTICAL-->

                    <!--IMAGE-->
                    <div class="img_page">
                        <img id="main_img" src="images/phone-1.jpg" class="xzoom" xoriginal="images/phone-1.jpg" data-toggle="modal" data-target="#myModal"/>
                    </div>

                    <!--END IMAGE-->


                    <!--SLIDESHOW HORIZONTAL-->
                    <div class="swiper-container" id="swiper-horizontal">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-2.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-3.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-4.jpg" alt=""/>
                            </div>

                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-2.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-3.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide">
                                <img class="hover" src="images/phone-4.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <!--END SLIDESHOW HORIZONTAL-->
                    <div class="clearfix"></div>
                </div>
                <!--CLICK ZOOM-->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                             
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div id="dialog-form">

                                </div>
                                <script>

                                </script>
                            </div>
                        </div>
                    </div>
                </div>


                <!--END CLICK ZOOM-->

                <!--SCRIPT SLIDESHOW-->
                <script>
                    var swiper = new Swiper('#swiper-vertical', {
                        slidesPerView: 4,
                        spaceBetween: 30,
                        direction: 'vertical',
                        spaceBetween: 10,
                    });
                    var swiper = new Swiper('#swiper-horizontal', {
                        pagination: '.swiper-pagination',
                        paginationClickable: true,
                        slidesPerView: 5,
                        spaceBetween: 10,
                        breakpoints: {
                            1024: {
                                slidesPerView: 4,
                                spaceBetween: 10
                            },
                        }
                    });
                </script>
                <!--END SCRIPT SLIDESHOW-->
            </div>  
        </div>
        <div class="col-md-8">
            <div class="">
                demo demo demo
            </div>

        </div>


</body>

<script>
    $(".xzoom").xzoom({zoomHeight: 600, zoomWidth: 500, tint: '#333', Xoffset: 15});
    var x = $(".img-product").clone();
    x.appendTo("#dialog-form");

    function demo() {
        var y = $('.modal-header').find('#dialog-form').length;
        alert(y);
    }

</script>
