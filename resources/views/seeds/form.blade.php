
    <div class="form-group row required">
         {!! Form::label('plant_id', 'Plant', ['class' => 'col-form-label col-md-2']) !!}
        <div class="col-md-10">
          {!! Form::select('plant_id', App\Plant::pluck('name', 'id'),  old('plant'), ['class' => 'form-control', 'placeholder' => 'Choose plant', 'required'=>'']) !!}
        @if($errors->has('plant_id'))
            <span class="is-invalid">{{ $errors->first('plant_id') }}</span>
        @endif
        </div>
     </div>
     <div class="form-group row required">
        {!! Form::label("name","Name",["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
          {!! Form::text('name', null, ['class' => 'form-control'.($errors->has('varieties')?" is-invalid":""),'rows' => 3, 'cols' =>5,'required'=>'']) !!}
             @if($errors->has('name'))
            <span class="invalid-feedback">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('image',"Image",["class"=>"col-form-label col-md-2"]) !!}
        <br>
         <div class="col-md-10">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-new" style="width: 200px; height: 150px;">
                <img src="{{asset('images/noimage.png')}}">
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



