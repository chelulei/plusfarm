
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::text('title', null, ['class' => 'form-control',
                        'placeholder' => 'Enter Title', 'required'=>'']) !!}
    @if($errors->has('title'))
        <span class="help-block">{{ $errors->first('title') }}</span>
    @endif
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    {!! Form::label('body','Body') !!}
    {{ Form::textarea('body', null, ['class' => 'form-control my-editor','rows' => 5, 'cols' =>5]) }}
    @if($errors->has('body'))
        <span class="help-block">{{ $errors->first('body') }}</span>
    @endif
</div>
<div class="form-group">
        <button type="submit" class="btn btn-outline-primary btn-lg">{{ $blog->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.blogs.index') }}" class="btn btn-outline-danger btn-lg" role="button" aria-pressed="true">Cancel</a>
</div>