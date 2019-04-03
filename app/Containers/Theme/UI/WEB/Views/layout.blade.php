<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ empty($title) ?  config('app.name') : $title }}</title>
    <meta name="description" content="Responsive, Bootstrap, BS4">
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
                <ul class="nav bg">
                    <li class="nav-header hidden-folded"><span class="text-muted">Main</span></li>
                    <li><a href="{{url('/')}}"><span class="nav-icon text-primary"><i data-feather="home"></i></span> <span class="nav-text">Dashboard</span></a></li>
                    <li class="nav-header hidden-folded"><span class="text-muted">Applications</span></li>
                    <li><a href="{{url('calendar')}}"><span class="nav-icon text-info"><i data-feather="calendar"></i></span> <span class="nav-text">Calendar</span> <span class="nav-badge"><b class="badge-circle xs text-danger"></b></span></a></li>
                    <li><a href="app.user.html"><span class="nav-icon text-success"><i data-feather="users"></i></span> <span class="nav-text">Users</span></a></li>
                    <li><a href="app.message.html"><span class="nav-icon text-warning"><i data-feather="message-circle"></i></span> <span class="nav-text">Messages</span> <span class="nav-badge"><b class="badge-circle xs text-warning"></b></span></a></li>
                    <li><a href="app.mail.html"><span class="nav-icon text-danger"><i data-feather="mail"></i></span> <span class="nav-text">Email</span></a></li>
                </ul>
                <ul class="nav">
                    <li class="nav-header hidden-folded"><span class="text-muted">UI elements</span></li>
                    <li>
                        <a href="page.blank.html#" class=""><span class="nav-icon"><i data-feather="grid"></i></span> <span class="nav-text">Components</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="ui.alert.html" class=""><span class="nav-text">Alert</span></a></li>
                            <li><a href="ui.badge.html" class=""><span class="nav-text">Badge</span></a></li>
                            <li><a href="ui.button.html" class=""><span class="nav-text">Button</span></a></li>
                            <li><a href="ui.card.html" class=""><span class="nav-text">Card</span></a></li>
                            <li><a href="ui.carousel.html" class=""><span class="nav-text">Carousel</span></a></li>
                            <li><a href="ui.color.html" class=""><span class="nav-text">Color</span></a></li>
                            <li><a href="ui.dropdown.html" class=""><span class="nav-text">Dropdown</span></a></li>
                            <li><a href="ui.grid.html" class=""><span class="nav-text">Grid</span></a></li>
                            <li><a href="ui.icon.html" class=""><span class="nav-text">Icon</span></a></li>
                            <li><a href="ui.list.html" class=""><span class="nav-text">List</span></a></li>
                            <li><a href="ui.modal.html" class=""><span class="nav-text">Modal</span></a></li>
                            <li><a href="ui.navbar.html" class=""><span class="nav-text">Navbar</span></a></li>
                            <li><a href="ui.sidenav.html" class=""><span class="nav-text">Sidenav</span></a></li>
                            <li><a href="ui.timeline.html" class=""><span class="nav-text">Timeline</span></a></li>
                            <li><a href="ui.tab.html" class=""><span class="nav-text">Tab &amp; Collpase</span></a></li>
                            <li><a href="ui.tooltip.html" class=""><span class="nav-text">Tooltip &amp; Popover</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="page.blank.html#" class=""><span class="nav-icon"><i data-feather="box"></i></span> <span class="nav-text">Plugins</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="ui.scroll.html" class=""><span class="nav-text">Infinite Scroll</span></a></li>
                            <li><a href="ui.sortable.html" class=""><span class="nav-text">Sortable</span></a></li>
                            <li><a href="ui.map.html" class=""><span class="nav-text">Vector Map</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="page.blank.html#" class=""><span class="nav-icon"><i data-feather="disc"></i></span> <span class="nav-text">Form</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="form.element.html" class=""><span class="nav-text">Form Element</span></a></li>
                            <li><a href="form.layout.html" class=""><span class="nav-text">Form Layout</span></a></li>
                            <li><a href="form.validation.html" class=""><span class="nav-text">Form Validation</span></a></li>
                            <li><a href="form.editor.html" class=""><span class="nav-text">Editor</span></a></li>
                            <li><a href="form.datepicker.html" class=""><span class="nav-text">Datepicker</span></a></li>
                            <li><a href="form.select.html" class=""><span class="nav-text">Select</span></a></li>
                            <li><a href="form.wizard.html" class=""><span class="nav-text">Wizard</span></a></li>
                            <li><a href="form.dropzone.html" class=""><span class="nav-text">File Upload</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="page.blank.html#" class=""><span class="nav-icon"><i data-feather="list"></i></span> <span class="nav-text">Tables</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="table.style.html" class=""><span class="nav-text">Style</span></a></li>
                            <li><a href="table.bootstrap.html" class=""><span class="nav-text">Bootstrap Table</span></a></li>
                            <li><a href="table.datatables.html" class=""><span class="nav-text">Datatables</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="page.blank.html#" class=""><span class="nav-icon"><i data-feather="pie-chart"></i></span> <span class="nav-text">Charts</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="chart.chartist.html" class=""><span class="nav-text">Chartist</span></a></li>
                            <li><a href="chart.chartjs.html" class=""><span class="nav-text">Chartjs</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-header hidden-folded"><span class="text-muted">Extra</span></li>
                    <li>
                        <a href="page.blank.html#" class=""><span class="nav-icon"><i data-feather="file"></i></span> <span class="nav-text">Pages</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="page.profile.html" class=""><span class="nav-text">Profile</span></a></li>
                            <li><a href="page.search.html" class=""><span class="nav-text">Search</span></a></li>
                            <li><a href="page.invoice.html" class=""><span class="nav-text">Invoice</span></a></li>
                            <li><a href="page.faq.html" class=""><span class="nav-text">FAQ</span></a></li>
                            <li><a href="page.price.html" class=""><span class="nav-text">Price</span></a></li>
                            <li><a href="page.setting.html" class=""><span class="nav-text">Setting</span></a></li>
                            <li><a href="page.blank.html" class=""><span class="nav-text">Blank</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="page.blank.html#" class=""><span class="nav-icon"><i data-feather="lock"></i></span> <span class="nav-text">Auth</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="signin.html" class=""><span class="nav-text">Signin</span></a></li>
                            <li><a href="signup.html" class=""><span class="nav-text">Signup</span></a></li>
                            <li><a href="forgot-password.html" class=""><span class="nav-text">Forgot Password</span></a></li>
                            <li><a href="lockme.html" class=""><span class="nav-text">Lockme Screen</span></a></li>
                            <li><a href="404.html" class=""><span class="nav-text">Error 404</span></a></li>
                            <li><a href="505.html" class=""><span class="nav-text">Error 505</span></a></li>
                        </ul>
                    </li>
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
                <li class="nav-item d-none d-sm-block"><a class="nav-link px-2" data-toggle="fullscreen" data-plugin="fullscreen"><i data-feather="maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2" data-toggle="dropdown"><i data-feather="settings"></i></a>
                    <div class="dropdown-menu dropdown-menu-center mt-3 w animate fadeIn">
                        <div class="setting px-3">
                            <div class="mb-2 text-muted"><strong>Setting:</strong></div>
                            <div class="mb-3" id="settingLayout"><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox" name="stickyHeader"> <i></i> <small>Sticky header</small></label><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox" name="stickyAside"> <i></i> <small>Sticky aside</small></label><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox" name="foldedAside"> <i></i> <small>Folded Aside</small></label><label class="ui-check ui-check-rounded my-1 d-block"><input type="checkbox" name="hideAside"> <i></i> <small>Hide Aside</small></label></div>
                            <div class="mb-2 text-muted"><strong>Color:</strong></div>
                            <div class="mb-2"><label class="radio radio-inline ui-check ui-check-md"><input type="radio" name="bg" value=""> <i></i></label><label class="radio radio-inline ui-check ui-check-color ui-check-md"><input type="radio" name="bg" value="bg-dark"> <i class="bg-dark"></i></label></div>
                            <div class="mb-2 text-muted"><strong>Layout:</strong></div>
                            <div class="mb-2"><a href="dashboard.html" class="btn btn-sm btn-white no-ajax">Default</a> <a href="layout.a.html?bg" class="btn btn-sm btn-white no-ajax">A</a></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2 mr-lg-2" data-toggle="dropdown"><i data-feather="bell"></i> <span class="badge badge-pill badge-up bg-primary">7</span></a>
                    <div class="dropdown-menu dropdown-menu-right mt-3 w-md animate fadeIn p-0">
                        <div class="scrollable hover" style="max-height: 250px">
                            <div class="list list-row">
                                <div class="list-item" data-id="12">
                                    <div><a href="music.detail.html"><span class="w-32 avatar gd-info">A</span></a></div>
                                    <div class="flex">
                                        <div class="item-feed h-2x"><a href="page.blank.html#">Support</a> team updated the status</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="5">
                                    <div><a href="music.detail.html"><span class="w-32 avatar gd-warning"><img src="/assets/img/a5.jpg" alt="."></span></a></div>
                                    <div class="flex">
                                        <div class="item-feed h-2x">Learn how to use <a href="page.blank.html#">Google Analytics</a> to discover vital information about your readers.</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="19">
                                    <div><a href="music.detail.html"><span class="w-32 avatar gd-warning">T</span></a></div>
                                    <div class="flex">
                                        <div class="item-feed h-2x">We help companies deliver reliable and beautiful <a href="page.blank.html#">@IOSapps</a></div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="20">
                                    <div><a href="music.detail.html"><span class="w-32 avatar gd-warning">G</span></a></div>
                                    <div class="flex">
                                        <div class="item-feed h-2x"><a href="page.blank.html#">@Netflix</a> hackathon</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="1">
                                    <div><a href="music.detail.html"><span class="w-32 avatar gd-primary"><img src="/assets/img/a1.jpg" alt="."></span></a></div>
                                    <div class="flex">
                                        <div class="item-feed h-2x"><a href="page.blank.html#">@WordPress</a> How To Get Started With WordPress</div>
                                    </div>
                                </div>
                                <div class="list-item" data-id="14">
                                    <div><a href="music.detail.html"><span class="w-32 avatar gd-warning">B</span></a></div>
                                    <div class="flex">
                                        <div class="item-feed h-2x">Do you know which are the popular ones? Leave a comment and get to know more from professional developers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex px-3 py-2 b-t">
                            <div class="flex"><span>6 Notifications</span></div>
                            <a href="page.setting.html">See all <i class="fa fa-angle-right text-muted"></i></a>
                        </div>
                    </div>
                </li>
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
