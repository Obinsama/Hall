{{--@extends('layouts.app')--}}


{{--@section('content')--}}

{{--<div class="row">--}}

{{--<div class="col-lg-12 margin-tb">--}}

{{--<div class="pull-left">--}}

{{--<h2>Edit Product</h2>--}}

{{--</div>--}}

{{--<div class="pull-right">--}}

{{--<a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>--}}

{{--</div>--}}

{{--</div>--}}

{{--</div>--}}


{{--@if ($errors->any())--}}

{{--<div class="alert alert-danger">--}}

{{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}

{{--<ul>--}}

{{--@foreach ($errors->all() as $error)--}}

{{--<li>{{ $error }}</li>--}}

{{--@endforeach--}}

{{--</ul>--}}

{{--</div>--}}

{{--@endif--}}


{{--<form action="{{ route('products.update',$product->id) }}" method="POST">--}}

{{--@csrf--}}

{{--@method('PUT')--}}


{{--<div class="row">--}}

{{--<div class="col-xs-12 col-sm-12 col-md-12">--}}

{{--<div class="form-group">--}}

{{--<strong>Name:</strong>--}}

{{--<input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">--}}

{{--</div>--}}

{{--</div>--}}

{{--<div class="col-xs-12 col-sm-12 col-md-12">--}}

{{--<div class="form-group">--}}

{{--<strong>Detail:</strong>--}}

{{--<textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>--}}

{{--</div>--}}

{{--</div>--}}

{{--<div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}

{{--<button type="submit" class="btn btn-primary">Submit</button>--}}

{{--</div>--}}

{{--</div>--}}


{{--</form>--}}


{{--<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>--}}

{{--@endsection--}}

@include('admin.menu')
<div class="page-content plans">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('products.index')}}">Plans Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Plan</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Plan</h6>

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
                    <form method="POST" action="{{route('products.update',$product['name'])}}">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter product name" value="{{$product['name']}}">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Volume <em>(Mo)</em>  </label>
                                    <input type="text" class="form-control" name="volume" placeholder="Enter volume" value="{{$product['volume']}}">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Interval <em>(sec)</em></label>
                                    <input type="text" class="form-control" name="interval" placeholder="Enter interval" value="{{$product['interval']}}">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Duration <em>(hr)</em></label>
                                    <input type="text" class="form-control" name="duration" placeholder="Enter duration" value="{{$product['duration']}}">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Price <em>(FCFA)</em></label>
                                    <input type="text" class="form-control" name="price" placeholder="Enter price" value="{{$product['price']}}">
                                </div>
                            </div><!-- Col -->

                        </div><!-- Row -->
                        <button type="submit" class="btn btn-primary submit">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')