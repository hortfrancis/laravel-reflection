@props([
    'for', // Type of the item ('company' or 'employee')
    'id', // ID of the company or employee
    'text' => 'Edit', // Default to 'Edit' if not provided
    'type' => 'link', // Default to 'link' (`<a>`)
])

@php
    // Set styles for buttons & links in one place
    $styles = "inline-flex justify-center min-w-[8rch] text-center bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded";

    // Determine the route based on the type
    $route = ($for === 'company') ? 'companies.edit' : 'employees.edit';
@endphp

{{--
    Component is visually the same, but the underlying HTML is different:
    either a button (`<button>`) or a link (`<a>`).
 --}}
@if($type === 'link')
    <a href="{{ route($route, $id) }}" class="{{ $styles }}">
        {{ $text }}
    </a>
@else
    <button type="submit" class="{{ $styles }}">
        {{ $text }}
    </button>
@endif
