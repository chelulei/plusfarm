<div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
        <h4 class="modal-title" id="cropModalLabel">Crops From</h4>
      </div>
       {!! Form::open([
                        'method' => 'POST',
                        'route'  => 'backend.plants.store',
                        'files'  => TRUE
                    ]) !!}

           @csrf
            <div class="modal-body">
                @include('crops.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit" name="update" class="btn btn-sm btn-success">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>
