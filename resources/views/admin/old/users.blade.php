
@include('admin.menu')
        <div class="page-content users">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Management</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">List Of Users</h6>
                            <p class="card-description">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                        <tr>
                                            <th>{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            @if($user->blocked==0)
                                            <td ><a href="{{route("blockUser",['id'=>$user->id])}}"  title="block" style="color: red"><i class="link-icon" data-feather="x-octagon" ></i></a></td>
                                            @else
                                                <td ><a href="{{route("blockUser",['id'=>$user->id])}}"  title="unblock" style="color: green"><i class="link-icon" data-feather="octagon" ></i></a></td>

                                            @endif
                                            <td><a href="{{route("deleteUser",['id'=>$user->id])}}" title="delete" style="color: red"><i class="link-icon" data-feather="trash" ></i></a></td>
                                            <td> <a href="{{route("editUser",['id'=>$user->id])}}" title="edit"><i class="link-icon" data-feather="edit-3" ></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('admin.footer_other')

