<!DOCTYPE html>

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
    <script src="js/xzoom.min.js" type="text/javascript"></script>
    <script src="js/jquery.fancybox.js" type="text/javascript"></script>
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="type-1">
        <div class="container">
            <!-- default start -->
            <section>
                <div class="row">
                    <div class="col-md-12"><h3>Zoom Image</h3></div>
                    <div class="col-md-5">
                        <div class="xzoom-container">
                            <img class="xzoom" id="xzoom-fancy" src="images/preview/01_b_car.jpg" xoriginal="images/original/01_b_car.jpg" />
                            <div class="xzoom-thumbs">
                                <a href="images/original/01_b_car.jpg"><img class="xzoom-gallery xactive" width="80" src="images/thumbs/01_b_car.jpg" xpreview="images/preview/01_b_car.jpg"></a>
                                <a href="images/original/02_o_car.jpg"><img class="xzoom-gallery" width="80" src="images/preview/02_o_car.jpg"></a>
                                <a href="images/original/03_r_car.jpg"><img class="xzoom-gallery" width="80" src="images/preview/03_r_car.jpg"></a>
                                <a href="images/original/04_g_car.jpg"><img class="xzoom-gallery" width="80" src="images/preview/04_g_car.jpg"></a>
                            </div>
                        </div>        
                    </div>
                    <div class="col-md-7">
                        demo demo demo demo demo demo
                    </div>
                </div>
            </section>
            <!-- default end -->
        </div>

        <script>
            (function ($) {
                $(document).ready(function () {
                    $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});

                    //Integration with hammer.js
                    var isTouchSupported = 'ontouchstart' in window;

                    if (isTouchSupported) {
                        //If touch device
                        $('.xzoom').each(function () {
                            var xzoom = $(this).data('xzoom');
                            xzoom.eventunbind();
                        });

                        $('.xzoom').each(function () {
                            var xzoom = $(this).data('xzoom');
                            $(this).hammer().on("tap", function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                var s = 1, ls;

                                xzoom.eventmove = function (element) {
                                    element.hammer().on('drag', function (event) {
                                        event.pageX = event.gesture.center.pageX;
                                        event.pageY = event.gesture.center.pageY;
                                        xzoom.movezoom(event);
                                        event.gesture.preventDefault();
                                    });
                                }

                                var counter = 0;
                                xzoom.eventclick = function (element) {
                                    element.hammer().on('tap', function () {
                                        counter++;
                                        if (counter == 1)
                                            setTimeout(openfancy, 300);
                                        event.gesture.preventDefault();
                                    });
                                }

                                function openfancy() {
                                    if (counter == 2) {
                                        xzoom.closezoom();
                                        $.fancybox.open(xzoom.gallery().cgallery);
                                    } else {
                                        xzoom.closezoom();
                                    }
                                    counter = 0;
                                }
                                xzoom.openzoom(event);
                            });
                        });


                    } else {
                        //If not touch device
                        //Integration with fancybox plugin
                        $('#xzoom-fancy').bind('click', function (event) {
                            var xzoom = $(this).data('xzoom');
                            xzoom.closezoom();
                            $.fancybox.open(xzoom.gallery().cgallery, {padding: 0, helpers: {overlay: {locked: false}}});
                            event.preventDefault();
                        });
                    }
                });
            })(jQuery);
        </script>
    </div>
</body>




