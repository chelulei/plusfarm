<div class="form-group row">
        {!! Form::label('task','Task:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
        <select class="form-control" id="task" name="task">
         <option value="">--Choose Task--</option>
        <option value="Planting">Planting</option>
        <option value="Seeds">Seeds</option>
        <option value="Seeds">Fertilizer</option>
        <option value="Labour">Labour</option>
        <option value="Heavy Equipment">Heavy Equipment</option>
        <option value="Other Activities">Other Activities</option>
        <option value="Farm tools">Farm tools</option>
        <option value="Transportation">Transportation</option>
        <option value="Herbicide Pesticide">Herbicide Pesticide</option>
        <option value="Top Dressing">Top Dressing</option>
        <option value="Weeding<">Weeding</option>
        <option value="Irrigation">Irrigation</option>
        <option value="Mulching">Mulching</option>
        <option value="Grafting">Grafting</option>
        <option value="Prunning">Prunning</option>
        </select>
        </div>
     </div>
   <div class="form-group row">
        {!! Form::label('cost','Cost:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
         <input id="cost" type="text" name="cost" value="{{ old('cost') }}" class="form-control {{ $errors->has('cost') ? 'is-invalid' : ' ' }}"  required>
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












