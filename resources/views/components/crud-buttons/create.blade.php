{{--@props([--}}
{{--    'text',--}}
{{--    'href'--}}
{{--])--}}

{{--<a href="{{ $href }}"--}}
{{--   class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">--}}
{{--    {{ $text }}--}}
{{--</a>--}}


@props([
    'for', // Type of the item ('company' or 'employee')
    'text' => 'Add', // Default to 'Add' if not provided
    // 'href' => '#', // Default to '#' if not provided
    'type' => 'link', // Default to 'link' (`<a>`)
])

@php
    // Set styles for buttons & links in one place
    $styles = "bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded";

    // Determine the route based on the type
    $route = ($for === 'company') ? 'companies.create' : 'employees.create';

    @endphp

{{--
    Component is visually the same, but the underlying HTML is different:
    either a button (`<button>`) or a link (`<a>`).
 --}}
@if($type === 'link')
    <a href="{{ route($route) }}" class="{{ $styles }}">
        {{ $text }}
    </a>
@else
    <button type="submit" class="{{ $styles }}">
        {{ $text }}
    </button>
@endif
