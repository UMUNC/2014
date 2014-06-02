<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Blogs | Invitation</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/headers/header1.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.css">
    <!-- CSS Page Style -->
    <link rel="stylesheet" href="../assets/css/pages/blog.css">
    <!-- CSS Theme -->
    <link rel="stylesheet" href="../assets/css/themes/blue.css" id="style_color">
    <link rel="stylesheet" href="../assets/css/themes/headers/header1-blue.css" id="style_color-header-1">
</head>

<body>

<!--=== Top ===-->
<div class="top">
    <div class="container">
        <ul class="loginbar pull-right">
            <li>
                Tech Support: <a href="mailto:support@umunc.com">support@umunc.com</a>
            </li>
        </ul>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
<div class="header">
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img id="logo-header" src="../assets/img/logo-umunc.png" alt="Logo" width="170" height="80">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">
                        <a href="index.php">
                            Blogs
                        </a>
                    </li>
                    <li>
                        <a href="../about.php">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="../history.php">
                            History
                        </a>
                    </li>
                    <li>
                        <a href="../tech.php">
                            Tech
                        </a>
                    </li>
                </ul>
            </div><!-- /navbar-collapse -->
        </div>
    </div>
</div><!--/header-->
<!--=== End Header ===-->


<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40" style="background: #585f69;">
    <div class="container">
        <h1 style="color: #fff;" class="pull-left">Blogs & Updates</h1>
        <ul class="pull-right breadcrumb">
            <li></li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container content blog-page blog-item">
    <!--Blog Post-->
    <div class="blog margin-bottom-40">
        <h2 style="font-size: 30px;"><a href="invitation.php">UMUNC 2014年度会议 邀请函</a></h2>
        <div class="blog-post-tags">
            <ul class="list-unstyled list-inline blog-info">
                <li><i class="fa fa-calendar"></i> March 10, 2014</li>
                <li><i class="fa fa-pencil"></i> UMUNC</li>
            </ul>
        </div>
        <p style="font-size: 16px;">

        </p>
        <div class="blog-img">
            <img class="img-responsive" src="assets/img/invitation/1.jpg">
        </div>
    </div>
    <!--End Blog Post-->

</div><!--/container-->
<!--=== End Content Part ===-->

<?php include("footer.html") ?>

<!-- JS Global Compulsory -->
<script type="text/javascript" src="../assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="../assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="../assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
<script src="../assets/plugins/respond.js"></script>
<![endif]-->

<!-- Custom JavaScript -->
<script type="text/javascript">
    $(document).ready(function(){
        // Popover barcode
        var img = "<img src='../assets/img/wechat-barcode.jpg' alt='WeChat Barcode' class='img-responsive' width='344' height='344'>";

        var barcode = $("#barcode");
        barcode.popover({container: 'body' ,content: img, html: true, placement: 'top', trigger: 'hover', delay: {show: 500, hide: 100}});
    });
</script>

</body>
</html>	