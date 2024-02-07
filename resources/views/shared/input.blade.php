
@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value??= null;
    $placeholder??= 'text';
@endphp

<div @class="(['form-group', $class])">
    <label for="{{ $name }}"></label>
    <input type="{{ $type }}" id="{{ $name }}" placeholder="{{ $placeholder }}" name="{{ $name }} " class="form-control form-control-md">
</div>
