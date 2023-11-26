<?php
require('../setup.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?$name?> - Login Controller</title>
<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/6646/6646535.png" type="image/png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<script nonce="48c905af-5625-4cc0-82a5-6ad28c05d11a">(function(w,d){!function(cM,cN,cO,cP){cM.zarazData=cM.zarazData||{};cM.zarazData.executed=[];cM.zaraz={deferred:[],listeners:[]};cM.zaraz.q=[];cM.zaraz._f=function(cQ){return function(){var cR=Array.prototype.slice.call(arguments);cM.zaraz.q.push({m:cQ,a:cR})}};for(const cS of["track","set","debug"])cM.zaraz[cS]=cM.zaraz._f(cS);cM.zaraz.init=()=>{var cT=cN.getElementsByTagName(cP)[0],cU=cN.createElement(cP),cV=cN.getElementsByTagName("title")[0];cV&&(cM.zarazData.t=cN.getElementsByTagName("title")[0].text);cM.zarazData.x=Math.random();cM.zarazData.w=cM.screen.width;cM.zarazData.h=cM.screen.height;cM.zarazData.j=cM.innerHeight;cM.zarazData.e=cM.innerWidth;cM.zarazData.l=cM.location.href;cM.zarazData.r=cN.referrer;cM.zarazData.k=cM.screen.colorDepth;cM.zarazData.n=cN.characterSet;cM.zarazData.o=(new Date).getTimezoneOffset();if(cM.dataLayer)for(const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_,da)=>({...c_[1],...da[1]})))))zaraz.set(cZ[0],cZ[1],{scope:"page"});cM.zarazData.q=[];for(;cM.zaraz.q.length;){const db=cM.zaraz.q.shift();cM.zarazData.q.push(db)}cU.defer=!0;for(const dc of[localStorage,sessionStorage])Object.keys(dc||{}).filter((de=>de.startsWith("_zaraz_"))).forEach((dd=>{try{cM.zarazData["z_"+dd.slice(7)]=JSON.parse(dc.getItem(dd))}catch{cM.zarazData["z_"+dd.slice(7)]=dc.getItem(dd)}}));cU.referrerPolicy="origin";cU.src="/ventryshield/contents.js?z="+btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));cT.parentNode.insertBefore(cU,cT)};["complete","interactive"].includes(cN.readyState)?zaraz.init():cM.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="newsletter-subscribe">
<div class="container">
<div class="intro">
<h2 class="text-center">Login</h2>
</div>
<form class="form-inline" method="POST" action="">
<div class="form-group"><input class="form-control" id="token" type="number" name="token" placeholder="Token"></div>
<div class="form-group"><button class="btn btn-primary" type="submit">Login </button></div>
</form>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
        .newsletter-subscribe {
        color:#313437;
        background-color:#fff;
        padding:50px 0;
        }

        .newsletter-subscribe p {
        color:#7d8285;
        line-height:1.5;
        }

        .newsletter-subscribe h2 {
        font-size:24px;
        font-weight:bold;
        margin-bottom:25px;
        line-height:1.5;
        padding-top:0;
        margin-top:0;
        color:inherit;
        }

        .newsletter-subscribe .intro {
        font-size:16px;
        max-width:500px;
        margin:0 auto 25px;
        }

        .newsletter-subscribe .intro p {
        margin-bottom:35px;
        }

        .newsletter-subscribe form {
        justify-content:center;
        }

        .newsletter-subscribe form .form-control {
        background:#eff1f4;
        border:none;
        border-radius:3px;
        box-shadow:none;
        outline:none;
        color:inherit;
        text-indent:9px;
        height:45px;
        margin-right:10px;
        min-width:250px;
        }

        .newsletter-subscribe form .btn {
        padding:16px 32px;
        border:none;
        background:none;
        box-shadow:none;
        text-shadow:none;
        opacity:0.9;
        text-transform:uppercase;
        font-weight:bold;
        font-size:13px;
        letter-spacing:0.4px;
        line-height:1;
        }

        .newsletter-subscribe form .btn:hover {
        opacity:1;
        }

        .newsletter-subscribe form .btn:active {
        transform:translateY(1px);
        }

        .newsletter-subscribe form .btn-primary {
        background-color:#055ada !important;
        color:#fff;
        outline:none !important;
        }

    </style>
<script>
        Swal.fire( 'Failed', 'Incorrect token', 'error' )    </script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"777fa8bf08857701","token":"033c33a962e74d16be982c1223e03590","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>