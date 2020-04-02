
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}

    @if($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
    @endif
</div>
<br>
@if(!$roles->isEmpty())
<h4>Assign Permission to Roles</h4>
<br>
@foreach ($roles as $role)
    {{ Form::checkbox('roles[]',  $role->id ) }}
    {{ Form::label($role->name, ucfirst($role->name)) }}<br>

@endforeach
@endif
<br>

<div class="form-group">
    <button type="submit" class="btn btn-sm btn-outline-success">{{ $permission->exists ? 'Update' : 'Save' }}</button>
    <a href="{{ route('backend.roles.index') }}" class="btn btn-sm  btn-outline-danger btn-sm" role="button" aria-pressed="true">Cance</a>

</div>
<!-- /.form-group -->