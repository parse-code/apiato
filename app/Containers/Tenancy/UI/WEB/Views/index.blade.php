@extends('tenancy::layout')

@push('page_title')
Tenant
@endpush

@section('content')
<div class="p-3 light lt box-shadow-0 d-flex">
    <div class="flex">
        <a class="btn btn-primary text-white" href="{{route('tenancy.create')}}"> <i class="fa fa-plus"></i> Create</a>
    </div>
</div>

<div class="padding">
    <div class="box">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>UUID</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($websites as $website)
            <tr>
                <td>{{$website->uuid}}</td>
                <td>{{$website->created_at}}</td>
                <td><button class="btn btn-xs btn-default"><i class="fa fa-trash"></i></button></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
