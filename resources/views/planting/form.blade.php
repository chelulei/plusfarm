
<div class="form-group row">
        {!! Form::label('task','Task:', ["class"=>"col-form-label col-md-2"]) !!}
        <div class="col-md-10">
        <select class="form-control" id="selection4" name="task" onclick='onSelect()'>
        <option value="" selected disabled>--Choose Task--</option>
        <option value="Planting">Planting</option>
        <option value="Seeds">Seeds</option>
        <option value="Fertilizer">Fertilizer</option>
        <option value="Labour">Labour</option>
        <option value="Heavy Equipment">Heavy Equipment</option>
        <option value="Farm tools">Farm tools</option>
        <option value="Transportation">Transportation</option>
        <option value="Herbicide">Herbicide</option>
        <option value="Pesticide">Pesticide</option>
        <option value="Top Dressing">Top Dressing</option>
        <option value="Weeding<">Weeding</option>
        <option value="Irrigation">Irrigation</option>
        <option value="Mulching">Mulching</option>
        <option value="Grafting">Grafting</option>
        <option value="Prunning">Prunning</option>
        </select>
        </div>
     </div>
<div class="form-row" id="otherFieldGroupDiv4">
  {!! Form::label("fert_types","Type:", ["class"=>"col-form-label col-md-2"]) !!}
      <div class="form-group col-md-10">
         <select class="form-control" id="otherField5" name="fert_types" required>
            <option value="" selected disabled>--Choose Fertilizer Type--</option>
            <option value="DAP"> Di-Ammonium phosphate (DAP) -Cereals, horticulture</option>
            <option value="Urea"> Urea -Cereals,sugarcane</option>
            <option value="CAN"> CAN - Cereals,horticulture, coffee</option>
            <option value="NPK 26:5:5"> NPK 26:5:5-Tea</option>
            <option value="NPK 25:5:5:5S"> NPK 25:5:5:5S-Tea</option>
            <option value="NPK 23:23:0 "> NPK 23:23:0 Cereals</option>
            <option value="Calcium Nitrate"> Calcium Nitrate-Flowers and vegetables</option>
            <option value="Ammonium Sulphate"> Ammonium Sulphate-Rice</option>
            <option value="NPK 17:17:17"> NPK 17:17:17-Coffee and fruits</option>
            <option value="MOP"> Muriate of Potash (MOP)-Fruits and sugarcane</option>
        </select>
        </div><!-- /.form-group col-md-6 -->
 </div>
    <div class="form-row" id="otherFieldGroupDiv24">
  {!! Form::label("herb_types","Type:", ["class"=>"col-form-label col-md-2"]) !!}
      <div class="form-group col-md-10">
         <select class="form-control" id="otherField22" name="herb_types" required>
            <option value="" selected disabled>--Choose Herbicide Type--</option>
                  <option value="480SC">Ambar 480SC</option>
                  <option value="860 SL">Agromine® 860 SL</option>
                  <option value="240 EC">Bentagran®Top 240 EC</option>
                  <option value="450 EC">Breakdown® 450 EC</option>
                  <option value="240EC">Commander® 240EC</option>
                  <option value="480 SL">Catapult® 480 SL</option>
                  <option value=" 480 SL">Clampdown® 480 SL</option>
        </select>
        </div><!-- /.form-group col-md-6 -->
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
