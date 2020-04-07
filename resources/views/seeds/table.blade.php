<table class="table table-bordered" id="Data_Table" >
    <thead>
    <tr>
        <th>Image</th>
       <th>Variety Name</th>
        <th>Days</th>
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
                      class="img-fluid"  width="100" height="100" />
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
                <div class="btn-group" role="group" aria-label="Basic example">

                    @can('varieties-edit')
                 <a data-toggle="tooltip" data-placement="top" title="Edit"
               href="{{ route('backend.seeds.edit',$crop->id)}}" class="btn btn-sm  btn-outline-success">
                    <i class="fa fa-edit"></i>
                </a>
                @endcan
                @can('varieties-delete')
                  <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$crop->id}})"
              data-target="#DeleteModal" class="btn   btn-sm  btn-outline-danger">
              DELETE
              <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>
              @endcan
            </div>
            </td>
            @endforeach
        </tr>
    </tbody>
</table>
@include('seeds.script')

