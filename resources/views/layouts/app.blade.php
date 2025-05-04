<html lang="en">
<head>

    <link rel="apple-touch-icon" href="/assets/img/favicon.png" />
    <meta name="msapplication-TileImage" content="/assets/img/favicon.png" />
    <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Archethic">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <title>@yield('title', 'Archethic Website')</title>
    <meta name="description" content="@yield('meta_description', 'Default description for Archethic Website')">
    <link rel="canonical" href="{{ url(request()->path()) }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/dist/css/aos.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script defer data-domain='archethic.net' src='https://plausible.io/js/plausible.js'></script>
    @vite(['resources/react/index.jsx', 'resources/css/app.scss'])



</head>



<body>

    <!-- React container -->
    <div id="app"></div>

    <!-- Top Naviguation -->
    @include('layouts.header')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/dist/js/aos.js"></script>
    
    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: '600'
        });
    </script>

    <script>
        window.intercomSettings = {
            api_base: "https://api-iam.intercom.io",
            app_id: "vkbdw524",
        };
    </script>


    <script>
        // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/vkbdw524'
        (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/vkbdw524';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    </script>

    @vite(['resources/js/app.js'])

</body>

</html>