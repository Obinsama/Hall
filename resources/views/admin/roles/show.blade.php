{{--@extends('layouts.app')--}}


{{--@section('content')--}}

    {{--<div class="row">--}}

        {{--<div class="col-lg-12 margin-tb">--}}

            {{--<div class="pull-left">--}}

                {{--<h2> Show Role</h2>--}}

            {{--</div>--}}

            {{--<div class="pull-right">--}}

                {{--<a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>--}}

            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}


    {{--<div class="row">--}}

        {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}

            {{--<div class="form-group">--}}

                {{--<strong>Name:</strong>--}}

                {{--{{ $role->name }}--}}

            {{--</div>--}}

        {{--</div>--}}

        {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}

            {{--<div class="form-group">--}}

                {{--<strong>Permissions:</strong>--}}

                {{--@if(!empty($rolePermissions))--}}

                    {{--@foreach($rolePermissions as $v)--}}

                        {{--<label class="label label-success">{{ $v->name }},</label>--}}

                    {{--@endforeach--}}

                {{--@endif--}}

            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}

{{--@endsection--}}



@include('admin.menu')
<div class="page-content roles">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">View role</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> Role {{$role->name}}</h6>
                    @if (count($errors) > 0)

                        <div class="alert alert-danger">

                            <strong>Whoops!</strong> There were some problems with your input.<br><br>

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <p class="label label-success">{{ $v->name }},</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer_other')
