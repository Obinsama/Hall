@include('admin.menu')
<div class="page-content users">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('userMgmt')}}">Users Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit user</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Form Grid</h6>
                    <form method="post" action="{{route('edit',['id'=>$user->id])}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter first name" value="{{$user->name}}">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$user->email}}">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        @if($info!=null)
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Account</label>
                                        <input type="text" class="form-control" name="account" placeholder="Enter Account" value="{{$info->accountname}}">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Group</label>
                                        <input type="text" class="form-control" name="group" placeholder="Enter Group" value="{{$info->groupname}}">
                                    </div>
                                </div><!-- Col -->
                                @else
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Account</label>
                                                <input type="text" class="form-control" name="account" placeholder="Enter Account" value="">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Group</label>
                                                <input type="text" class="form-control" name="group" placeholder="Enter Group" value="">
                                            </div>
                                        </div><!-- Col -->
                                        @endif
                                    </div><!-- Row -->
                                    <button type="submit" class="btn btn-primary submit">Submit form</button>
                                    @if($msg!=null)
                                        @if($msg=='Update Success')
                                            <span class="" style="color: green">{{$msg}}</span>
                                        @else
                                            <span class="" style="color: red">{{$msg}}</span>
                        @endif
                        @endif
                    </form>


                </div>
            </div>
        </div>
@include('admin.footer')