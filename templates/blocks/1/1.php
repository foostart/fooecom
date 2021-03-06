<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1.less', 'css/1.css');
    ?>
    <link href="css/1.css" rel="stylesheet" type="text/css"/>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script src="js/xzoom.min.js" type="text/javascript"></script>
    <script src="js/1_hover.js" type="text/javascript"></script>

</head>

<body>
    <div class="container">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="type-1">
                <div class="img-product demo">
                    <!--SLIDESHOW VERTICAL-->
                    <div class="swiper-container" id="swiper-vertical">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide active" data-img="images/product-1.jpg">
                                <img class="hover" src="images/product-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-5.jpg">
                                <img class="hover" src="images/product-5.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-6.png">
                                <img class="hover" src="images/product-6.png" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-4.png">
                                <img class="hover" src="images/product-4.png" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-1.jpg">
                                <img class="hover" src="images/product-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-5.jpg">
                                <img class="hover" src="images/product-5.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-6.png">
                                <img class="hover" src="images/product-6.png" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-4.png">
                                <img class="hover" src="images/product-4.png" alt=""/>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-button-next-1"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                        <div class="swiper-button-prev-1"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
                    </div>
                    <!--END SLIDESHOW VERTICAL-->

                    <!--IMAGE-->
                    <div class="img_page" id="myBtn">
                        <img id="main_img" src="images/product-1.jpg" class="xzoom" xoriginal="images/product-1.jpg"/>
                    </div>

                    <!--END IMAGE-->


                    <!--SLIDESHOW HORIZONTAL-->
                    <div class="swiper-container" id="swiper-horizontal">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide active" data-img="images/product-1.jpg">
                                <img class="hover" src="images/product-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-5.jpg">
                                <img class="hover" src="images/product-5.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-6.png">
                                <img class="hover" src="images/product-6.png" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-4.png">
                                <img class="hover" src="images/product-4.png" alt=""/>
                            </div>
                            <div class="swiper-slide active" data-img="images/product-1.jpg">
                                <img class="hover" src="images/product-1.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-5.jpg">
                                <img class="hover" src="images/product-5.jpg" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-6.png">
                                <img class="hover" src="images/product-6.png" alt=""/>
                            </div>
                            <div class="swiper-slide" data-img="images/product-4.png">
                                <img class="hover" src="images/product-4.png" alt=""/>
                            </div>
                        </div>
                        <div class="swiper-button-next-3"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                        <div class="swiper-button-prev-3"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>

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
                        loop: true,
                        direction: 'vertical',
                        spaceBetween: 10,
                        nextButton: '.swiper-button-next-1',
                        prevButton: '.swiper-button-prev-1',
                    });
                    var swiper3 = new Swiper('#swiper-horizontal', {
                        slidesPerView: 5,
                        spaceBetween: 10,
                        nextButton: '.swiper-button-next-3',
                        prevButton: '.swiper-button-prev-3',
                        loop: true,
                        breakpoints: {
                            1024: {
                                slidesPerView: 3,
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
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="" style="margin-top: 80px">
                <b> Name Product </b> <br>
                Price : ......
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

    <p style="width: 100%; padding: 150px 30px;"> Content </p>
    <p style="width: 100%; padding: 150px 30px;"> Content </p>
    <p style="width: 100%; padding: 150px 30px;"> Content </p>


</body>

<script>
    var x = $(".img-product").clone(true);

    x.find('.hover').removeClass().addClass('click');
    x.find('#main_img').removeClass();
    x.find('#main_img').removeAttr("id").attr("id", "main_img2");
    x.find('.click').click(function () {
        $('#main_img2').attr('src', $(this).attr('src'));
    });
    x.find('#swiper-vertical').removeAttr("id").attr("id", "swiper-vertical-2");
    x.find('.swiper-button-next-1').removeClass().addClass('swiper-button-next-2');
    x.find('.swiper-button-prev-1').removeClass().addClass('swiper-button-prev-2');

    x.find('#swiper-horizontal').removeAttr("id").attr("id", "swiper-horizontal-2");
    x.find('.swiper-button-next-3').removeClass().addClass('swiper-button-next-4');
    x.find('.swiper-button-prev-3').removeClass().addClass('swiper-button-prev-4');

    x.appendTo("#dialog-form");



    var get_img = $('.swiper-slide').data("img");

    $('.swiper-slide').hover(function () {
        get_img = $(this).data("img");
    });


    $(".modal-dialog").hover(function () {  
        new Swiper('#swiper-vertical-2', {
            slidesPerView: 4,
            loop: true,
            direction: 'vertical',
            spaceBetween: 10,
            nextButton: '.swiper-button-next-2',
            prevButton: '.swiper-button-prev-2'
        });
        new Swiper('#swiper-horizontal-2', {
            slidesPerView: 5,
            spaceBetween: 10,
            nextButton: '.swiper-button-next-4',
            prevButton: '.swiper-button-prev-4',
            loop: true,
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
    });

    $("#myBtn").click(function () {
        $('#main_img2').attr('src', get_img);

        $("#myModal").modal();
    });

    $(".swiper-slide").hover(function () {
        $(".swiper-slide").removeClass('active');
        $(this).addClass('active');

    });

    $(".xzoom").xzoom({zoomHeight: 400, zoomWidth: 500, tint: '#333', Xoffset: 15});

</script>
