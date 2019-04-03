@extends('theme::layout')

@section('content')
    <div class="">
        <div class="page-hero page-container" id="page-hero">
            <div class="padding d-flex">
                <div class="page-title">
                    <h2 class="text-md text-highlight">Dashboard</h2>
                    <small class="text-muted">Welcome aboard, <strong>Jacqueline Reid</strong></small>
                </div>
                <div class="flex"></div>
                <div>
                    <a href="https://themeforest.net/item/basik-responsive-bootstrap-web-admin-template/23365964" class="btn btn-md text-muted">
                        <span class="d-none d-sm-inline mx-1">Buy this Item</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row row-sm sr">
                    <div class="col-md-12 col-lg-8">
                        <div class="row row-sm">
                            <div class="col-md-8">
                                <div class="row row-sm">
                                    <div class="col-12">
                                        <div class="card" data-sr-id="73" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <div class="card-body">
                                                <div class="row row-sm">
                                                    <div class="col-4">
                                                        <small class="text-muted">Your status</small>
                                                        <div class="mt-2 font-weight-500"><span class="text-info">Pro</span> user</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <small class="text-muted">Your balance</small>
                                                        <div class="text-highlight mt-2 font-weight-500">$3,500</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <small class="text-muted">Next payment</small>
                                                        <div class="mt-2 font-weight-500">15 Nov</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-6 d-flex">
                                        <div class="card flex" data-sr-id="74" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <div class="card-body">
                                                <small>Profile complete: <strong class="text-primary">65%</strong></small>
                                                <div class="progress my-3 circle" style="height:6px">
                                                    <div class="progress-bar circle gd-primary" data-toggle="tooltip" title="" style="width: 65%" data-original-title="65%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <div class="card flex" data-sr-id="75" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <div class="card-body">
                                                <small>Payment process: <strong class="text-primary">25%</strong></small>
                                                <div class="progress my-3 circle" style="height:6px">
                                                    <div class="progress-bar circle gd-warning" data-toggle="tooltip" title="" style="width: 25%" data-original-title="25%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="card flex" data-sr-id="76" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div class="card-body text-center">
                                        <small class="text-muted">Total Sale &amp; Referral</small>
                                        <div class="pt-3">
                                            <div style="height: 120px" class="pos-rlt">
                                                <div class="pos-abt w-100 h-100 d-flex align-items-center justify-content-center">
                                                    <div>
                                                        <div class="text-highlight text-md"><span></span></div>
                                                        <small class="text-muted">usd</small>
                                                    </div>
                                                </div>
                                                <canvas id="chart-pie-1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" data-sr-id="77" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div class="card-body">
                                        <div class="d-md-flex">
                                            <div class="flex">
                                                <div class="text-highlight">30%</div>
                                                <small class="h-1x">Conversion</small>
                                            </div>
                                            <div><small class="text-muted">+ 3.5%</small></div>
                                        </div>
                                        <div class="w-50" style="height: 30px">
                                            <canvas id="chart-line-1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" data-sr-id="78" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div class="card-body">
                                        <div class="d-md-flex">
                                            <div class="flex">
                                                <div class="text-highlight">25%</div>
                                                <small class="h-1x">Search engine</small>
                                            </div>
                                            <div><small class="text-muted">- 2.0%</small></div>
                                        </div>
                                        <div class="w-50" style="height: 30px">
                                            <canvas id="chart-line-2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" data-sr-id="79" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div class="card-body">
                                        <div class="d-md-flex">
                                            <div class="flex">
                                                <div class="text-highlight">45%</div>
                                                <small class="h-1x">Directly</small>
                                            </div>
                                            <div><small class="text-muted">+ 4.5%</small></div>
                                        </div>
                                        <div class="w-50" style="height: 30px">
                                            <canvas id="chart-line-3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 d-flex">
                        <div class="card flex" data-sr-id="80" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            <div class="card-body">
                                <div class="px-4">
                                    <div id="jqvmap-world" style="height: 200px" class="d-flex align-items-center justify-content-center">
                                        <div class="loading"></div>
                                    </div>
                                    <div class="text-center mb-3"><small class="text-muted">Your top countries</small></div>
                                    <div class="row text-center">
                                        <div class="col">
                                            <span class="text-primary">USA</span>
                                            <div class="text-muted text-sm">$1,250</div>
                                        </div>
                                        <div class="col">
                                            UK
                                            <div class="text-muted text-sm">$650</div>
                                        </div>
                                        <div class="col">
                                            India
                                            <div class="text-muted text-sm">$200</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card flex" data-sr-id="81" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            <div class="card-body">
                                <div class="d-flex align-items-center text-hover-success">
                                    <div class="avatar w-56 m-2 no-shadow gd-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                    </div>
                                    <div class="px-4 flex">
                                        <div>Weekly top sell</div>
                                        <div class="text-success mt-2">+ 2.50%</div>
                                    </div>
                                    <a href="dashboard.html#" class="text-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 d-flex">
                        <div class="card flex" data-sr-id="82" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="col-sm-6">
                                        <div class="mb-2"><small class="text-muted">Task statistics</small></div>
                                        <div class="row row-sm">
                                            <div class="col-4">
                                                <div class="text-highlight text-md">52</div>
                                                <small>Tasks</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-danger text-md">+15</div>
                                                <small>Added</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="text-md">45.5%</div>
                                                <small>Remain</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-2 mt-2 mt-sm-0"><small class="text-muted">This week</small></div>
                                        <div>Task completion</div>
                                        <div class="progress no-bg mt-2 align-items-center circle" style="height:6px">
                                            <div class="progress-bar circle gd-danger" style="width: 65%"></div>
                                            <span class="mx-2">65%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row row-sm">
                            <div class="col-6">
                                <div class="card" data-sr-id="83" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div class="card-body">
                                        <div class="pos-rlt" style="height: 78px">
                                            <div class="pos-abt w-100 h-100 d-flex align-items-center justify-content-center"><small>35%</small></div>
                                            <canvas id="chart-pie-2"></canvas>
                                        </div>
                                        <div class="px-3 pt-3 text-center"><small>Weekly</small></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card" data-sr-id="84" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div class="card-body">
                                        <div class="pos-rlt" style="height: 78px">
                                            <div class="pos-abt w-100 h-100 d-flex align-items-center justify-content-center"><small>25%</small></div>
                                            <canvas id="chart-pie-3"></canvas>
                                        </div>
                                        <div class="px-3 pt-3 text-center"><small>Monthly</small></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card pb-3" data-sr-id="85" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div class="p-3-4">
                                        <div class="d-flex">
                                            <div>
                                                <div>Upcoming tasks</div>
                                                <small class="text-muted">Active: 9</small>
                                            </div>
                                            <span class="flex"></span>
                                            <div>
                                                <div class="btn-group-toggle" data-toggle="buttons"><label class="btn"><input type="radio" name="options"> 1h</label><label class="btn active"><input type="radio" name="options"> 1d</label></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list list-row">
                                        <div class="list-item" data-id="8" data-sr-id="86" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <div><label class="ui-check m-0 ui-check-rounded ui-check-md"><input type="checkbox" name="id" value="8"> <i></i></label></div>
                                            <div class="flex">
                                                <a href="music.detail.html" class="item-title text-color h-1x">DEV DAY 2018</a>
                                                <div class="item-except text-muted text-sm h-1x">Working on a research piece on the history of vocational schools in America.</div>
                                            </div>
                                            <div>
                                                <div class="item-action dropdown">
                                                    <a href="dashboard.html#" data-toggle="dropdown" class="text-muted">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                        <a class="dropdown-item" href="dashboard.html#">See detail </a><a class="dropdown-item download">Download </a><a class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item" data-id="19" data-sr-id="87" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <div><label class="ui-check m-0 ui-check-rounded ui-check-md"><input type="checkbox" name="id" value="19"> <i></i></label></div>
                                            <div class="flex">
                                                <a href="music.detail.html" class="item-title text-color h-1x">IOS Application</a>
                                                <div class="item-except text-muted text-sm h-1x">We design and implement native iOS apps that harmonize simplicity of design and complexity of function</div>
                                            </div>
                                            <div>
                                                <div class="item-action dropdown">
                                                    <a href="dashboard.html#" data-toggle="dropdown" class="text-muted">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                        <a class="dropdown-item" href="dashboard.html#">See detail </a><a class="dropdown-item download">Download </a><a class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-item" data-id="15" data-sr-id="88" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                            <div><label class="ui-check m-0 ui-check-rounded ui-check-md"><input type="checkbox" name="id" value="15"> <i></i></label></div>
                                            <div class="flex">
                                                <a href="music.detail.html" class="item-title text-color h-1x">Weekend Fun Project</a>
                                                <div class="item-except text-muted text-sm h-1x">You don’t have to switch tools to review code, share input on projects, or open up the conversation to the rest of your team.</div>
                                            </div>
                                            <div>
                                                <div class="item-action dropdown">
                                                    <a href="dashboard.html#" data-toggle="dropdown" class="text-muted">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                        <a class="dropdown-item" href="dashboard.html#">See detail </a><a class="dropdown-item download">Download </a><a class="dropdown-item edit">Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item trash">Delete item</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card" data-sr-id="89" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            <div class="p-3-4">
                                <div class="d-flex mb-3">
                                    <div>
                                        <div>Summary</div>
                                        <small class="text-muted">All mentions: 12,340</small>
                                    </div>
                                    <span class="flex"></span>
                                    <div>
                                        <div class="btn-group btn-group-toggle" id="btn_l_4" data-toggle="buttons"><label class="btn active"><input type="radio" name="options"> Month</label><label class="btn"><input type="radio" name="options"> Week</label></div>
                                    </div>
                                </div>
                                <div class="p-2" style="height: 364px">
                                    <canvas id="chart-line-4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card" data-sr-id="90" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            <div class="p-3-4">
                                <div class="d-flex">
                                    <div>
                                        <div>Top groups</div>
                                        <small class="text-muted">Total: 230</small>
                                    </div>
                                    <span class="flex"></span>
                                    <div><a href="dashboard.html#" class="btn btn-sm btn-white">More</a></div>
                                </div>
                            </div>
                            <table class="table table-theme v-middle m-0">
                                <tbody>
                                <tr class="" data-id="3">
                                    <td style="min-width:30px;text-align:center">0</td>
                                    <td>
                                        <div class="d-flex avatar-group"><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Sit"><img src="../assets/img/a12.jpg" alt="."> </a><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Ut"><img src="../assets/img/a5.jpg" alt="."> </a><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Risus,"><img src="../assets/img/a6.jpg" alt="."></a></div>
                                    </td>
                                    <td class="flex">
                                        <a href="page.invoice.detail.html" class="item-company ajax h-1x" data-pjax-state="">Wealth corp</a>
                                        <div class="item-mail text-muted h-1x d-none d-sm-block">jordan-stephens@wealthcorp.com</div>
                                    </td>
                                    <td><span class="item-amount d-none d-sm-block text-sm">10</span></td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="dashboard.html#" data-toggle="dropdown" class="text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="dashboard.html#">See detail </a><a class="dropdown-item download">Download </a><a class="dropdown-item edit">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">Delete item</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="" data-id="16">
                                    <td style="min-width:30px;text-align:center">1</td>
                                    <td>
                                        <div class="d-flex avatar-group"><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Eu"><img src="../assets/img/a7.jpg" alt="."> </a><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Lacus"><img src="../assets/img/a7.jpg" alt="."></a></div>
                                    </td>
                                    <td class="flex">
                                        <a href="page.invoice.detail.html" class="item-company ajax h-1x" data-pjax-state="">Microsoft</a>
                                        <div class="item-mail text-muted h-1x d-none d-sm-block">frances-stewart@microsoft.com</div>
                                    </td>
                                    <td><span class="item-amount d-none d-sm-block text-sm">200</span></td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="dashboard.html#" data-toggle="dropdown" class="text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="dashboard.html#">See detail </a><a class="dropdown-item download">Download </a><a class="dropdown-item edit">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">Delete item</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="" data-id="7">
                                    <td style="min-width:30px;text-align:center">2</td>
                                    <td>
                                        <div class="d-flex avatar-group"><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Ornare"><img src="../assets/img/a10.jpg" alt="."></a></div>
                                    </td>
                                    <td class="flex">
                                        <a href="page.invoice.detail.html" class="item-company ajax h-1x" data-pjax-state="">Lostcorp</a>
                                        <div class="item-mail text-muted h-1x d-none d-sm-block">frank-kelley@lostcorp.com</div>
                                    </td>
                                    <td><span class="item-amount d-none d-sm-block text-sm">510</span></td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="dashboard.html#" data-toggle="dropdown" class="text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="dashboard.html#">See detail </a><a class="dropdown-item download">Download </a><a class="dropdown-item edit">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">Delete item</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="" data-id="2">
                                    <td style="min-width:30px;text-align:center">3</td>
                                    <td>
                                        <div class="d-flex avatar-group"><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Sed"><img src="../assets/img/a11.jpg" alt="."> </a><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Urna,"><img src="../assets/img/a6.jpg" alt="."></a></div>
                                    </td>
                                    <td class="flex">
                                        <a href="page.invoice.detail.html" class="item-company ajax h-1x" data-pjax-state="">Microsoft</a>
                                        <div class="item-mail text-muted h-1x d-none d-sm-block">kathy-alexander@microsoft.com</div>
                                    </td>
                                    <td><span class="item-amount d-none d-sm-block text-sm">10</span></td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="dashboard.html#" data-toggle="dropdown" class="text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="dashboard.html#">See detail </a><a class="dropdown-item download">Download </a><a class="dropdown-item edit">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">Delete item</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="" data-id="5">
                                    <td style="min-width:30px;text-align:center">4</td>
                                    <td>
                                        <div class="d-flex avatar-group"><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Accumsan,"><img src="../assets/img/a14.jpg" alt="."> </a><a href="dashboard.html#" class="avatar w-32" data-toggle="tooltip" title="" data-original-title="Orci,"><img src="../assets/img/a10.jpg" alt="."></a></div>
                                    </td>
                                    <td class="flex">
                                        <a href="page.invoice.detail.html" class="item-company ajax h-1x" data-pjax-state="">Sun</a>
                                        <div class="item-mail text-muted h-1x d-none d-sm-block">sara-george@sun.com</div>
                                    </td>
                                    <td><span class="item-amount d-none d-sm-block text-sm">100</span></td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="dashboard.html#" data-toggle="dropdown" class="text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="12" cy="5" r="1"></circle>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="dashboard.html#">See detail </a><a class="dropdown-item download">Download </a><a class="dropdown-item edit">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item trash">Delete item</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex">
                        <div class="card flex" data-sr-id="91" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                            <div class="p-3-4">
                                <div class="d-flex">
                                    <div>
                                        <div>Courses</div>
                                        <small class="text-muted">on-going: 12</small>
                                    </div>
                                    <span class="flex"></span>
                                    <div>
                                        <a href="dashboard.html#" class="p-1 text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="list list-row">
                                <div class="list-item" data-id="14" data-sr-id="92" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div><span class="badge badge-circle text-warning"></span></div>
                                    <div class="flex"><a href="music.detail.html" class="item-title text-color h-1x">Database management</a></div>
                                    <div><span class="item-amount d-none d-sm-block text-sm text-muted">20</span></div>
                                </div>
                                <div class="list-item" data-id="8" data-sr-id="93" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div><span class="badge badge-circle text-success"></span></div>
                                    <div class="flex"><a href="music.detail.html" class="item-title text-color h-1x">DEV DAY 2018</a></div>
                                    <div><span class="item-amount d-none d-sm-block text-sm text-muted">4</span></div>
                                </div>
                                <div class="list-item" data-id="15" data-sr-id="94" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div><span class="badge badge-circle text-success"></span></div>
                                    <div class="flex"><a href="music.detail.html" class="item-title text-color h-1x">Weekend Fun Project</a></div>
                                    <div><span class="item-amount d-none d-sm-block text-sm text-muted">50</span></div>
                                </div>
                                <div class="list-item" data-id="9" data-sr-id="95" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div><span class="badge badge-circle text-info"></span></div>
                                    <div class="flex"><a href="music.detail.html" class="item-title text-color h-1x">Web App develop tutorial</a></div>
                                    <div><span class="item-amount d-none d-sm-block text-sm text-muted">20</span></div>
                                </div>
                                <div class="list-item" data-id="16" data-sr-id="96" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div><span class="badge badge-circle text-info"></span></div>
                                    <div class="flex"><a href="music.detail.html" class="item-title text-color h-1x">AI Could Uber</a></div>
                                    <div><span class="item-amount d-none d-sm-block text-sm text-muted">53</span></div>
                                </div>
                                <div class="list-item" data-id="5" data-sr-id="97" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div><span class="badge badge-circle text-warning"></span></div>
                                    <div class="flex"><a href="music.detail.html" class="item-title text-color h-1x">Google Analytics training</a></div>
                                    <div><span class="item-amount d-none d-sm-block text-sm text-muted">3</span></div>
                                </div>
                                <div class="list-item" data-id="7" data-sr-id="98" style="visibility: visible; transform: none; opacity: 1; transition: none 0s ease 0s;">
                                    <div><span class="badge badge-circle text-primary"></span></div>
                                    <div class="flex"><a href="music.detail.html" class="item-title text-color h-1x">Design improvement</a></div>
                                    <div><span class="item-amount d-none d-sm-block text-sm text-muted">5</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/libs/jquery-countto/jquery.countTo.js"></script>
@endpush
