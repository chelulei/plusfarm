<table id="Data_Table" class="table table-bordered display nowrap" style="width:100%">
    <thead>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Date Registered</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $key => $user)
        <tr>
            <td><img src="{{ $user->image_url}} " alt="" class="img-fluid"  width="100" height="100"></td>
            <td>{{$user->name}}</td>
             <td>{{$user->created_at->toFormattedDateString() }}</td>
             <td>
                <a data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('backend.farmers.edit',$user->id)}}" class="btn btn-sm  btn-outline-success">
                    <i class="fa fa-edit"></i>
                </a>
             </td>
        </tr>
    @endforeach
    </tbody>
</table>


