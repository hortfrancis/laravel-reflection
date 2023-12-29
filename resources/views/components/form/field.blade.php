@props([
    'type' => 'text', // Default to text
    'name',
    'id',
    'label',
    'required' => false, // Optional
    'value' => '', // Optional
])

<div class="mb-4">
    <label for="{{ $id }}" class="block text-gray-700 text-sm font-bold mb-2">{{ $label }}:</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        @if ($required) required @endif value="{{ $value }}">
</div>
