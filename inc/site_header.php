<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("location:index.php");
}

require 'lang.php';

include("admin/fun/connect.php");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="https://web.whatsapp.com/"><i class="fa fa-phone"></i> +20 10 25 094 298</a></li>
                                <li><a href="https://www.gmail.com/"><i class="fa fa-envelope"></i> om92946@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="home.php"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    <b style="color:#363432;">language</b>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="home.php?lang=en"><b>English</b> <img src="images/Flag_of_the_United_States.svg" style="width:20px;height:20px;margin-left:44px;"> </a></li>
                                    <li><a href="home.php?lang=ar"><b>Arabic</b> <img src="images/Flag_of_Egypt.svg" style="width:20px;height:12px;margin-left:50px;"> </a></li>
                                    <li><a href="home.php?lang=ge"><b>Germany</b> <img src="images/Flag_of_Germany.svg" style="width:20px;height:20px;margin-left:34px;"> </a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    <b style="color:#363432;">Dollar</b>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><b>Dollar</b></a></li>
                                    <li><a href="#"><b>Pound</b></a></li>
                                    <li><a href="#"><b>Euro</b></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.linkedin.com/"><i class="fa fa-user"></i><?= __('Account') ?> </a></li>
                                <li><a href="checkout.php"><i class="fa fa-crosshairs"></i><?= __('Checkout') ?> </a></li>
                                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> <?= __('Cart') ?></a></li>
                                <li><a href="logout.php"><i class="fa fa-lock"></i> <?= __('Login') ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="home.php" class="active"><?= __('Home') ?></a></li>
                                <li class="dropdown"><a href="#"><?= __('Shop') ?><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php"><?= __('Products') ?></a></li>
                                        <li><a href="product-details.php"><?= __('Product Details') ?></a></li>
                                        <li><a href="checkout.php"><?= __('Checkout') ?></a></li>
                                        <li><a href="cart.php"><?= __('Cart') ?></a></li>
                                        <li><a href="logout.php"><?= __('Login') ?></a></li>
                                    </ul>
                                </li>

                                <li><a href="contact-us.php"><?= __('Contact') ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="<?= __('Search') ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->