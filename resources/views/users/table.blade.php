<table id="Data_Table" class="table table-bordered">
    <thead>
    <tr>
        <th>Action</th>
        <th>Image</th>
        <th>Name</th>
        <th>Username</th>
        <th>Role</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $key => $user)
        <tr>
            <td>
                 @can('users-list')
                <a data-toggle="tooltip" data-placement="top" title="View Details"
                class="btn  btn-sm btn-outline-info" href="{{ route('backend.users.show',$user->id) }}">
                    <i class="fa fa-search"></i>
                </a>
                 @endcan
                  @can('users-edit')
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.users.edit',$user->id)}}" class="btn btn-sm  btn-outline-success">
                    <i class="fa fa-edit"></i>
                </a>
                  @endcan
                <!-- /.btn  btn-default -->
                @if($user->id == config('custom.default_user_id') || $user->id ==  Auth::user()->id)
                    <button onclick="return false" type="submit" class="btn  btn-sm  btn-danger disabled">
                        <i class="fa fa-times"></i>
                    </button>
                @else
             @can('users-delete')
                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$user->id}})"
              data-target="#DeleteModal" class="btn   btn-sm  btn-outline-danger">
              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>
                </a>
              @endcan
                @endif

            </td>
            <td><img src="{{$user->image_url}} "  class="img-fluid"
                alt="{{$user->name}}" width="100" height="100"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            {{-- <td>
                @if($user->status == 1)
                    <a href="{{route('deactivate',[$user->id])}}" ><span class="badge badge-success">Active</span></a>
                    @else
                    <a href="{{route('activate',[$user->id])}}" ><span class="badge badge-danger">Inactive</span></a>
                    @endif
            </td> --}}
            <td>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ ucwords($v) }}</label>
                    @endforeach
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


