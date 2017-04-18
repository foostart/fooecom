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
    $less->compileFile('less/type-3.less', 'css/type-3.css');
    ?>
    <link href="css/type-3.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
</head>

<body>
    <div class="type-">
        <div class="container">

       
            
            
        </div>
    </div>
</body>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
