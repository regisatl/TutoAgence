
@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value??= '';
    $placeholder??= '';
@endphp

<div @class="(['group', $class])">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="{{ $name }}">{{ $label }}</label>
    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" placeholder="{{ $placeholder }}" name="{{ $name }} " value="{{ old($name, $value)}}">
    @error($name)
    <div class="invalid-feedback" role="alert">
        {{ $message }}
    </div>
</div>
