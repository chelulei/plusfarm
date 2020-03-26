<div class="form-group row">
        {!! Form::label('task','Task:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
        <select class="form-control" id="selection6" name="task" required>
         <option value="" selected disabled>--Choose Task--</option>
         <option value="Storage Materials">Storage Materials</option>
        <option value="Farm tools">Farm tools</option>
        <option value="Labour">Labour</option>
        <option value="Shelling">Shelling</option>
        <option value="Sorting">Sorting</option>
        <option value="Drying">Drying</option>
        <option value="Grading">Grading</option>
        <option value="Transportation ">Transportation </option>
        <option value="Heavy Machinery">Heavy Machinery </option>
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
        {!! Form::label('remarks','Remark', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
       {!! Form::textarea('remarks', null, ['class' => 'form-control'.($errors->has('remarks')?" is-invalid":"") ,'rows' => 3, 'cols' =>5]) !!}
                 @if($errors->has('remarks'))
                     <span class="invalid-feedback">{{ $errors->first('remarks') }}</span>
                 @endif
        </div>
     </div>












