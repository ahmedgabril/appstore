<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{\App\Helpers\helpers::getmetadata()->sitedes}}" name="description">
        <meta content="{{\App\Helpers\helpers::getmetadata()->sitename}}" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "WebSite",
      "name" : "me-apk",
      "url" : "https://me-apk.com.com/"
    }
  </script>
 <title>

 @yield('title')
 </title>

<!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NZP88B24E2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NZP88B24E2');
</script>
<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NX9GQ6G');</script> -->
<!-- End Google Tag Manager -->
<!-- End Google Tag Manager -->
<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-NZP88B24E2"></script>
<script>
//     var dimensionValue = 'ahmed';
    
// ga('set', 'dimension1', dimensionValue);
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NZP88B24E2');
</script> -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2? family=Cairo:wght@600&display=swap"/>

        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">

        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">
        <link href="{{asset('assets/css/swaper.css')}}" rel="stylesheet" type="text/css" >
          <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" >
        @stack('forntcss')

        <livewire:styles />
    </head>

    <body class="" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":true, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":true, "showRightSidebarOnStart": true}'>

<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX9GQ6G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->
    <div class="spcontainer">
        <div class="spinner-border avatar-lg " role="status" style="color:#54ff99;"></div>

    </div>
 @include('layouts.forntend-navbar')



@yield('maincontent')




 <button id="scroll-to-top" class="scroll-to-top btn-success">
     <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
     </svg></button>


 <livewire:scripts />




{{--<script src="{{asset('assets/js/swaper.js')}}"></script>--}}
   <script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/vendor.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>


 <script>


     $(document).ready(function() {
         $('.spcontainer').addClass('fadeOut');
         // Show the button after the user scrolls down a bit
         $(window).scroll(function() {
             if ($(this).scrollTop() > 100) {
                 $('#scroll-to-top').addClass('show');
             } else {
                 $('#scroll-to-top').removeClass('show');
             }
         });

         // Scroll to the top when the button is clicked
         $('#scroll-to-top').click(function() {
             $('html, body').animate({ scrollTop: 0 }, 1000);
             return false;
         });
     });

 </script>
@stack('forntjs')





    </body>
</html>
