<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Code n Compile - Fall in love with Coding</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/css/bootstrap.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/css/slicknav.css">

    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/css/animate.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/css/owl.carousel.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/css/codencompile.css">
    <link rel="stylesheet" type="text/css" href="/web-resource/assets/css/tutorial.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var data = ["C", "C++", "JAVA", "PHP", "Python", "HTML", "CSS", "JavaScript", "Swift", "AngularJs", "NodeJs", "MySQL", "MongoDB", "Bootstrap", "Solidity"];
            $("#seed_one").autocomplete({source:data});
        });
    </script>

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
            </button>
            <a href="/" class="navbar-brand"><img src="/web-resource/assets/img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto">
              <!--<li class="nav-item active">
                <a class="nav-link" href="index.html">
                  Home
                </a>
              </li>-->
			  <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Tutorials
                </a>
				<div class="dropdown-menu">
				 <?php foreach($primaryTopics as $primaryTopic){?>
                  <a class="dropdown-item" href="/tutorials/<?php echo $primaryTopic->topic_code;?>"><?php echo $primaryTopic->topic_name;?> Tutorials</a>
				 <?php } ?> 
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  MCQ Practice
                </a>
				<div class="dropdown-menu">
				 <?php foreach($primaryTopics as $primaryTopic){?>
                  <a class="dropdown-item" href="/mcq/<?php echo $primaryTopic->topic_code;?>"><?php echo $primaryTopic->topic_name;?> (<?php echo $primaryTopic->mcq_count;?>)</a>
				 <?php } ?> 
                </div>
              </li>
			  
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Interview Questions
                </a>
				<div class="dropdown-menu">
				 <?php foreach($primaryTopics as $primaryTopic){?>
                  <a class="dropdown-item" href="/questions/<?php echo $primaryTopic->topic_code;?>"><?php echo $primaryTopic->topic_name;?> (<?php echo $primaryTopic->qna_count;?>)</a>
				 <?php } ?> 
                </div>
              </li>
			  
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DS
                </a>
				<div class="dropdown-menu">
				 <?php foreach($primaryTopics as $primaryTopic){?>
                  <a class="dropdown-item" href="/questions/<?php echo $primaryTopic->topic_code;?>"><?php echo $primaryTopic->topic_name;?> (<?php echo $primaryTopic->qna_count;?>)</a>
				 <?php } ?> 
                </div>
              </li>
			  
			   <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Algo
                </a>
				<div class="dropdown-menu">
				 <?php foreach($primaryTopics as $primaryTopic){?>
                  <a class="dropdown-item" href="/questions/<?php echo $primaryTopic->topic_code;?>"><?php echo $primaryTopic->topic_name;?> (<?php echo $primaryTopic->qna_count;?>)</a>
				 <?php } ?> 
                </div>
              </li>

            </ul>
            <ul class="sign-in">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> My Account</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="account-profile-setting.html"><i class="lni-home"></i> Account Home</a>
                  <a class="dropdown-item" href="account-myads.html"><i class="lni-wallet"></i> My Ads</a>
                  <a class="dropdown-item" href="account-favourite-ads.html"><i class="lni-heart"></i> Favourite ads</a>
                  <a class="dropdown-item" href="account-archived-ads.html"><i class="lni-folder"></i> Archived</a>
                  <a class="dropdown-item" href="login.html"><i class="lni-lock"></i> Log In</a>
                  <a class="dropdown-item" href="signup.html"><i class="lni-user"></i> Signup</a>
                  <a class="dropdown-item" href="forgot-password.html"><i class="lni-reload"></i> Forgot Password</a>
                  <a class="dropdown-item" href="account-close.html"><i class="lni-close"></i>Account close</a>
                </div>
              </li>
            </ul>
            <a class="tg-btn" href="/practice">
              <i class="lni-pencil-alt"></i> Practice
            </a>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
          <li>
            <a class="active" href="index.html">Home</a>
          </li>
          <li>
            <a href="category.html">Categories</a>
          </li>
          <li>
            <a href="#">
            Listings
            </a>
            <ul class="dropdown">
              <li><a href="adlistinggrid.html">Ad Grid</a></li>
              <li><a href="adlistinglist.html">Ad Listing</a></li>
              <li><a href="ads-details.html">Listing Detail</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul class="dropdown">
              <li><a href="about.html">About Us</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="ads-details.html">Ads Details</a></li>
              <li><a href="post-ads.html">Ads Post</a></li>
              <li><a href="pricing.html">Packages</a></li>
              <li><a href="testimonial.html">Testimonial</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Blog</a>
            <ul class="dropdown">
              <li><a href="blog.html">Blog - Right Sidebar</a></li>
              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
              <li><a href="blog-grid-full-width.html"> Blog full width </a></li>
              <li><a href="single-post.html">Blog Details</a></li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact Us</a>
          </li>
          <li>
            <a>My Account</a>
            <ul class="dropdown">
              <li><a href="account-profile-setting.html"><i class="lni-home"></i> Account Home</a></li>
              <li><a href="account-myads.html"><i class="lni-wallet"></i> My Ads</a></li>
              <li><a href="account-favourite-ads.html"><i class="lni-heart"></i> Favourite ads</a></li>
              <li><a href="account-archived-ads.html"><i class="lni-folder"></i> Archived</a></li>
              <li><a href="login.html"><i class="lni-lock"></i> Log In</a></li>
              <li><a href="signup.html"><i class="lni-user"></i> Signup</a></li>
              <li><a href="forgot-password.html"><i class="lni-reload"></i> Forgot Password</a></li>
              <li><a href="account-close.html"><i class="lni-close"></i>Account close</a></li>
            </ul>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->
