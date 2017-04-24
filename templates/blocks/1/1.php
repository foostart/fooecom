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
                            <div class="swiper-slide active">
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
                    <div class="img_page" id="myBtn">
                        <img id="main_img" src="images/phone-1.jpg" class="xzoom" xoriginal="images/phone-1.jpg"/>
                    </div>

                    <!--END IMAGE-->


                    <!--SLIDESHOW HORIZONTAL-->
                    <div class="swiper-container" id="swiper-horizontal">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide active">
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
                            </div>
                        </div>
                    </div>
                </div>

                <!--END CLICK ZOOM-->

                <!--SCRIPT SLIDESHOW-->
                <script>
                    var swiper = new Swiper('#swiper-vertical', {
                        slidesPerView: 4,

                        direction: 'vertical',
                        spaceBetween: 10,
                    });
                    var swiper3 = new Swiper('#swiper-horizontal', {
                        slidesPerView: 5,
                        spaceBetween: 10,
                        breakpoints: {
                            1024: {
                                slidesPerView: 4,
                                spaceBetween: 10
                            },
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 10
                            },
                        }
                    });

                </script>
                <!--END SCRIPT SLIDESHOW-->
            </div>  
        </div>
        <div class="col-md-8">
            <div class="" style="margin-top: 80px">
                demo demo demo
            </div>

        </div>


</body>

<script>
    $("#myBtn").click(function () {
        new Swiper('#swiper-vertical-2', {
            slidesPerView: 4,
            direction: 'vertical',
            spaceBetween: 10,
        });

        new Swiper('#swiper-horizontal-2', {
            slidesPerView: 5,
            spaceBetween: 10,
            breakpoints: {
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
            }
        });
        $("#myModal").modal();
    });

    var x = $(".img-product").clone(true);
    x.find('.hover').removeClass().addClass('click');
    x.find('#main_img').removeAttr("id").attr("id", "main_img2");
    x.find('.click').hover(function () {
        $('#main_img2').attr('src', $(this).attr('src'));
    });
    x.find('#swiper-vertical').removeAttr("id").attr("id", "swiper-vertical-2");
    x.find('#swiper-horizontal').removeAttr("id").attr("id", "swiper-horizontal-2");
    x.appendTo("#dialog-form");

    $(".swiper-slide").hover(function () {
        $(".swiper-slide").removeClass('active');
        $(this).addClass('active');
    });

    $(".xzoom").xzoom({zoomHeight: 600, zoomWidth: 500, tint: '#333', Xoffset: 15});

</script>
