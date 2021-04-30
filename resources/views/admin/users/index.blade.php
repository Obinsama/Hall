
@include('admin.menu')
<div class="page-content users">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Management</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row align-item-center ">
                    <div class="col-lg-6">
                    <h6 class="card-title">List Of Users</h6>
                    <p class="card-description">Add class <code>.table</code></p>
                </div>
                <div class="col-lg-6">
                    <div class="email-search">
                        <div class="input-group input-search">
                            <input class="form-control" type="text" placeholder="Search user..."><span class="input-group-btn">
                            <button class="btn btn-outline-secondary  custom-search" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button></span>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>LAST NAME</th>
                                <th>USERNAME</th>
                                <th>PRODUCT</th>
                                <th>ROLE</th>
                                <th colspan="3">ACTIONS</th>


                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $key => $user)
                                <tr>
                                    <th>{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))

                                            @foreach($user->getRoleNames() as $v)

                                                <label class="badge badge-success">{{ $v }}</label>

                                            @endforeach

                                        @endif</td>
                                    @can('user-edit')
                                    <td><a href="{{route("users.show",$user)}}" title="edit"><i class="link-icon" data-feather="eye" ></i></a></td>
                                   @endcan
                                    @can('user-block')
                                        @if($user->blocked==0)
                                            {{--<td ><a href="{{route("blockUser",$user)}}"  title="block" style="color: red"><i class="link-icon" data-feather="x-octagon" ></i></a></td>--}}
                                            <td><a href="{{route('users.block',$user)}}" title="block" style="color: red" data-method="delete" ><i class="link-icon" data-feather="x-octagon" ></i></a></td>

                                        @else
                                            <td><a href="{{route('users.block',$user)}}" title="unblock" style="color: green" data-method="delete" ><i class="link-icon" data-feather="octagon" ></i></a></td>

                                            {{--<td ><a href="{{route("blockUser",$user)}}"  title="unblock" style="color: green"><i class="link-icon" data-feather="octagon" ></i></a></td>--}}

                                        @endif
                                    @endcan
                                    {{--<td><a href="{{route("deleteUser",['id'=>$user->id])}}" title="delete" style="color: red"><i class="link-icon" data-feather="trash" ></i></a></td>--}}
                                    @can('user-delete')
                                        <td><a href="{{route('users.destroy',$user)}}" style="color: red" data-method="DELETE" ><i class="link-icon" data-feather="trash" ></i></a></td>
                                    @endcan
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $data->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer_other')

