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
    @if ($type === 'textarea')
        <textarea
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-bl @error($name) peer-invalid:visible border-red-500 @enderror"
            type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}">{{ old($name, $value) }}
        </textarea>
    @else
        <input
            class=" border border-gray-300 text-sm rounded-md focus:ring-indigo-400 focus:border-indigo-300 block w-full px-2 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-bl @error($name) peer-invalid:visible border-red-500 @enderror"
            type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}"
            placeholder="{{ $placeholder }}">
    @endif
    @error($name)
        <div class="invalid text-red-500 text-sm font-light" role="alert">
            <span>{{ $message }}</span>
        </div>
    @enderror

</div>
