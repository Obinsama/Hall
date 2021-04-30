
@include('admin.menu')
<div class="page-content roles">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Roles Management</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">List Of Roles</h6>
                    <p class="" style="float: right"><a class="btn btn-success pull-right" href="{{ route('roles.create') }}"> Create New Role</a>
                    </p>
                    {{--<p class="card-description">Add class <code>.table</code></p>--}}
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ROLE NAME</th>
                                <th>GUARD NAME</th>
                                <th>CREATED AT</th>
                                <th>UPDATED AT</th>
                                <th colspan="3">ACTIONS</th>



                            </tr>
                            </thead>
                            <tbody>

                            @foreach($roles as $key => $role)
                                <tr>
                                    <th>{{$role->id}}</th>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->guard_name}}</td>
                                    <td>{{$role->created_at}}</td>
                                    <td>{{$role->updated_at}}</td>

                                    <td><a href="{{route('roles.show',$role)}}" title="Show" style=""  ><i class="link-icon" data-feather="eye" ></i></a></td>
                                    <td><a href="{{route('roles.edit',$role)}}" style=""  ><i class="link-icon" data-feather="edit-3" ></i></a></td>
                                    <td><a href="{{route("roles.destroy",$role)}}" title="delete" style="color: red" data-method="DELETE"><i class="link-icon" data-feather="trash" ></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $roles->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer_other')

