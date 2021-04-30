@include('admin.menu')
<div class="page-content users">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit user</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit user </h6>

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
                    <form method="POST" action="{{route('users.update',$user)}}">
                        @csrf
                        {{method_field('PATCH')}}
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
                                        <input type="text" class="form-control" name="account" disabled placeholder="Enter Account" value="{{$info->accountname}}">
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
                                                <input  type="text" class="form-control" name="account" disabled placeholder="Enter Account" value="">
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
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-group">

                                            <strong>Role:</strong>

                                            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}

                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary submit">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
@include('admin.footer')