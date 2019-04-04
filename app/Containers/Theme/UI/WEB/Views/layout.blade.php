<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="/assets/css/site.min.css">
</head>
<body class="layout-row">
<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
    <div class="sidenav h-100 bg-light modal-dialog">
        <div class="navbar">
            <a href="index.html" class="navbar-brand">
                <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <g class="loading-spin" style="transform-origin: 256px 256px">
                        <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                    </g>
                </svg>
                <span class="hidden-folded d-inline l-s-n-1x">{{config('theme-container.logo_text')}}</span>
            </a>
        </div>
        <div class="flex scrollable hover">
            <div class="nav-active-text-primary" data-nav>
                <ul class="nav">
                    @include('theme::inc.menu', ['link' => url('/'), 'label' => 'Dashboard', 'icon' => 'settings', 'color' => 'primary' ])
                    @include('theme::inc.menu', ['link' => url('calendar'), 'label' => 'Calendar', 'icon' => 'upload', 'color' => 'success' ])
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="main" class="layout-column flex">
    <div id="header" class="page-header">
        <div class="navbar navbar-expand-lg">
            <a href="index.html" class="navbar-brand d-lg-none">
                <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <g class="loading-spin" style="transform-origin: 256px 256px">
                        <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                    </g>
                </svg>
                <span class="hidden-folded d-inline l-s-n-1x d-lg-none">{{config('theme-container.logo_text')}}</span>
            </a>
            <div class="collapse navbar-collapse order-2 order-lg-1" id="navbarToggler">
                <form class="input-group m-2 my-lg-0">
                    <div class="input-group-prepend"><button type="button" class="btn no-shadow no-bg px-0"><i data-feather="search"></i></button></div>
                    <input type="text" class="form-control no-border no-shadow no-bg typeahead" placeholder="Search components..." data-plugin="typeahead" data-api="/assets/api/menu.json">
                </form>
            </div>
            <ul class="nav navbar-menu order-1 order-lg-2">
                <li class="nav-item dropdown">
                    <a href="page.blank.html#" data-toggle="dropdown" class="nav-link d-flex align-items-center px-2 text-color"><span class="avatar w-24" style="margin: -2px"><img src="/assets/img/a1.jpg" alt="..."></span></a>
                    <div class="dropdown-menu dropdown-menu-right w mt-3 animate fadeIn">
                        <a class="dropdown-item" href="page.profile.html"><span>Jacqueline Reid</span> </a><a class="dropdown-item" href="page.price.html"><span class="badge bg-success text-uppercase">Upgrade</span> <span>to Pro</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="page.profile.html"><span>Profile</span> </a><a class="dropdown-item d-flex" href="page.invoice.html"><span class="flex">Invoice</span> <span><b class="badge badge-pill gd-warning">5</b></span> </a><a class="dropdown-item" href="page.faq.html">Need help?</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="page.setting.html"><span>Account Settings</span> </a><a class="dropdown-item" href="signin.html">Sign out</a>
                    </div>
                </li>
                <li class="nav-item d-lg-none"><a href="page.blank.html#" class="nav-link px-2" data-toggle="collapse" data-toggle-class data-target="#navbarToggler"><i data-feather="search"></i></a></li>
                <li class="nav-item d-lg-none"><a class="nav-link px-1" data-toggle="modal" data-target="#aside"><i data-feather="menu"></i></a></li>
            </ul>
        </div>
    </div>
    <div id="content" class="flex">
        <div class="page-content page-container" id="page-content">
            @yield('content')
            @stack('content')
        </div>
    </div>
</div>
<script src="/assets/js/site.min.js"></script>
@stack('scripts')
</body>
</html>
