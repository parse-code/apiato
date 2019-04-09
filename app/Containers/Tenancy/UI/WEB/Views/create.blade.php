@extends('tenancy::layout')

@push('page_title')
Tenant
@endpush

@section('content')
<div class="padding">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Create new tenant</h3>
        </div>
        <form method="post">
        <div class="box-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Domain</label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" name="domain" value="{{old('domain')}}">
                    <span class="input-group-append">
                        <span class="input-group-text">.{{config('tenancy.hostname.default')}}</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <input type="submit" class="btn btn-primary text-white" value="Submit"/>
        </div>
        </form>
    </div>
</div>
@endsection
