<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{$title??config('app.name')}}</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="/assets/images/logo.svg">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="/assets/images/logo.svg">
    <!-- style -->
    <link rel="stylesheet" href="/libs/font-awesome/css/font-awesome.min.css" type="text/css" />
    <!-- build:css ../assets/css/app.min.css -->
    <link rel="stylesheet" href="/libs/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/app.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
    @stack('styles')
    <!-- endbuild -->
</head>
<body>
@yield('body')

<!-- build:js ../assets/js/app.min.js -->
<!-- jQuery -->
<script src="/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- core -->
<script src="/libs/pace-progress/pace.min.js"></script>
<script src="/libs/pjax/pjax.min.js"></script>
<script src="/assets/js/lazyload.config.js"></script>
<script src="/assets/js/lazyload.js"></script>
<script src="/assets/js/plugin.js"></script>
<script src="/assets/js/nav.js"></script>
<script src="/assets/js/scrollto.js"></script>
<script src="/assets/js/toggleclass.js"></script>
<script src="/assets/js/theme.js"></script>
<script src="/assets/js/ajax.js"></script>
<script src="/assets/js/app.js"></script>
@stack('scripts')
<!-- endbuild -->
</body>
</html>
