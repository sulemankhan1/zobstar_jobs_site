<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/zobstar/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2020 14:36:30 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zobstar - Job Board  HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/line-awesome.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/daterangepicker.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/jquery-ui.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/jquery.filer.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/jquery.filer-dragdropbox-theme.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/select2.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/nice-select.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/custom.css')?>">
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
</head>
<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-circle">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
</div>
<!-- end per-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area header-desktop">
    <div class="header-menu-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="index.html"><img src="<?=base_url('assets/images/logo2.png')?>" alt="logo"></a>
                        </div><!-- end logo -->
                        <div class="logo-right-content">
                            <div class="header-action-button d-flex align-items-center">
                                <div class="notification-wrap d-flex align-items-center">
                                    <div class="notification-item mr-3">
                                        <div class="dropdown">
                                            <button class="notification-btn dropdown-toggle" type="button" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="la la-bell"></i>
                                                <span class="quantity">5</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="notificationDropdownMenu">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title">
                                                        <h4 class="widget-title d-flex align-items-center justify-content-between">Notifications<a href="#" class="font-size-12 color-text-3">Mark all as read</a></h4>
                                                        <p class="mt-1 font-size-12 font-weight-medium">You have 5 Notifications</p>
                                                    </div><!-- end mess__title -->
                                                    <div class="mess__body">
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-bolt"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Your Resume Updated!</p>
                                                                    <span class="time">5 hours ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-lock"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">You changed password</p>
                                                                    <span class="time">2 day ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-check-circle"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                                                    <span class="time">1 day ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-user"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Your account has been created successfully</p>
                                                                    <span class="time">1 minute ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-download"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Someone downloaded resume</p>
                                                                    <span class="time">Yesterday</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                    </div><!-- end mess__body -->
                                                    <div class="mess__item border-bottom-0 text-center">
                                                        <a href="#" class="theme-btn w-100">View All Notifications</a>
                                                    </div><!-- end mess__item -->
                                                </div><!-- end mess-dropdown -->
                                            </div><!-- end dropdown-menu -->
                                        </div><!-- end dropdown -->
                                    </div>
                                    <div class="notification-item mr-3">
                                        <div class="dropdown">
                                            <button class="notification-btn dropdown-toggle" type="button" id="messageDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="la la-envelope"></i>
                                                <span class="quantity">5</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="messageDropdownMenu">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title">
                                                        <h4 class="widget-title d-flex align-items-center justify-content-between">Message <a href="#" class="font-size-12 color-text-3">Mark all as read</a></h4>
                                                        <p class="mt-1 font-size-12 font-weight-medium">You have 5 new messages</p>
                                                    </div><!-- end mess__title -->
                                                    <div class="mess__body">
                                                        <a href="employer-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status">
                                                                    <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Michelle Moreno</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">5 min ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="employer-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status online-status">
                                                                    <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Alex Smith</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">2 days ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="employer-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status">
                                                                    <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Michelle Moreno</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">5 min ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="employer-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status online-status">
                                                                    <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Alex Smith</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">2 days ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="employer-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status">
                                                                    <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Alex Smith</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">2 days ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                    </div><!-- end mess__body -->
                                                    <div class="mess__item border-bottom-0 text-center">
                                                        <a href="#" class="theme-btn w-100">View All Messages</a>
                                                    </div><!-- end mess__item -->
                                                </div><!-- end mess-dropdown -->
                                            </div><!-- end dropdown-menu -->
                                        </div><!-- end dropdown -->
                                    </div>
                                </div>
                                <div class="user-action-wrap">
                                    <div class="notification-item">
                                        <div class="dropdown">
                                            <button class="notification-btn dot-status online-status dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="<?=base_url('assets/images/company-logo.jpg')?>" alt="Bluetech,Inc">
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title d-flex align-items-center">
                                                        <div class="image dot-status online-status">
                                                            <a href="#">
                                                                <img src="<?=base_url('assets/images/company-logo.jpg')?>" alt="Bluetech,Inc">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="widget-title font-size-16">
                                                                <a href="#">Bluetech, Inc</a>
                                                            </h4>
                                                            <span class="email">bluetechinc@example.com</span>
                                                        </div>
                                                    </div><!-- end mess__title -->
                                                    <div class="mess__body">
                                                        <ul class="list-items">
                                                            <li class="mb-0">
                                                                <a href="employer-dashboard.html" class="d-block">
                                                                    <i class="la la-user"></i> Account
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="<?php site_url("admin/post-job")?>" class="d-block">
                                                                    <i class="la la-plus"></i> Post a Job
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="employer-dashboard.html" class="d-block">
                                                                    <i class="la la-question"></i> Help
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="employer-dashboard.html" class="d-block">
                                                                    <i class="la la-gear"></i> Settings
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="<?php site_url("/")?>" class="d-block">
                                                                    <i class="la la-power-off"></i> Logout
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end mess__body -->
                                                </div><!-- end mess-dropdown -->
                                            </div><!-- end dropdown-menu -->
                                        </div><!-- end dropdown -->
                                    </div>
                                </div>
                            </div>
                            <div class="menu-toggler d-flex align-items-center">
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div><!-- end side-menu-open -->
                                <div class="user-menu-open">
                                    <i class="la la-user"></i>
                                </div><!-- end user-menu-open -->
                            </div>
                        </div><!-- end logo-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->

    <div class="user-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="user-panel-nav">
            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification-home" role="tab" aria-controls="notification-home" aria-selected="true">
                        Notifications
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="message-tab" data-toggle="tab" href="#message-home" role="tab" aria-controls="message-home" aria-selected="false">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-tab" data-toggle="tab" href="#account-home" role="tab" aria-controls="account-home" aria-selected="false">Account</a>
                </li>
            </ul>
        </div>
        <div class="user-panel-content">
            <div class="tab-content" id="tab-tabContent">
                <div class="tab-pane fade show active" id="notification-home" role="tabpanel" aria-labelledby="notification-tab">
                    <div class="user-sidebar-item">
                        <div class="mess-dropdown">
                            <div class="mess__body">
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Your Resume Updated!</p>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-lock"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">You changed password</p>
                                            <span class="time">2 day ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-user"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Your account has been created successfully</p>
                                            <span class="time">1 minute ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-download"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Someone downloaded resume</p>
                                            <span class="time">Yesterday</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Application has been approved</p>
                                            <span class="time">1 hour ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-flag"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">New report has been received</p>
                                            <span class="time">10 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-bell-o"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">New user feedback received</p>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
                <div class="tab-pane fade" id="message-home" role="tabpanel" aria-labelledby="message-tab">
                    <div class="user-sidebar-item">
                        <div class="mess-dropdown">
                            <div class="mess__body">
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="<?=base_url('assets/images/small-team6.jpg')?>" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="employer-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="<?=base_url('assets/images/small-team6.jpg')?>" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Kamran Adi</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
                <div class="tab-pane fade" id="account-home" role="tabpanel" aria-labelledby="account-tab">
                    <div class="user-action-wrap user-sidebar-panel">
                        <div class="mess-dropdown">
                            <div class="mess__title d-flex align-items-center">
                                <div class="image dot-status online-status">
                                    <a href="#">
                                        <img src="<?=base_url('assets/images/company-logo.jpg')?>" alt="Bluetech, Inc">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">
                                        <a href="#">Bluetech, Inc</a>
                                    </h4>
                                    <span class="email"><?= $company->email?></span>
                                </div>
                            </div><!-- end mess__title -->
                            <div class="mess__body">
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="la la-user"></i> Account
                                </a>
                                <a href="employer-dashboard-bookmark.html" class="d-block">
                                    <i class="la la-bookmark"></i> Bookmarks
                                </a>
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="<?php site_url("admin/post-job")?>"></i> Post a Job
                                </a>
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="la la-question"></i> Help
                                </a>
                                <a href="employer-dashboard.html" class="d-block">
                                    <i class="la la-gear"></i> Settings
                                </a>
                                <div class="section-block mt-2 mb-2"></div>
                                <a href="<?php site_url("admin")?>" class="d-block">
                                    <i class="la la-power-off"></i> Logout
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end user-nav-container -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->
