<table id="Data_Table" class="table table-bordered display nowrap" style="width:100%">
    <thead>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Date Registered</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $key => $user)
        <tr>
            <td><img src="{{ $user->image_url}} " alt="" width="200" height="200"></td>
            <td>{{$user->name}}</td>
             <td>{{$user->created_at->toFormattedDateString() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>


