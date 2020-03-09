
    <div class="form-group row required">
        {!! Form::label("name","Crop Name",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')? "is-invalid":""), 'placeholder'=>'Name', 'required'=>'']) !!}
             @if($errors->has('name'))
            <span class="invalid-feedback">{{ $errors->first('name') }}</span>
           @endif
        </div>

    </div>
<div class="form-group row required">
        {!! Form::label("varieties","Varieties",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
          {!! Form::text('varieties', null, ['class' => 'form-control'.($errors->has('varieties')?" is-invalid":""),'rows' => 3, 'cols' =>5,'required'=>'']) !!}
             @if($errors->has('varieties'))
            <span class="invalid-feedback">{{ $errors->first('varieties') }}</span>
            @endif
        </div>
    </div>

