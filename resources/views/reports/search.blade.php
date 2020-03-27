 <div class="card-header bg-success mt-4">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">LIST OF REPORTS</a>
                    </li>

                </ul>
            </div>
<div class="form-row mt-3">
    <div class="form-group col-md-12">
<select id="name" type="dropdown-toggle" class="form-control" name="apports" onchange="top.location.href = this.options[this.selectedIndex].value">
    <option value="name" selected disabled>--- Crop Financial Report ---</option>
    @foreach($produces as $produce)
        <option class="apports" value="{{ route("backend.reports.show", $produce->id) }}">
            {{$produce->plant->name}} |
             <span class="badge badge-light">
                {{$produce->variety->name}}
            </span>
            <span class="badge badge-light">
                {{$produce->size}}(Acres)
            </span>
        </option>
     @endforeach
</select>
    @if($errors->has('produce'))
        <span class="invalid-feedback">{{ $errors->first('produce') }}</span>
    @endif
        </div>
    <div class="form-group col-md-12">
<select id="name" type="dropdown-toggle" class="form-control" name="apports" onchange="top.location.href = this.options[this.selectedIndex].value">
    <option value="name" selected disabled>--Crop Performance Report--</option>
    @foreach($produces as $produce)
        <option class="apports" value="{{ route("performance", $produce->id) }}">
            {{$produce->plant->name}} |
             <span class="badge badge-light">
                {{$produce->variety->name}}
            </span>
            <span class="badge badge-light">
                {{$produce->size}}(Acres)
            </span>
        </option>
     @endforeach
</select>
    </div>
</div>
@include('reports.script')