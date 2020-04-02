<table class="table table-bordered" id="Data_Table" >
    <thead>
    <tr>
        <th>Image</th>
       <th>Variety Name</th>
        <th>Months</th>
        <th>Produce Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($crops as $crop)
        <tr>
             <td>
                  @if ($crop->image_url)
            <img src="{{ ($crop->image_url) ? $crop->image_url : ''}}" alt="{{ $crop->name}}"
                      class="img-fluid img-thumbnail"  width="150" height="150" />
            @endif
            </td>
             <td>
                  {{ $crop->name}}
            </td>
            <td>
               {{ $crop->days}}
            </td>
             <td>
                {{ $crop->plant->name}}
            </td>
            <td>
                 <a data-toggle="tooltip" data-placement="top" title="Edit"
               href="{{ route('backend.seeds.edit',$crop->id)}}" class="btn btn-sm  btn-outline-success">
                    <i class="fa fa-edit"></i>
                </a>
                  <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$crop->id}})"
              data-target="#DeleteModal" class="btn   btn-sm  btn-outline-danger">
              DELETE
              <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>
            </td>
            @endforeach
        </tr>
    </tbody>
</table>
@include('seeds.script')

