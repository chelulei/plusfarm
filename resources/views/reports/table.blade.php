<div class="form-row mt-3">
           <div class="form-group col-md-12">
            <select id="otherField1" name="plant_id2" class="form-control"  required>
              <option value="">--- Select Crop ---</option>
                    {{-- @foreach ($produces as $key => $value)
                    <option value="{{ $key }}" {{ $key == $produce->plant_id ? 'selected' : '' }}>{{ $value}}</option>
                    @endforeach --}}
            </select>
             </div>
           <div class="form-group col-md-12">
                 <select id="farm_mode" class="form-control"  name="farm_mode" required>
                    <option value="">--Select Report Type---</option>
                    <option value="Financial Report">Crop Financial Report</option>
                    <option value="Performance Report">Crop Performance Report</option>
                 </select>
            </div>
        </div>
 <div class="table-responsive">
     Plusfarm Kenya Ltd <br>
     PRODUCE FINANCIAL REPORT<br>
     Farm: 1054(34)<br>
     <hr>
     <hr>
     <hr>
<table class="table table-bordered">
        <thead>
        <th>Details</th>
        <th>Date</th>
        <th>Qty</th>
         <th>Amount(KES)</th>
        </thead>
        <tbody>
                <tr>
                    <td>reports</td>
                </tr>

    </tbody>
</table>
 </div>
