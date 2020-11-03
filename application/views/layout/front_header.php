<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zobstar - Jobs site</title>
    <!-- Favicon -->
    <link rel="icon" href="<?=base_url('assets/images/favicon.png')?>">

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
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">

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
  <header class="header-area">
      <div class="header-menu-wrapper">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="menu-full-width">
                          <div class="logo">
                              <a href="index.html"><img src="<?=base_url('assets/images/logo2.png')?>" alt="logo"></a>
                          </div><!-- end logo -->
                          <div class="main-menu-content">
                              <nav>
                                  <ul>
                                      <li>
                                          <a href="<?=site_url('/')?>">Home</a>
                                      </li>
                                      <li>
                                          <a href="#">Employers <i class="la la-angle-down"></i></a>
                                          <ul class="dropdown-menu-item">
                                              <li><a href="<?=site_url('admin/employer-listing')?>">Employer Listing</a></li>
                                              <li><a href="<?=site_url('admin/post-job')?>">Post a Job</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                          <a href="#">Candidates <i class="la la-angle-down"></i></a>
                                          <ul class="dropdown-menu-item">
                                              <li><a href="<?=site_url('candidate-listing')?>">Candidate Listing</a></li>
                                              <li><a href="<?=site_url('add-resume')?>">Add a Resume</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                        <a href="<?=site_url('about')?>">About us</a>
                                      </li>
                                      <li>
                                        <a href="<?=site_url('candidate-listing')?>">Contact us</a>
                                      </li>
                                      <li>
                                          <a href="<?=site_url('admin/jobs')?>">Jobs</a>
                                      </li>
                                  </ul>
                              </nav>
                          </div><!-- end main-menu-content -->
                          <div class="logo-right-content">
                              <ul class="author-access-list">
                                  <li>
                                      <a href="<?=site_url('login')?>">Login</a>
                                      <span class="or-text">or</span>
                                      <a href="<?=site_url('signup')?>">Sign up</a>
                                  </li>
                                  <li>
                                       <a href="<?=site_url('admin/post-job')?>" class="theme-btn">
                                          <span class="la la-plus"></span>
                                          Post a Job
                                      </a>
                                  </li>
                              </ul>
                              <div class="side-menu-open">
                                  <span class="menu__bar"></span>
                                  <span class="menu__bar"></span>
                                  <span class="menu__bar"></span>
                              </div><!-- end side-menu-open -->
                          </div><!-- end logo-right-content -->
                      </div><!-- end menu-full-width -->
                  </div><!-- end col-lg-12 -->
              </div><!-- end row -->
          </div><!-- end container-fluid -->
      </div><!-- end header-menu-wrapper -->
      <div class="side-nav-container">
          <div class="humburger-menu">
              <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
          </div><!-- end humburger-menu -->
          <div class="side-menu-wrap">
              <ul class="side-menu-ul">
                <li>
                    <a href="<?=site_url('/')?>">Home</a>
                </li>
                <li>
                    <a href="#">Employers <i class="la la-angle-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="<?=site_url('admin/employer-listing')?>">Employer Listing</a></li>
                        <li><a href="<?=site_url('admin/post-job')?>">Post a Job</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Candidates <i class="la la-angle-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="<?=site_url('candidate-listing')?>">Candidate Listing</a></li>
                        <li><a href="<?=site_url('add-resume')?>">Add a Resume</a></li>
                    </ul>
                </li>
                <li>
                  <a href="#">About us</a>
                </li>
                <li>
                  <a href="#">Contact us</a>
                </li>
                <li>
                    <a href="#">Jobs</a>
                </li>
              </ul>
              <div class="side-nav-button">
                  <a href="<?= site_url("login")?>">Login</a>
                  <span class="or-text">or</span>
                  <a href="<?= site_url("signup")?>">Sign up</a>
                  <a href="<?= site_url("admin/post-job")?>" class="theme-btn">Post a Job</a>
              </div><!-- end side-nav-button -->
          </div><!-- end side-menu-wrap -->
      </div><!-- end side-nav-container -->
  </header>
  <!-- ================================
           END HEADER AREA
  ================================= -->
