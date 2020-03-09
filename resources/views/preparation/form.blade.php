<div class="form-group row">
        {!! Form::label('task','Task:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
        <select class="form-control" id="task" name="task" required>
         <option value="">--Choose Task--</option>
         <option value="Bush Clearing">Bush Clearing</option>
         <option value="Tilling">Tilling</option>
        <option value="Harrowing"> Harrowing </option>
         <option value="Ploughing">Ploughing </option>
         <option value="Pesticide">Herbicide </option>
         <option value="Pesticide">Pesticide </option>
         <option value="Labour">Labour</option>
         <option value="Farm tools">Farm tools </option>
         <option value="Transportation">Transportation</option>
         <option value="Farm equipment">Farm equipment</option>
         <option value="Other Activity">Other Activity</option>

        </select>
        </div>
     </div>
   <div class="form-group row">
        {!! Form::label('cost','Cost:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
         <input id="cost" type="number" name="cost" value="{{ old('cost') }}" class="form-control {{ $errors->has('cost') ? 'is-invalid' : ' ' }}"  required>
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
        {!! Form::label('remarks','Remarks', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
       {!! Form::textarea('remarks', null, ['class' => 'form-control'.($errors->has('remarks')?" is-invalid":"") ,'rows' => 3, 'cols' =>5]) !!}
                 @if($errors->has('remarks'))
                     <span class="invalid-feedback">{{ $errors->first('remarks') }}</span>
                 @endif
        </div>
     </div>












