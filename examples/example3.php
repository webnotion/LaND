<?php include '../config.php' ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en" xmlns:ng="http://angularjs.org"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7 lt-ie9 lt-ie8" lang="en" xmlns:ng="http://angularjs.org"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8 lt-ie9" lang="en" xmlns:ng="http://angularjs.org"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lt-ie10" lang="en" xmlns:ng="http://angularjs.org"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>LaND</title>
    <meta name="description" content="A website" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="fragment" content="!" />

    <?php include '../land.php'; ?>
    <?php include '../air.php'; ?>

    <link rel="stylesheet" type="text/css" media="all" href="/assets/css/site.css" />
</head>
<body class="">
    <div class="LaND-container center">
        <h1 class="col s-text-center">
            Adaptive Image Requests
        </h1>

        <div class="col s-text-center s-pad-0">
            <?php air(
                'col s-pad-0',
                's-fill',
                ROOT.'assets/images/test_images/balloon_1150x575.jpg',
                array(
                    '320' => ROOT.'assets/images/test_images/balloon_320x160.jpg',
                    '640' => ROOT.'assets/images/test_images/balloon_640x320.jpg',
                    '960' => ROOT.'assets/images/test_images/balloon_960x480.jpg'
                ),
                ROOT.'assets/images/2x1.gif',
                'This is AIR'
            ); ?>
        </div>
        <div class="col s-1-2 s-text-left"><a href="example2.php">previous</a></div>
        <div class="col s-1-2 s-text-right"><a href="example4.php">next</a></div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <?php air_includes(); ?>
</body>
</html>