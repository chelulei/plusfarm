<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
        <th>Action</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($permissions as $permissions)
        <tr>
            <td>
                   <div class="btn-group" role="group" aria-label="Basic example">
 <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.permissions.edit',$permissions->id)}}" class="btn btn-md  btn-outline-success">
                    <i class="fa fa-edit"></i>

                </a>
             <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$permissions->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i>
             </a>
                   </div>
            </td>
            <td>{{$permissions->name}}</td>
            @endforeach
        </tr>
    </tbody>
</table>
