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
           <img src="{{ ($crop->image_url) ? $crop->image_url : ''}}" alt="{{ $crop->name}}"
                    width="200" height="200" >
                     @endif
            </td>
            <td>
            <ul>
          @foreach ($crop->varieties as $variety)
             <li>{{ $variety->name }}</li>
           @endforeach
            </ul>
          </td>
          <td>
               <a data-toggle="tooltip" data-placement="top" title="Edit"
               href="{{ route('backend.plants.edit',$crop->id)}}" class="btn btn-md  btn-outline-primary">
                    <i class="fa fa-edit"></i>
                </a>
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
  @include('crops.modal')
@include('crops.script')