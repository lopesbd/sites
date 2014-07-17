<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Martinelli Motos</title>

        <meta name="description" content="">
        <meta name="author" content="">
        <!--[if !lte IE 6]><!-->
        <link rel="stylesheet" href="css/styleMotocicletas.css" media="screen" />
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />


        <!-- [I] Bootstrap -->

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--link rel="stylesheet/less" href="boot/less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="boot/less/responsive.less" type="text/css" /-->
        <!--script src="boot/js/less-1.3.3.min.js"></script-->
        <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

        <link href="boot/css/bootstrap.min.css" rel="stylesheet">
        <link href="boot/css/style.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="boot/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="boot/img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="boot/img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="boot/img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="boot/img/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="img/favicon.png">

        <script type="text/javascript" src="boot/js/jquery.min.js"></script>
        <script type="text/javascript" src="boot/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="boot/js/scripts.js"></script>


        <!-- [F] Bootstrap -->    
    </head>
    <body>
        <div id="corpo">
            <?php include_once 'topo.php'; ?>

            <div id="banner">
                <img src="mimg/bannerMotocicletas.png" width="980px">
            </div>
            <div id="separador"></div>
            <div id="txt">
                <div id="migalhas"><a href="javascript:window.history.go(-1)"> << ANTERIOR</a> | <a href="index.php">PÁGINA INICIAL</a> </div>
                <h1>MODELOS</h1>
                <hr>
                <?php
                include_once 'controller/motos.php';
                ?>
            </div>

<?php include_once 'rodape.php'; ?>
        </div>



    </body>
</html>