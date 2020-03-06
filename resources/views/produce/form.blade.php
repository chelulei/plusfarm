@csrf
 <div class="form-group">
    <label for="farm_id">Farm:</label>
    {!! Form::select('farm_id',  App\Farm::pluck('farm_name', 'id'), null, ["class"=>"form-control".($errors->has('farm_id')?" is-invalid":""), 'placeholder' => 'Choose Farm','required' =>'']) !!}
    @if($errors->has('farm_id'))
        <span class="invalid-feedback">{{ $errors->first('farm_id') }}</span>
    @endif
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="plant_id">Farm produce:</label>
      <select name="plant_id" class="form-control"  required>
        <option value="">--- Select Produce ---</option>
              @foreach ($plants as $key => $value)
              <option value="{{ $key }}" {{ $key == $produce->plant_id ? 'selected' : '' }}>{{ $value}}</option>
              @endforeach
      </select>
    </div>
    <div class="form-group col-md-6">
        <label for="variety">Varieties:</label>
      <select   name="variety"  class="form-control" required>
        <option value="">--State Variety--</option>
      </select>
    </div>
    </div>

  <div class="form-row">
     <div class="form-group col-md-6">
       <label for="">Planting Date:</label>
 <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
    </div>
    <div class="form-group col-md-6">
   <label for="">Expected Date:</label>


    </div>
  </div>


    <div class="form-row">
   <div class="form-group col-md-6">
      <label for="farm_mode">Farming Mode:</label>
   <select id="farm_mode" class="form-control" name="farm_mode" required>
        <option value="">Choose...</option>
      <option value="Mono-Cropin" {{ old('farm_mode',$produce->farm_mode ) == 'Mono-Cropin' ? 'selected' : '' }}>Mono-Cropin</option>
      <option value="Inter-Croping" {{ old('farm_mode',$produce->farm_mode ) == 'Inter-Croping' ? 'selected' : '' }}>Inter-Croping</option>
      </select>
     </div><!-- /.form-group col-md-6 -->
   <div class="form-group col-md-6">
     </div><!-- /.form-group col-md-6 -->
    </div>
 <div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $produce->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.produces.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
    </div>
