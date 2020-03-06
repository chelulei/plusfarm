
    <div class="form-group row required">
        {!! Form::label("name","Crop Name",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')? "is-invalid":""), 'placeholder'=>'Name']) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>


