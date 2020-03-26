@csrf
 <div class="form-row">
     <div class="form-group col-md-6">
        <label for="farm_id">Farm:</label>
 <select name="farm_id" class="form-control"  required>
        <option value="" selected disabled>--- Select Farm ---</option>
              @foreach ($frms as $key => $value)
              <option value="{{ $key }}" {{ $key == $produce->farm_id ? 'selected' : '' }}>
                {{ $value}}
              </option>
              @endforeach
      </select>
    @if($errors->has('farm_id'))
        <span class="invalid-feedback">{{ $errors->first('farm_id') }}</span>
    @endif
    </div>
   <div class="form-group col-md-6">
 <label for="size">Size(ha):</label>
      <input id="size" type="number" name="size" value="{{ old('size',$produce->size) }}" class="form-control {{ $errors->has('size') ? 'is-invalid' : ' ' }}"  required>
    @if($errors->has('size'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('size') }}</strong>
    </div>
     @endif
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="plant_id">Farm produce:</label>
      <select name="plant_id" class="form-control"  required>
        <option value="" selected disabled>--- Select Produce ---</option>
              @foreach ($plants as $key => $value)
              <option value="{{ $key }}" {{ $key == $produce->plant_id ? 'selected' : '' }}>{{ $value}}</option>
              @endforeach
      </select>
    </div>
    <div class="form-group col-md-6">
        <label for="variety">Varieties:</label>
      <select   name="variety_id"  class="form-control" required>
        <option value="" selected disabled>--Select Variety--</option>
      </select>
    </div>
    </div>

  <div class="form-row">
    <div class="form-group col-md-6">
       <label for="">Planting Date:</label>
<input id="datepicker1" name="start_date" value="{{ old('start_date',$produce->start_date) }}"  class="dates form-control  {{ $errors->has('start_date') ? 'is-invalid' : ' ' }}"  type="text" autocomplete="off">
@if($errors->has('start_date'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('start_date') }}</strong>
    </div>
     @endif
     </div>
    <div class="form-group col-md-6">
      <label for=""></label>
    <input type="text" class="form-control mt-2" name="" id="" disabled>
    </div>
  </div>
    <div class="form-row">
   <div class="form-group col-md-12">
      <label for="farm_mode">Farming Mode:</label>
   <select id="farm_mode" class="form-control"  name="farm_mode" required>
       <option value="" selected disabled>--Select Type---</option>
      <option value="Mono-Croping" {{ old('farm_mode',$produce->farm_mode ) == 'Mono-Croping' ? 'selected' : '' }}>Mono-Croping</option>
      <option value="Inter-Croping" {{ old('farm_mode',$produce->farm_mode ) == 'Inter-Croping' ? 'selected' : '' }}>Inter-Croping</option>
      </select>
     </div>
    </div>
 <div class="form-row" id="otherFieldGroupDiv">
      <div class="form-group col-md-6">
          <label for="plant_id2">Produce to Intercrop:</label>
            <select id="otherField1" name="plant_id2" class="form-control"  required>
              <option value="">--- Select Produce ---</option>
                    @foreach ($plants as $key => $value)
                    <option value="{{ $key }}" {{ $key == $produce->plant_id ? 'selected' : '' }}>{{ $value}}</option>
                    @endforeach
            </select>
        </div><!-- /.form-group col-md-6 -->
        <div class="form-group col-md-6">
        <label for="variety">Varieties:</label>
              <select   name="variety2"  id="otherField2" class="form-control" required>
                <option value="" selected disabled>--State Variety--</option>
              </select>
        </div><!-- /.form-group col-md-6 -->

 </div>

 <div class="form-group">
        <button type="submit" class="btn btn-outline-success btn-lg">{{ $produce->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.produces.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
    </div>
