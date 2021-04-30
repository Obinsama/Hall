@include('admin.menu')
<div class="page-content plans">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('products.index')}}">Plans Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Purchase Plan</li>
        </ol>
    </nav>


    <div class="no-margin col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Purchase Plan</h6>
                <form class="forms-sample" method="POST" action="{{route('product.purchase',$offer['name'])}}">
                    @csrf

                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputUsername2" disabled value="{{$offer['name']}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Price (FCFA)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputEmail2" autocomplete="off" disabled value="{{$offer['price']}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="phone" id="exampleInputMobile" >
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2" style="margin: auto!important;">Purchase</button>
{{--                    <button class="btn btn-light">Cancel</button>--}}
{{--                    <button class="btn btn-primary d-block mx-auto mt-4"><a href="{{route('product.purchase',$offer['name'])}}" class="basic"  style="color: white!important;">Purchase</a></button>--}}
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')