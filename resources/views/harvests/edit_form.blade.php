<div class="form-group">
        <label class="control-label" >Total Harvest</label>
      <input type="text" name="total_harv" id="task45" class="form-control" required/>
     </div>
     <div class="form-group">
         <label class="control-label" >Total Income</label>
         <input id="cost45" type="text" name="total_inc" value="{{ old('total_inc') }}" class="form-control {{ $errors->has('total_inc') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('total_inc'))
            <span class="is-invalid">{{ $errors->first('total_inc') }}</span>
        @endif
     </div>
      <div class="form-group">
         <label class="control-labe" >Details</label>
       {!! Form::textarea('remarks', null, ['class' => 'form-control'.($errors->has('remarks')?" is-invalid":"") ,'id' => 'remarks45', 'rows' => 3, 'cols' =>5]) !!}
                 @if($errors->has('remarks'))
                     <span class="invalid-feedback">{{ $errors->first('remarks') }}</span>
                 @endif
     </div>












