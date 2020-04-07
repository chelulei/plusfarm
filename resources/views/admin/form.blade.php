@csrf
 <div class="form-row">
     <div class="form-group col-md-12">
       <label for="">Farm Name:</label>
     <input id="farm_name" type="text" name="farm_name" value="{{ old('farm_name',$farm->farm_name) }}" class="form-control {{ $errors->has('farm_name') ? 'is-invalid' : ' ' }}"  required>
    @if($errors->has('farm_name'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('farm_name') }}</strong>
		</div>
  	@endif
    </div>
    {{-- <div class="form-group col-md-6">

    </div> --}}

  </div>

 <div class="form-row">
     <div class="form-group col-md-6">
       <label for="size">Size(ha):</label>
      <input id="size" type="number" name="size" value="{{ old('size',$farm->size) }}" class="form-control {{ $errors->has('size') ? 'is-invalid' : ' ' }}"  required>
    @if($errors->has('size'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('size') }}</strong>
		</div>
  	@endif
    </div>
    <div class="form-group col-md-6">
   <label for="">Farm ownership:</label>
    <select name="ownership"  class="form-control"  required>
                <option value="">--Select ownership---</option>
                <option value="Personal" {{ old('ownership',$farm->ownership ) == 'Personal' ? 'selected' : '' }}>Personal</option>
                <option value="Leased" {{ old('ownership',$farm->ownership ) == 'Leased' ? 'selected' : '' }}>Leased</option>
                <option value="Community"  {{ old('ownership',$farm->ownership ) == 'Community' ? 'selected' : '' }}>Community</option>
                 <option value="Government"  {{ old('ownership',$farm->ownership ) == 'Government' ? 'selected' : '' }}>Government</option>
                  <option value="other"  {{ old('ownership',$farm->ownership ) == 'other' ? 'selected' : '' }}>Other</option>
            </select>

   @if($errors->has('ownership'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('ownership') }}</strong>
		</div>
  	@endif
    </div>
  </div>
<div class="form-row">
     <div class="form-group col-md-6">
       <label for="">Soil Type:</label>
        <select id="soiltype" class="form-control" name="soiltype" required>
        <option value="" selected disabled>--Choose Soil Type--</option>
       <option value="Loam" {{ old('soiltype',$farm->soiltype ) == 'Loam' ? 'selected' : '' }}>Loam</option>
      <option value="Clay" {{ old('soiltype',$farm->soiltype ) == 'Clay' ? 'selected' : '' }}>Clay</option>
      <option value="Sand"  {{ old('soiltype',$farm->soiltype ) == 'sand' ? 'selected' : '' }}>Sand</option>
        </select>
    @if($errors->has('soiltype'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('soiltype') }}</strong>
		</div>
  	@endif
    </div>

    <div class="form-group col-md-6">
   <label for="">Soil Ph:</label>
 <input id="soilph" type="number" name="soilph" value="{{ old('soilph',$farm->soilph) }}" class="form-control {{ $errors->has('soilph') ? 'is-invalid' : ' ' }}">
   @if($errors->has('soilph'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('soilph') }}</strong>
		</div>
  	@endif
    </div>

  </div>

  <div class="form-row">
     <div class="form-group col-md-6">
       <label for="">Humidity:</label>
      <input id="humidity" type="text" name="humidity" value="{{ old('humidity',$farm->humidity) }}" class="form-control {{ $errors->has('humidity') ? 'is-invalid' : ' ' }}"  required>
    @if($errors->has('humidity'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('humidity') }}</strong>
		</div>
  	@endif
    </div>
    <div class="form-group col-md-6">
   <label for="">Mechanization:</label>
 <select id="mechanization" class="form-control" name="mechanization" required>
        <option value="" selected disabled>--Choose Mechanization--</option>
        <option value="Yes" {{ old('mechanization',$farm->mechanization ) == 'Yes' ? 'selected' : '' }}>Yes</option>
      <option value="No" {{ old('mechanization',$farm->mechanization ) == 'No' ? 'selected' : '' }}>No</option>
        </select>

   @if($errors->has('mechanization'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('mechanization') }}</strong>
		</div>
  	@endif
    </div>

  </div>

<div class="form-row">
     <div class="form-group col-md-6">
       <label for="">Farm County:</label>
       <select id="county" class="form-control" name="county" required>
       <option value="" selected disabled>--Choose county--</option>
        @foreach ($counties as $key => $value)
                    <option value="{{ $key }}" {{ $key == $farm->county ? 'selected' : '' }}>
                      {{ $value}}
                    </option>
                    @endforeach
        </select>
    @if($errors->has('county'))
		<div class="invalid-feedback">
		   <strong>{{ $errors->first('county') }}</strong>
		</div>
  	@endif
    </div>
    <div class="form-group col-md-6">
   <label for="">Sub county:</label>
 <select id="sub_county" class="form-control" name="sub_county" equired>
        <option value="" selected disabled>--Choose Sub county--</option>
        </select>
    </div>

  </div>
  <div class="form-row">
     <div class="form-group col-md-6">
        <label for="">Village:</label>
        <input id="village" type="text" name="village" value="{{ old('village',$farm->village) }}" class="form-control {{ $errors->has('village') ? 'is-invalid' : ' ' }}">

          @if($errors->has('village'))
            <div class="invalid-feedback">
              <strong>{{ $errors->first('village') }}</strong>
            </div>
            @endif
            </div>
    <div class="form-group col-md-6">
  </div>
    <div class="form-group">
        <button type="submit" class="btn btn-sm btn-outline-success btn-lg">{{ $farm->exists ? 'Update' : 'Save' }}</button>
        <a href="{{url()->previous()}}" class="btn btn-sm btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
    </div>
