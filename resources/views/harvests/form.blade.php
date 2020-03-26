<div class="form-group">
       <label class="control-label" >Total Harvest kg</label>
 <input id="total_harv" type="number" name="total_harv" value="{{ old('total_harv') }}" class="form-control {{ $errors->has('total_harv') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('total_harv'))
            <span class="is-invalid">{{ $errors->first('total_harv') }}</span>
        @endif
     </div>
   <div class="form-group">
         <label class="control-label" >Total Income</label>
         <input id="total_inc" type="number" name="total_inc" value="{{ old('total_inc') }}" class="form-control {{ $errors->has('total_inc	') ? 'is-invalid' : ' ' }}"  required>
        @if($errors->has('total_inc'))
            <span class="is-invalid">{{ $errors->first('total_inc') }}</span>
        @endif
     </div>
      <div class="form-group">
         <label class="control-labe" >Remarks</label>
       {!! Form::textarea('remarks', null, ['class' => 'form-control'.($errors->has('remarks')?" is-invalid":"") ,'rows' => 3, 'cols' =>5]) !!}
                 @if($errors->has('remarks'))
                     <span class="invalid-feedback">{{ $errors->first('remarks') }}</span>
                 @endif

     </div>












