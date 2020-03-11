 <div class="col-sm-8 offset-2">
    <div class="form-group">
        {!! Form::label("name","Crop Name") !!}
        <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}"  required>
            @if($errors->has('name'))
                <div class="invalid-feedback">
                   <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
    </div>
    <div class="form-group">
        {!! Form::label('image') !!}
        <br>
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new" style="width: 200px; height: 150px;">
                <img src="{{asset('images/noimage.png')}}" alt="">
            </div>
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
    </div>
</div>