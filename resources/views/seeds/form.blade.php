
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
        {!! Form::label("name","seed Name",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-10">
            {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')? "is-invalid":""), 'placeholder'=>'Name']) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>



