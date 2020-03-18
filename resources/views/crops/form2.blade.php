@csrf
<div class="col-sm-8 offset-2">
        <div class="form-group">
            <strong>Produce Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Variety:</strong>
            {!! Form::select('varieties[]', $varieties,$plantVariety, array('class' => 'form-control','multiple')) !!}
        </div>
        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
            {!! Form::label('image') !!}
            <br>
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new" style="width: 200px; height: 150px;">
                    <img src="{{ ($plant->image_url) ? $plant->image_url : ''}}" alt=""
                    width="200" height="200" >
                </div>
                <br>
                <div class="fileinput-preview fileinput-exists" style="max-width: 200px; max-height: 150px;"></div>
                <div>
                <span class="btn btn-outline-default btn-file btn-outline-success mt-3">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    {!! Form::file('image') !!}
                </span>

                    <a href="#" class="btn btn-default fileinput-exists btn-outline-danger mt-3" data-dismiss="fileinput">Remove</a>
                </div>
            </div>
            @if($errors->has('image'))
                <span class="help-block">{{ $errors->first('image') }}</span>
            @endif
        </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-success btn-lg">Save</button>
        <a href="{{ route('backend.plants.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
    </div>
</div>
