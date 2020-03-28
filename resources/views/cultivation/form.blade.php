<div class="form-group row">
        {!! Form::label('task','Task:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
        <select class="form-control" id="selection5" name="task" required>
         <option value="" selected disabled>--Choose Task--</option>
         <option value="Weeding">Weeding</option>
         <option value="Irrigation">Irrigation</option>
         <option value="other">Other Activity</option>
        </select>
        </div>
     </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <input type="hidden" class="form-control">
     </div>
    <div class="form-group col-md-10"  id="othergroup">
      <input id="otherinput" name="task2" type="text" value="{{ old('task2') }}"
      class="form-control {{ $errors->has('task2') ? 'is-invalid' : ' ' }}" placeholder="Input your activity"  required>
        @if($errors->has('task2'))
            <span class="is-invalid">{{ $errors->first('task2') }}</span>
        @endif
    </div>
  </div>

   <div class="form-group row">
        {!! Form::label('cost','Cost:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
         <input id="cost4" type="number" name="cost" value="{{ old('cost') }}" class="form-control {{ $errors->has('cost') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('cost'))
            <span class="is-invalid">{{ $errors->first('cost') }}</span>
        @endif
        </div>
     </div>
   <div class="form-group row ">
         {!! Form::label('details','Details', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
              {!! Form::textarea('details', null, ['class' => 'form-control'.($errors->has('details')?" is-invalid":""),'rows' => 3, 'cols' =>5, 'id'=>'details4']) !!}
                 @if($errors->has('details'))
                     <span class="invalid-feedback">{{ $errors->first('details') }}</span>
                 @endif
        </div>
     </div>
      <div class="form-group row">
        {!! Form::label('remarks','Remark', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
       {!! Form::textarea('remarks', null, ['class' => 'form-control'.($errors->has('remarks')?" is-invalid":"") ,'rows' => 3, 'cols' =>5, 'id'=>'remarks4']) !!}
                 @if($errors->has('remarks'))
                     <span class="invalid-feedback">{{ $errors->first('remarks') }}</span>
                 @endif
        </div>
     </div>












