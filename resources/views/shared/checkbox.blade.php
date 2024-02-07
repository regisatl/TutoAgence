@php
    $label ??= ucfirst($name);
    $type ??= '';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $placeholder ??= '';
@endphp

<div class="['group', $class]">

    <label class="block mb-2 text-md font-medium text-slate-800 dark:text-white"
        for="{{ $name }}">{{ $label }}</label>
    <input
        class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded-lg focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
        type="{{ $type }}" name="{{ $name }}">
    @error($name)
        <div class="invalid text-red-500 text-sm font-light" role="alert">
            <span>{{ $message }}</span>
        </div>
    @enderror

</div>
