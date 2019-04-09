@extends('theme::blank')

@section('body')
    <div class="app" id="app">
        <!-- ############ LAYOUT START-->
        <!-- ############ Aside START-->
        <div id="aside" class="app-aside fade box-shadow-x nav-expand white" aria-hidden="true">
            <div class="sidenav modal-dialog dk white">
                <!-- sidenav top -->
                <div class="navbar lt">
                    <!-- brand -->
                    <a href="#" class="navbar-brand">
                        <span class="hidden-folded d-inline">{{config('app.name')}}</span>
                    </a>
                    <!-- / brand -->
                </div>
                <!-- Flex nav content -->
                <div class="flex hide-scroll">
                    <div class="scroll">
                        <div class="nav-border b-primary" data-nav>
                            @yield('nav')
                        </div>
                    </div>
                </div>
                <!-- sidenav bottom -->
                <div class="no-shrink lt">
                    @yield('aside_footer')
                </div>
            </div>
        </div>
        <!-- ############ Aside END-->
        <!-- ############ Content START-->
        <div id="content" class="app-content box-shadow-0" role="main">
            <!-- Header -->
            <div class="content-header white  box-shadow-0" id="content-header">
                <div class="navbar navbar-expand-lg">
                    <!-- btn to toggle sidenav on small screen -->
                    <a class="d-lg-none mx-2" data-toggle="modal" data-target="#aside">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                            <path d="M80 304h352v16H80zM80 248h352v16H80zM80 192h352v16H80z" />
                        </svg>
                    </a>
                    <!-- Page title -->
                    <div class="navbar-text nav-title flex" id="pageTitle">@stack('page_title')</div>
                    <ul class="nav flex-row order-lg-2">
                        <!-- Notification -->
                        @stack('top_menu')
                        <!-- User dropdown menu -->
                        <li class="dropdown d-flex align-items-center">
                            <a href="#" data-toggle="dropdown" class="d-flex align-items-center">
                                    <span class="avatar w-32">
                                  <img src="/assets/images/a3.jpg" alt="...">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right w pt-0 mt-2 animate fadeIn">
                                <a class="dropdown-item" href="profile.html">
                                    <span>Profile</span>
                                </a>
                                <a class="dropdown-item" href="setting.html">
                                    <span>Settings</span>
                                </a>
                                <a class="dropdown-item" href="app.inbox.html">
                                    <span class="float-right"><span class="badge info">6</span></span>
                                    <span>Inbox</span>
                                </a>
                                <a class="dropdown-item" href="app.message.html">
                                    <span>Message</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="docs.html">
                                    Need help?
                                </a>
                                <a class="dropdown-item" href="signin.html">Sign out</a>
                            </div>
                        </li>
                        <!-- Navarbar toggle btn -->
                        <li class="d-lg-none d-flex align-items-center">
                            <a href="#" class="mx-2" data-toggle="collapse" data-target="#navbarToggler">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512">
                                    <path d="M64 144h384v32H64zM64 240h384v32H64zM64 336h384v32H64z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Main -->
            <div class="content-main " id="content-main">
                <!-- ############ Main START-->
                <div>
                    @yield('content')
                </div>
                <!-- ############ Main END-->
            </div>
            <!-- Footer -->
            <div class="content-footer white " id="content-footer">
                @stack('footer')
            </div>
        </div>
        <!-- ############ Content END-->
        <!-- ############ LAYOUT END-->
    </div>
@endsection
