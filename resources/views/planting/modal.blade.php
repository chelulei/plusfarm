 <!-- Modal -->
<div class="modal fade" id="exampleModal-{{$planting->id ?? null }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-danger">
        <h5 class="modal-title text-white text-center" id="exampleModalLabel">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       {!! Form::open([
            'method' => 'DELETE',
                        'route'  =>['backend.plantings.destroy', $planting->id ?? null ]
                    ]) !!}
           @csrf
           @method('DELETE')

      <div class="modal-body">
      <p>Do you really want to delete these records? This process cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
       {!! Form::close() !!}
    </div>
  </div>
</div>
