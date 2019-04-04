<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="/assets/css/site.min.css">
    @stack('styles')
</head>
<body class="layout-row">
@yield('content')
@stack('content')
<script src="/assets/js/site.min.js"></script>
@stack('scripts')
</body>
</html>
