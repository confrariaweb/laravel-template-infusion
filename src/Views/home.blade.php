<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=" - Responsive Personal vCard Template">
    <meta name="keywords" content="bootWeb, resume, cv, portfolio, personal, developer, designer, onepage, clean, modern, infusion, web">
    <meta name="author" content="Mehul Prajapati">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Confraria Web</title>
    <link rel="shortcut icon" href="{{ asset('vendor/confrariaweb/template-infusion/images/favicon.png') }}') }}" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('vendor/confrariaweb/template-infusion/images/favicon.png') }}') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7COpen+Sans:800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/confrariaweb/template-infusion/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/confrariaweb/template-infusion/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/confrariaweb/template-infusion/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/confrariaweb/template-infusion/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/confrariaweb/template-infusion/vendor/magnific-popup/magnific-popup.css') }}">
    <link id="pagestyle" rel="stylesheet" type="text/css" href="{{ asset('vendor/confrariaweb/template-infusion/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/confrariaweb/template-infusion/css/responsive.css') }}">
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        /** This section is only needed once per page if manually copying **/
        if (typeof MauticSDKLoaded == 'undefined') {
            var MauticSDKLoaded = true;
            var head            = document.getElementsByTagName('head')[0];
            var script          = document.createElement('script');
            script.type         = 'text/javascript';
            script.src          = 'https://mautic.confrariaweb.com.br/media/js/mautic-form.js';
            script.onload       = function() {
                MauticSDK.onLoad();
            };
            head.appendChild(script);
            var MauticDomain = 'https://mautic.confrariaweb.com.br';
            var MauticLang   = {
                'submittingMessage': "Por favor, aguarde..."
            }
        }else if (typeof MauticSDK != 'undefined') {
            MauticSDK.onLoad();
        }
    </script>

</head>
<body id="body">
<div class="preloader">
    <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
</div>
<div id="box">
    <div class="option"><i class="fa fa-cog fa-2x" aria-hidden="true"></i></div>
    <span class="blue"></span>
    <span class="red"></span>
    <span class="purple"></span>
    <span class="green"></span>
    <span class="orange"></span>
    <span class="peach"></span>
</div>
@include('templateInfusion::partials.navbar')
@include('templateInfusion::sections.banner')
@include('templateInfusion::sections.about')
@include('templateInfusion::sections.service')
@include('templateInfusion::sections.portfolio')
@include('templateInfusion::sections.testimonial')
@include('templateInfusion::sections.counter')
@include('templateInfusion::sections.blog')
@include('templateInfusion::sections.contact')
@include('templateInfusion::sections.partners')
<div id="scroll-up">
    <i class="fa fa-angle-up"></i>
</div>
@include('templateInfusion::partials.footer')
<script src="{{ asset('vendor/confrariaweb/template-infusion/vendor/jquery/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('vendor/confrariaweb/template-infusion/vendor/stellar/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('vendor/confrariaweb/template-infusion/vendor/typed/typed.js') }}"></script>
<script src="{{ asset('vendor/confrariaweb/template-infusion/vendor/plugin/plugin.js') }}"></script>
<script src="{{ asset('vendor/confrariaweb/template-infusion/vendor/animate/wow.min.js') }}"></script>
<script src="{{ asset('vendor/confrariaweb/template-infusion/vendor/mixitup/mixitup.min.js') }}"></script>
<script src="{{ asset('vendor/confrariaweb/template-infusion/vendor/waypoint/waypoint-2.0.3.min.js') }}"></script>
<script src="{{ asset('vendor/confrariaweb/template-infusion/vendor/counter/counterup.min.js') }}"></script>
<script src="{{ asset('vendor/confrariaweb/template-infusion/vendor/validate/validate.js') }}"></script>
<!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC2oOenaQAs2ImrzwUz3xk8RCM_0_KiZA"></script-->
<script src="{{ asset('vendor/confrariaweb/template-infusion/js/main.js') }}"></script>
</body>
</html>