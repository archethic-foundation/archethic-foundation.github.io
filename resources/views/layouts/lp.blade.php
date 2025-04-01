<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

            <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5HFZN945');</script>
    <!-- End Google Tag Manager -->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icon -->
    <link rel="apple-touch-icon" href="/assets/img/favicon.png" />
    <meta name="msapplication-TileImage" content="/assets/img/favicon.png" />
    <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">


    <!-- Title and SEO -->
    <title>@yield('title', 'Landing Page')</title>
    <meta name="description" content="@yield('meta_description', 'Default description for Archethic Landing Page')">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Nick ;)">
    <link rel="canonical" href="{{ url(request()->path()) }}">

    <!-- Bootstrap -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Animation (AOS) -->
    <link href="/assets/dist/css/aos.css" rel="stylesheet">

    <!-- Scripts & Custom CSS for LP (via Vite) -->
    @vite(['resources/css/app.scss', 'resources/js/lp.js', 'resources/js/app.js'])

    <!-- Additional Styles -->
    @stack('styles')
</head>

<body class="antialiased" id="lp-airdrop">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HFZN945"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <main>
        @yield('content')
    </main>

    <!-- Additional Scripts -->
    @stack('scripts')

    @include('layouts.footer')
</body>

</html>