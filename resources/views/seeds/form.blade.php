
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



