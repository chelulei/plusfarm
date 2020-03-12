<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
         <th>Variety Name</th>
         <th>Produce</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($crops as $crop)
        <tr>
             <td>
                {{ $crop->name}}
            </td>
             <td>
                {{ $crop->plant->name}}
            </td>
            <td>
                <button type="button" class="btn btn-outline-success"
                        data-prepid="{{$crop->id}}"
                        data-myplant="{{$crop->plant->name}}"
                        data-myname="{{$crop->name}}"
                        data-toggle="modal" data-target="#edit-pre">
                         <i class="fa fa-edit"></i>
                        EDIT</button>
                  <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$crop->id}})"
              data-target="#DeleteModal" class="btn   btn-md  btn-outline-danger">
              DELETE
              <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>
            </td>
            @endforeach
        </tr>
    </tbody>
</table>
