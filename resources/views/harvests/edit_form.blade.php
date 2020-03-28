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
            <label class="control-label" >Details</label>
              {!! Form::textarea('details', null, ['class' => 'form-control'.($errors->has('details')?" is-invalid":""),'rows' => 3, 'cols' =>5,'id' =>'d45']) !!}
                 @if($errors->has('details'))
                     <span class="invalid-feedback">{{ $errors->first('details') }}</span>
                 @endif
     </div>
      <div class="form-group">
            <label class="control-label" >Remarks</label>
       {!! Form::textarea('remarks', null, ['class' => 'form-control'.($errors->has('remarks')?" is-invalid":"") ,'rows' => 3, 'cols' =>5,'id' =>'rem45']) !!}
                 @if($errors->has('remarks'))
                     <span class="invalid-feedback">{{ $errors->first('remarks') }}</span>
                 @endif
     </div>












