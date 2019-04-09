@extends('backpack::blank')

@section('body')
    <div class="row no-gutters" id="home">
        <div class="col-md-6 h-v white d-flex">
            <div class="p-5 flex align-self-center">
                <img src="{{asset('static/assets/images/long_white.png')}}" alt="" height="78">
                <h2 class="display-4 _700 l-s-n-1x my-5">Bring new <span class="text-primary">Experience</span> <span class="text-muted">to your marketing</span></h2>
                <h5 class="text-muted mb-5">{{lang('localization::messages.one_station_solution')}}</h5>
                @if(request()->cookie('fqdn'))
                    <a href="//{{request()->cookie('fqdn')}}" class=" btn btn-lg btn-outline b-success text-success b-2x mr-2">{{lang('localization::messages.to_dashboard')}}</a>
                @endif
                <a href="/create" class=" btn btn-lg btn-outline b-primary text-primary b-2x">{{lang('localization::messages.get_started')}}</a>
                <p class="text-muted mt-2">{{lang('localization::messages.no_credit_card_required')}}</p>
            </div>
        </div>
        <div class="col-md-6 d-flex py-5 align-items-center justify-content-center progress-bar-animated progress-bar-striped" style="background-color: #eff2f5">
            <div class="p-5">
                <img class="store_image" src="{{asset('static/assets/images/flying-shop.png')}}" alt="" width="400">
            </div>
        </div>
    </div>
    <div class="p-3" style="position: fixed; bottom: 0; left:0; right:0;">
        <div class="row footer-bottom">
            <div class="col-sm-8">
                <small class="text-muted">© Copyright {{date('Y')}}. All rights reserved.</small>
            </div>
            <div class="col-sm-4">
                <div class="text-sm-right text-xs-left">
                    <strong>{{config('app.name')}}</strong>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('after_styles')
    <style>
        div img {
            cursor: pointer;
            transition: all 0.8s;
        }
        div img:hover {
            transform:scale(1.5);
            transform:rotate(-30deg);
            -ms-transform:rotate(-30deg); 	/* IE 9 */
            -moz-transform:rotate(-30deg); 	/* Firefox */
            -webkit-transform:rotate(-30deg); /* Safari 和 Chrome */
            -o-transform:rotate(-30deg);
        }
    </style>
@endpush
