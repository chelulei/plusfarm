<div class="form-group">
       <label class="control-label" >Total Harvest (kgs)</label>
 <input id="txt1" type="number" name="total_harv" value="{{ old('total_harv') }}" class="form-control {{ $errors->has('total_harv') ? 'is-invalid' : ' ' }}" onkeyup="sum();" required>
        @if($errors->has('total_harv'))
            <span class="is-invalid">{{ $errors->first('total_harv') }}</span>
        @endif
     </div>
     <div class="form-group">
         <label class="control-label" >Price/kg (Kshs)</label>
         <input id="txt2" type="number" name="price"  class="form-control {{ $errors->has('price') ? 'is-invalid' : ' ' }}" onkeyup="sum();" required>
        @if($errors->has('price'))
            <span class="is-invalid">{{ $errors->first('price') }}</span>
        @endif
     </div>
   <div class="form-group">
         <label class="control-label" >Total Income (Kshs)</label>
         <input id="txt3" type="number"  value="" class="form-control"  disabled>
     </div>
      <div class="form-group">
            <label class="control-label" >Details</label>
              {!! Form::textarea('details', null, ['class' => 'form-control'.($errors->has('details')?" is-invalid":""),'rows' => 3, 'cols' =>5]) !!}
                 @if($errors->has('details'))
                     <span class="invalid-feedback">{{ $errors->first('details') }}</span>
                 @endif
     </div>
      <div class="form-group">
            <label class="control-label" >Remarks</label>
       {!! Form::textarea('remarks', null, ['class' => 'form-control'.($errors->has('remarks')?" is-invalid":"") ,'rows' => 3, 'cols' =>5]) !!}
                 @if($errors->has('remarks'))
                     <span class="invalid-feedback">{{ $errors->first('remarks') }}</span>
                 @endif
     </div>
 @include('harvests.script')












