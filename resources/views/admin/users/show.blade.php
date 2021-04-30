
@include('admin.menu')
<div class="page-content users">
    <div class="col-md-6 ml-auto mr-auto">
        <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                 
                </div>
                <h4 class="card-title">Show User</h4>

            </div>
            <div class="card-body ">
                <div class="form-group bmd-form-group">
                    <strong> Nom :</strong>
                    {{ $user->name }}
                </div>
                <div class="form-group bmd-form-group">
                    <strong> Email :</strong>
                    {{ $user->email }}
                </div>

                {{--                    <div class="category form-category">* Required fields</div>--}}
            </div>
            <strong style="margin-left: 30px">Roles :</strong>
            <div class="row" style="margin-left: 30px;">
                <div class="form-group">
                @if(!empty($user->getRoleNames()))

                    @foreach($user->getRoleNames() as $v)

                        <label class="badge badge-success">{{ $v }}</label>

                    @endforeach

                @endif
                </div>
            </div>

        <div class="card-footer text-right">
            <a href="{{route('users.index')}}" class="btn btn-primary ">Back</a>

        </div>
    </div>

    </div>
</div>
@include('admin.footer_other')