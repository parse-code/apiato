@extends('theme::layout')

@section('nav')
    <ul class="nav bg">
        <li class="nav-header">
            <div class="py-3">
                <a href="#" class="btn btn-sm success theme-accent btn-block">
                    <i class="fa fa-fw fa-plus"></i>
                    <span class="hidden-folded d-inline">New Tenant</span>
                </a>
            </div>
        </li>
        <li>
            <a href="{{url('tenancy')}}">
                <span class="nav-icon"><i class="fa fa-dashboard"></i></span>
                <span class="nav-text">Tenants</span>
            </a>
        </li>
        <li>
            <a href="app.user.html">
                <span class="nav-icon"><i class="fa fa-phone-square"></i></span>
                <span class="nav-text">Users</span>
            </a>
        </li>
        <li class="pb-2 hidden-folded"></li>
    </ul>
@endsection
