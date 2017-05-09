<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery zoomIn Plugin Demos</title>

    <style>
        .zoomIn {
            display: inline-block;
            position: relative;
            border: 1px solid gray;
            overflow: hidden;
            cursor: pointer;
        }
        .zoomIn > img {
            max-height: 400px;
        }
    </style>
    
</head>
<body>
<img src="images/product-1.jpg" width="400" height="400">


<script src="js/jquery-2.1.4.min.js"></script>

<script src="js/zoomIn.js"></script>
<script>
    $(function () {
        $('img').zoomIn();
    });
</script>
</body>
</html>
