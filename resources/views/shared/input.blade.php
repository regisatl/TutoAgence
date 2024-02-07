@php
    $label ??= ucfirst($name);
    $type ??= '';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $placeholder ??= '';
@endphp

<div class="['group', $class]">

    <label class="block mb-2 text-md font-medium text-slate-600 dark:text-white"
        for="{{ $name }}">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea
            class="bg-white border text-gray-900 text-sm rounded-md focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-bl @error($name) peer-invalid:visible border-red-500 @enderror"
            type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}">{{ old($name, $value) }}
        </textarea>
    @else
        <input
            class="bg-white border text-sm rounded-md focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-bl @error($name) peer-invalid:visible border-red-500 @enderror"
            type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}"
            placeholder="{{ $placeholder }}">
    @endif
    @error($name)
        <div class="invalid text-red-500 text-sm font-light mt-2" role="alert">
            <span>{{ $message }}</span>
        </div>
    @enderror

</div>
