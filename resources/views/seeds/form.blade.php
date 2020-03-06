
    <div class="form-group row required">
        {!! Form::label("plant_id","Crop Name",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::select('plant_id',  App\Plant::pluck('name', 'id'), null, ["class"=>"form-control".($errors->has('plant_id')?" is-invalid":""), 'placeholder' => 'Choose Crop','required' =>'']) !!}
            <span id="error-plant_id" class="invalid-feedback"></span>
        </div>
    </div>
    <div class="form-group row required">
        {!! Form::label("name","seed Name",["class"=>"col-form-label col-md-3"]) !!}
        <div class="col-md-9">
            {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')? "is-invalid":""), 'placeholder'=>'Name']) !!}
            <span id="error-name" class="invalid-feedback"></span>
        </div>
    </div>



