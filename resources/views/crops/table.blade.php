<table class="table table-bordered" id="Data_Table">
    <thead>
    <tr>
        <th>Name</th>
         <th>image</th>
        <th>varieties</th>
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
                @if ($crop->image_url)
           <img src="{{ ($crop->image_url)}}" alt="{{ $crop->name}}"
                    class="img-fluid"  width="100" height="100">
                     @endif
            </td>
            <td>
            <ul>
          @foreach ($crop->varieties as $variety)
             <li>{{ $variety->name ?? ''}}</li>
           @endforeach
            </ul>
          </td>
          <td>
              <div class="btn-group" role="group" aria-label="Basic example">
               <a data-toggle="tooltip" data-placement="top" title="Edit"
               href="{{ route('backend.plants.edit',$crop->id)}}" class="btn btn-sm  btn-outline-success">
                    <i class="fa fa-edit"></i>
                </a>
                   <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$crop->id}})"
              data-target="#DeleteModal" class="btn   btn-sm  btn-outline-danger">
              DELETE
              <i class="fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="Delete"></i>
              </a>
            </div>
          </td>
            @endforeach
        </tr>
    </tbody>
</table>
  @include('crops.modal')
@include('crops.script')