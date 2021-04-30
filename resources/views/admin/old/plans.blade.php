@include('admin.menu')
<div class="page-content plans">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pricing</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if($msg!=null)
                        <span style="color: #0c8b44;text-align: center;display: block; margin-top: 15px;font-size: 16px">{{$msg}}</span>
                        @if($code!=null)
                            <span style="color: #0c8b44;text-align: center;display: block; margin-top: 15px;font-size: 16px">Your code : {{$code}}</span>
                        @endif
                    @endif
                    <h4 class="text-center mb-3 mt-4">Choose a plan</h4>
                    <p class="text-muted text-center mb-4 pb-2">Choose the features and functionality your team need today. Easily upgrade as your company grows.</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="" title="edit" style="position: absolute;right: 15px"><i data-feather="edit-3"></i></a>
                                        <h5 class="text-center text-uppercase mt-3 mb-4">Basic</h5>

                                        <i data-feather="award" class="text-primary icon-xxl d-block mx-auto my-3"></i>
                                        <h3 class="text-center font-weight-light">250 Mo</h3>
                                        <p class="text-muted text-center mb-4 font-weight-light">Daily</p>
                                        <h6 class="text-muted text-center mb-4 font-weight-normal">200 CFA</h6>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-primary mr-2"></i>
                                            <p>Accounting dashboard</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-primary mr-2"></i>
                                            <p>Invoicing</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-primary mr-2"></i>
                                            <p>Online payments</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="x" class="icon-md text-light mr-2"></i>
                                            <p class="text-muted">Branded website</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="x" class="icon-md text-light mr-2"></i>
                                            <p class="text-muted">Dedicated account manager</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="x" class="icon-md text-light mr-2"></i>
                                            <p class="text-muted">Premium apps</p>
                                        </div>
                                        <button class="btn btn-primary d-block mx-auto mt-4 "><a href="{{route('buy',['offer'=>'medium'])}}" class="basic"  style="color: white">Purchase</a></button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="" title="edit" style="position: absolute;right: 15px"><i data-feather="edit-3"></i></a>
                                        <h4 class="text-center text-uppercase mt-3 mb-4 font-weight-light">Business</h4>
                                        <i data-feather="gift" class="text-success icon-xxl d-block mx-auto my-3"></i>
                                        <h3 class="text-center font-weight-light">5 Go</h3>
                                        <p class="text-muted text-center mb-4 font-weight-light">Monthly</p>
                                        <h6 class="text-muted text-center mb-4 font-weight-normal">1200 CFA</h6>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-danger mr-2"></i>
                                            <p>Accounting dashboard</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-danger mr-2"></i>
                                            <p>Invoicing</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-danger mr-2"></i>
                                            <p>Online payments</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-danger mr-2"></i>
                                            <p>Branded website</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-danger mr-2"></i>
                                            <p class="text-muted">Dedicated account manager</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="x" class="icon-md text-light mr-2"></i>
                                            <p class="text-muted">Premium apps</p>
                                        </div>
                                        <button class="btn btn-success d-block mx-auto mt-4"><a href="{{route('buy',['offer'=>'business'])}}" class="basic"  style="color: white">Purchase</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="" title="edit" style="position: absolute;right: 15px"><i data-feather="edit-3"></i></a>
                                        <h5 class="text-center text-uppercase mt-3 mb-4">Professional</h5>
                                        <i data-feather="briefcase" class="text-primary icon-xxl d-block mx-auto my-3"></i>
                                        <h3 class="text-center font-weight-light">150 Go</h3>
                                        <p class="text-muted text-center mb-4 font-weight-light">Monthly</p>
                                        <h6 class="text-muted text-center mb-4 font-weight-normal">2200 CFA</h6>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-primary mr-2"></i>
                                            <p>Accounting dashboard</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-primary mr-2"></i>
                                            <p>Invoicing</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-primary mr-2"></i>
                                            <p>Online payments</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-primary mr-2"></i>
                                            <p>Branded website</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-primary mr-2"></i>
                                            <p>Dedicated account manager</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <i data-feather="check" class="icon-md text-primary mr-2"></i>
                                            <p>Premium apps</p>
                                        </div>
                                        <button class="btn btn-primary d-block mx-auto mt-4"><a href="{{route('buy',['offer'=>'pro'])}}" class="basic"  style="color: white">Purchase</a></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('admin.footer_other')