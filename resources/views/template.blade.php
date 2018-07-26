<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="{{url('/manifest.json')}}">
        <meta name="theme-color" content="#fff"/>

        {{-- icons for IOS devices --}}
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo url('/');?>//icons/apple-60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo url('/');?>//icons/apple-76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo url('/');?>//icons/apple-120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo url('/');?>//icons/apple-152.png">
        <link rel="apple-touch-icon" sizes="167x167" href="<?php echo url('/');?>//icons/apple-167.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url('/');?>//icons/apple-180.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="<?php echo url('/');?>/css/offcanvas.css" rel="stylesheet">
        <link href="<?php echo url('/');?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo url('/');?>/css/open-iconic-bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo url('/');?>/css/custom.css" rel="stylesheet">


        {{-- checks for service worker support.if you have the push manager package then use this line
        if ('serviceWorker' in navigator && 'PushManager' in window) instead of
        if ('serviceWorker' in navigator ) --}}
        <script>
          if ('serviceWorker' in navigator ) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('../service-worker.js').then(function(registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
        </script>

        <title>ANTAR</title>
    </head>
    <body>
    <div id="page" class="animate-bottom">
        @yield('menu')
        @yield('content')
        @yield('footer')
    </div>
    <div id="loading"></div>
    </body>
    <script src="<?php echo url('/');?>/js/jquery.min.js"></script>
    <script src="<?php echo url('/');?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo url('/');?>/js/offcanvas.js"></script>
    <script>
        function onReady(callback) {
            var intervalID = window.setInterval(checkReady, 1500);

            function checkReady() {
                if (document.getElementsByTagName('body')[0] !== undefined) {
                    window.clearInterval(intervalID);
                    callback.call(this);
                }
            }
        }

        function show(id, value) {
            document.getElementById(id).style.display = value ? 'block' : 'none';
        }

        onReady(function () {
            show('page', true);
            show('loading', false);
        });
    </script>

</html>
