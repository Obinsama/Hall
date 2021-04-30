{{--@extends('layouts.app')--}}


{{--@section('content')--}}

    {{--<div class="row">--}}

        {{--<div class="col-lg-12 margin-tb">--}}

            {{--<div class="pull-left">--}}

                {{--<h2>Create New Role</h2>--}}

            {{--</div>--}}

            {{--<div class="pull-right">--}}

                {{--<a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>--}}

            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}


    {{--@if (count($errors) > 0)--}}

        {{--<div class="alert alert-danger">--}}

            {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}

            {{--<ul>--}}

                {{--@foreach ($errors->all() as $error)--}}

                    {{--<li>{{ $error }}</li>--}}

                {{--@endforeach--}}

            {{--</ul>--}}

        {{--</div>--}}

    {{--@endif--}}


    {{--{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}--}}

    {{--<div class="row">--}}

        {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}

            {{--<div class="form-group">--}}

                {{--<strong>Name:</strong>--}}

                {{--{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}--}}

            {{--</div>--}}

        {{--</div>--}}

        {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}

            {{--<div class="form-group">--}}

                {{--<strong>Permission:</strong>--}}

                {{--<br/>--}}

                {{--@foreach($permission as $value)--}}

                    {{--<label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}--}}

                        {{--{{ $value->name }}</label>--}}

                    {{--<br/>--}}

                {{--@endforeach--}}

            {{--</div>--}}

        {{--</div>--}}

        {{--<div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}

            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}

        {{--</div>--}}

    {{--</div>--}}

    {{--{!! Form::close() !!}--}}


    {{--<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>--}}

{{--@endsection--}}



@include('admin.menu')
<div class="page-content roles">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create role</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create role</h6>
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
                    <form method="POST" action="{{route('roles.store')}}">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter role name" value="">
                                </div>
                            </div><!-- Col -->

                        </div><!-- Row -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permission:</strong>
                                <br/>
                                @foreach($permission as $value)

                                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

                                        {{ $value->name }}</label>

                                    <br/>

                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary submit">Create Role</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer_other')