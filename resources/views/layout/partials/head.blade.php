 <head>

     <!-- Basic -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     @php
     use Artesaos\SEOTools\Facades\SEOTools;

     @endphp

     {!! SEOTools::generate() !!}

     <!-- Favicon -->
     <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('fav_icon.png') }}">
     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fav_icon.png') }}">
     <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">


     <!-- Mobile Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

     <!-- Web Fonts  -->
     <link id="googleFonts"
         href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CPlayfair+Display:400&display=swap"
         rel="stylesheet" type="text/css">

     <!-- Vendor CSS -->
     <link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('porto/vendor/fontawesome-free/css/all.min.css') }}">
     <link rel="stylesheet" href="{{ asset('porto/vendor/animate/animate.compat.css') }}">
     <link rel="stylesheet" href="{{ asset('porto/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
     <link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="{{ asset('porto/vendor/magnific-popup/magnific-popup.min.css') }}">


     <link rel="stylesheet" href="{{ asset('porto/css/examples/examples-spotlight-cursor-text.css') }}">
     <link rel="stylesheet" href="{{ asset('porto/css/examples/examples-text-bg-clip-animation.css') }}">


     <!-- Theme CSS -->
     <link rel="stylesheet" href="{{ asset('porto/css/theme.css') }}">
     <link rel="stylesheet" href="{{ asset('porto/css/theme-elements.css') }}">

     <!-- Demo CSS -->
     <link rel="stylesheet" href="{{ asset('porto/css/demos/demo-insurance.css') }}">
     <!-- Skin CSS -->
     <link id="skinCSS" rel="stylesheet" href="{{ asset('porto/css/skins/skin-insurance.css') }}">

     <!-- Theme Custom CSS -->
     <link rel="stylesheet" href="{{ asset('porto/css/custom_v1.css') }}">
     <link rel="stylesheet" href="{{ asset('porto/css/how_we_work.css') }}">


 </head>

 <!-- Google tag (gtag.js) -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-GKWNBDFJL9"></script>
 <script>
     window.dataLayer = window.dataLayer || [];

     function gtag() {
         dataLayer.push(arguments);
     }
     gtag('js', new Date());

     gtag('config', 'G-GKWNBDFJL9');
 </script>
