@php
    $label ??= ucfirst($name);
    $type ??= '';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $placeholder ??= '';
@endphp

<div class="['group', $class]">


    <label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{ $label }} </label>
    <select multiple id="{{ $name }}" name="{{ $name }}[]"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500">
        <option selected>{{ $placeholder }}</option>
        @foreach ($options as $index => $nom)
        <option value="{{ $index }}"> {{ $nom}} </option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid text-red-500 text-sm font-light" role="alert">
            <span>{{ $message }}</span>
        </div>
    @enderror

</div>
