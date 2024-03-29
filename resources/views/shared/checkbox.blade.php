@php
    $label ??= ucfirst($name);
    $type ??= '';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $placeholder ??= '';
@endphp

<div class="['group', $class]">

    <label class="relative inline-flex items-center mb-5 cursor-pointer" for="{{ $name }}">
        <input type="hidden" value="0" class="sr-only peer" name="{{ $name }}">
        <input @checked(old($name, $value ?? false)) type="checkbox" value="1" class="sr-only peer" id="{{ $name }}" name="{{ $name }}">
        <div
        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 dark:peer-focus:ring-indigo-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-indigo-600">
    </div>
    <span class="ms-3 text-sm font-medium text-gray-600 dark:text-gray-300">Vendu</span>
</label>

    @error($name)
        <div class="invalid text-red-500 text-sm font-light" role="alert">
            <span>{{ $message }}</span>
        </div>
    @enderror

</div>
