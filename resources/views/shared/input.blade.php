
@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value??= '';
    $placeholder??= '';
@endphp

<div @class="(['form-group', $class])">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" placeholder="{{ $placeholder }}" name="{{ $name }} " value="{{ old($name, $value)}}" class="form-control form-control-md @error($name) is-invalid   @enderror">
    @error($name)
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
</div>
