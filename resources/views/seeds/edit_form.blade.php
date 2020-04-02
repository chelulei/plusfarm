<div class="col-sm-8 offset-2">
    <div class="form-group row required">
         {!! Form::label('plant_id', 'Plant', ['class' => 'col-form-label col-md-2']) !!}
        <div class="col-md-10">
          {!! Form::select('plant_id', App\Plant::pluck('name', 'id'),  old('plant_id'), ['class' => 'form-control', 'placeholder' => 'Choose plant', 'id'=>'plant']) !!}
        @if($errors->has('plant_id'))
            <span class="is-invalid">{{ $errors->first('plant_id') }}</span>
        @endif
        </div>
     </div>
     <div class="form-group row required">
        {!! Form::label("name","Name",["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">sm          <input id="name" type="text" name="name" value="{{ old('name',$variety->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : ' ' }}"  required>
             @if($errors->has('name'))
            <span class="invalid-feedback">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("days","Months",["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
           <input id="days" type="text" name="days" value="{{ old('days',$variety->days) }}" class="form-control {{ $errors->has('days') ? 'is-invalid' : ' ' }}"  required>
             @if($errors->has('days'))
            <span class="invalid-feedback">{{ $errors->first('days') }}</span>
            @endif
        </div>
    </div>
     <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
            {!! Form::label('image', 'Image', ['class' => 'col-form-label col-md-2']) !!}
            <br>
             <div class="col-md-10">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new" style="width: 200px; height: 150px;">
                    <img src="{{ ($variety->image_url) ? $variety->image_url : ''}}" alt=""
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
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-outline-success btn-sm">Update</button>
        <a href="{{ route('backend.seeds.index') }}" class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">Cancel</a>
    </div>
</div>


