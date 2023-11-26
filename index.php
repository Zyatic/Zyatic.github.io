<?php
require('setup.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">

<title><?$name?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/6646/6646535.png" type="image/png">

<link rel="stylesheet" href="assets/css/landpage/animate.css">

<link rel="stylesheet" href="assets/css/landpage/magnific-popup.css">

<link rel="stylesheet" href="assets/css/landpage/slick.css">

<link rel="stylesheet" href="assets/css/landpage/LineIcons.css">

<link rel="stylesheet" href="assets/css/landpage/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/landpage/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/landpage/default.css">

<link rel="stylesheet" href="assets/css/landpage/style.css">
<script nonce="7c20ba39-0fb0-4efd-aae9-699a068be0bc">(function(w,d){!function(cM,cN,cO,cP){cM.zarazData=cM.zarazData||{};cM.zarazData.executed=[];cM.zaraz={deferred:[],listeners:[]};cM.zaraz.q=[];cM.zaraz._f=function(cQ){return function(){var cR=Array.prototype.slice.call(arguments);cM.zaraz.q.push({m:cQ,a:cR})}};for(const cS of["track","set","debug"])cM.zaraz[cS]=cM.zaraz._f(cS);cM.zaraz.init=()=>{var cT=cN.getElementsByTagName(cP)[0],cU=cN.createElement(cP),cV=cN.getElementsByTagName("title")[0];cV&&(cM.zarazData.t=cN.getElementsByTagName("title")[0].text);cM.zarazData.x=Math.random();cM.zarazData.w=cM.screen.width;cM.zarazData.h=cM.screen.height;cM.zarazData.j=cM.innerHeight;cM.zarazData.e=cM.innerWidth;cM.zarazData.l=cM.location.href;cM.zarazData.r=cN.referrer;cM.zarazData.k=cM.screen.colorDepth;cM.zarazData.n=cN.characterSet;cM.zarazData.o=(new Date).getTimezoneOffset();if(cM.dataLayer)for(const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_,da)=>({...c_[1],...da[1]})))))zaraz.set(cZ[0],cZ[1],{scope:"page"});cM.zarazData.q=[];for(;cM.zaraz.q.length;){const db=cM.zaraz.q.shift();cM.zarazData.q.push(db)}cU.defer=!0;for(const dc of[localStorage,sessionStorage])Object.keys(dc||{}).filter((de=>de.startsWith("_zaraz_"))).forEach((dd=>{try{cM.zarazData["z_"+dd.slice(7)]=JSON.parse(dc.getItem(dd))}catch{cM.zarazData["z_"+dd.slice(7)]=dc.getItem(dd)}}));cU.referrerPolicy="origin";cU.src="/ventryshield/contents.js?z="+btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));cT.parentNode.insertBefore(cU,cT)};["complete","interactive"].includes(cN.readyState)?zaraz.init():cM.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<div class="preloader">
<div class="loader">
<div class="ytp-spinner">
<div class="ytp-spinner-container">
<div class="ytp-spinner-rotator">
<div class="ytp-spinner-left">
<div class="ytp-spinner-circle"></div>
</div>
<div class="ytp-spinner-right">
<div class="ytp-spinner-circle"></div>
</div>
</div>
</div>
</div>
</div>
</div>


<header class="header-area">
<div class="navbar-area">
<div class="container">
<div class="row">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="index.html">
<img src="https://cdn-icons-png.flaticon.com/128/6646/6646535.png" style="width: 50px;" alt="Logo">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ml-auto">
<li class="nav-item active">
<a class="page-scroll" href="#home">Home</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#features">Features</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#about">About</a>
</li>
</ul>
</div> 
<div class="navbar-btn d-none d-sm-inline-block">
<a class="main-btn" data-scroll-nav="0" href="page/generator">Try it</a>
</div>
</nav> 
</div>
</div> 
</div> 
</div> 
<div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/landpage/banner-bg.svg)">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="header-hero-content text-center">
<h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s"><?echo $name?> Landing Page</h3>
<h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">The best generator</h2>
<p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Don't forget to join our discord server for update notify</p>
<a href="page/generator" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Get Started</a>
</div> 
</div>
</div> 
<div class="row">
<div class="col-lg-12">
<div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
<img src="assets/images/landpage/header-hero.png" alt="hero">
</div> 
</div>
</div> 
</div> 
<div id="particles-1" class="particles"></div>
</div> 
</header>


<section id="features" class="services-area pt-120">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="section-title text-center pb-40">
<div class="line m-auto"></div>
<h3 class="title">We have the best generator. Let me tell you why</span></h3>
</div> 
</div>
</div> 
<div class="row justify-content-center">
<div class="col-lg-4 col-md-7 col-sm-8">
<div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
<div class="services-icon">
<img class="shape" src="assets/images/landpage/services-shape.svg" alt="shape">
<img class="shape-1" src="assets/images/landpage/services-shape-2.svg" alt="shape">
<i class="lni-cog"></i>
</div>
<div class="services-content mt-30">
<h4 class="services-title"><a href="#">Features</a></h4>
<p class="text">A lot of features that can be used by everyone.</p>
<a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
</div>
</div> 
</div>
<div class="col-lg-4 col-md-7 col-sm-8">
<div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
 <div class="services-icon">
<img class="shape" src="assets/images/landpage/services-shape.svg" alt="shape">
<img class="shape-1" src="assets/images/landpage/services-shape-3.svg" alt="shape">
<i class="lni-bolt-alt"></i>
</div>
<div class="services-content mt-30">
<h4 class="services-title"><a href="#">Fast connection</a></h4>
<p class="text">Our website connection is fast.</p>
<a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
</div>
</div> 
</div>
</div> 
</div> 
</section>


<section id="about" class="about-area pt-70">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
<div class="section-title">
<div class="line"></div>
<h3 class="title">Quick & Easy <span>to Use our generator</span></h3>
</div> 
<p class="text">All you need is to fill in the form we provide</p>
<a href="page/generator" class="main-btn">Try it</a>
</div> 
</div>
<div class="col-lg-6">
<div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
<img src="assets/images/landpage/about1.svg" alt="about">
</div> 
</div>
</div> 
</div> 
<div class="about-shape-1">
<img src="assets/images/landpage/about-shape-1.svg" alt="shape">
</div>
</section>


<section class="about-area pt-70">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
<div class="section-title">
<div class="line"></div>
<h3 class="title">We also provide giveaways every day</h3>
</div> 
<p class="text">You can join our discord server for the giveaways notify</p>
<a href="<?$discord?>" class="main-btn">Join Server</a>
</div> 
</div>
<div class="col-lg-6">
<div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
<img src="assets/images/landpage/about3.svg" alt="about">
</div> 
</div>
</div> 
</div> 
<div class="about-shape-1">
<img src="assets/images/landpage/about-shape-1.svg" alt="shape">
</div>
</section>



<footer id="footer" class="footer-area pt-120">
<div class="container">
<div class="footer-widget pb-100">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-8">
<div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
<a class="logo" href="#">
<img src="https://cdn-icons-png.flaticon.com/128/6646/6646535.png" style="width: 50px;" alt="logo">
</a>
</div> 
</div>
<div class="col-lg-5 col-md-7 col-sm-7">
</div>
</div> 
</div> 
<div class="footer-copyright">
<div class="row">
<div class="col-lg-12">
<div class="copyright d-sm-flex justify-content-between">
<div class="copyright-content">
<p class="text">Designed and Developed by <a href="<?$discord?>" rel="nofollow">Splunk</a></p>
</div> 
</div> 
</div>
</div> 
</div> 
</div> 
<div id="particles-2"></div>
</footer>


<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>





<script src="assets/js/landpage/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/landpage/vendor/modernizr-3.7.1.min.js"></script>

<script src="assets/js/landpage/popper.min.js"></script>
<script src="assets/js/landpage/bootstrap.min.js"></script>

<script src="assets/js/landpage/plugins.js"></script>

<script src="assets/js/landpage/slick.min.js"></script>

<script src="assets/js/landpage/ajax-contact.js"></script>

<script src="assets/js/landpage/waypoints.min.js"></script>
<script src="assets/js/landpage/jquery.counterup.min.js"></script>

<script src="assets/js/landpage/jquery.magnific-popup.min.js"></script>

<script src="assets/js/landpage/jquery.easing.min.js"></script>
<script src="assets/js/landpage/scrolling-nav.js"></script>

<script src="assets/js/landpage/wow.min.js"></script>

<script src="assets/js/landpage/particles.min.js"></script>

<script src="assets/js/landpage/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"777f803eca4a76ed","token":"033c33a962e74d16be982c1223e03590","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>
