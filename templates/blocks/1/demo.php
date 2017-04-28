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
    <script src="js/jquery.zoom.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.zoom.js" type="text/javascript"></script>
    <style>
        .zoom {
            display:inline-block;
            position: relative;
        }
        .zoom:after {
            content:'';
            display:block; 
            width:33px; 
            height:33px; 
            position:absolute; 
            top:0;
            right:0;
        }
        .zoom img {
            display: block;
        }
        .zoom:hover {
            cursor: zoom-out;
        }
        .zoomed {
            cursor: zoom-in !important;
        }
        img{
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-4">
            <div class='zoom'>
                <img src="images/product-1.jpg" alt=""/>
            </div>
        </div>

    </div>
</body>

<script>
    $(document).ready(function () {
        $('.zoom').zoom({on: 'click'});
        var clicked = false;
        $(".zoom").hover(function () {
            if ($(this).hasClass("zoomed")) {
                $(this).removeClass("zoomed");
            } else {
                $(this).addClass("zoomed");
            }
        });
        $(".zoom").click(function () {
            if ($(this).hasClass("zoomed")) {
                $(this).removeClass("zoomed");
            } else {
                $(this).addClass("zoomed");
            }
        });
    });
</script>
