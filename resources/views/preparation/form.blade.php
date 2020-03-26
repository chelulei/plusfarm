<div class="form-group row">
        {!! Form::label('task','Task:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
        <select class="form-control" id="selection2" name="task" required>
         <option value="" selected disabled>--Choose Task--</option>
         <option value="Bush Clearing">Bush Clearing</option>
         <option value="Tilling">Tilling</option>
        <option value="Harrowing"> Harrowing </option>
         <option value="Ploughing">Ploughing </option>
         <option value="Herbicide">Herbicide </option>
         <option value="Pesticide">Pesticide </option>
         <option value="Labour">Labour</option>
         <option value="Farm tools">Farm tools </option>
         <option value="Transportation">Transportation</option>
         <option value="Farm equipment">Farm equipment</option>
        </select>
        </div>
     </div>
    <div class="form-row" id="otherFieldGroupDiv">
  {!! Form::label("herb_types","Type:", ["class"=>"col-form-label col-md-2"]) !!}
      <div class="form-group col-md-10">
         <select class="form-control" id="otherField3" name="herb_types" required>
            <option value="" selected disabled>--Choose Herbicide Type--</option>
                  <option value="480SC">Ambar 480SC</option>
                  <option value="860 SL">Agromine® 860 SL</option>
                  <option value="240 EC">Bentagran®Top 240 EC</option>
                  <option value="450 EC">Breakdown® 450 EC</option>
                  <option value="240EC">Commander® 240EC</option>
                  <option value="480 SL">Catapult® 480 SL</option>
                  <option value=" 480 SL">Clampdown® 480 SL</option>
        </select>
        </div><!-- /.form-group col-md-6 -->
 </div>
   <div class="form-group row">
        {!! Form::label('cost','Cost:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
         <input  type="number" name="cost" value="{{ old('cost') }}" class="form-control {{ $errors->has('cost') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('cost'))
            <span class="is-invalid">{{ $errors->first('cost') }}</span>
        @endif
        </div>
     </div>
   <div class="form-group row ">
         {!! Form::label('details','Details', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
              {!! Form::textarea('details', null, ['class' => 'form-control'.($errors->has('details')?" is-invalid":""),'rows' => 3, 'cols' =>5]) !!}
                 @if($errors->has('details'))
                     <span class="invalid-feedback">{{ $errors->first('details') }}</span>
                 @endif
        </div>
     </div>
      <div class="form-group row">
        {!! Form::label('remarks','Remark', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
       {!! Form::textarea('remarks', null, ['class' => 'form-control'.($errors->has('remarks')?" is-invalid":"") ,'rows' => 3, 'cols' =>5]) !!}
                 @if($errors->has('remarks'))
                     <span class="invalid-feedback">{{ $errors->first('remarks') }}</span>
                 @endif
        </div>
     </div>












