{{--@props([--}}
{{--    'text',--}}
{{--    'href'--}}
{{--])--}}

{{--<a href="{{ $href }}"--}}
{{--   class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">--}}
{{--    {{ $text }}--}}
{{--</a>--}}


@props([
    'text' => 'Edit', // Default to 'Edit' if not provided
    'href' => '#', // Default to '#' if not provided
    'type' => 'link', // Default to 'link' (`<a>`)
    // 'buttonType' => 'button', // For button type, default to 'button'
    // 'onClick' => '' // Optional onClick event for buttons
])

@php
    // Set styles for buttons & links in one place
    $styles = "bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded";
@endphp

{{--
    Component is visually the same, but the underlying HTML is different:
    either a button (`<button>`) or a link (`<a>`).
 --}}
@if($type === 'link')
    <a href="{{ $href }}" class="{{ $styles }}">
        {{ $text }}
    </a>
@else
    <button type="submit" class="{{ $styles }}">
        {{ $text }}
    </button>
@endif



{{--<a href="{{ $href }}"--}}
{{--   class="inline-flex justify-center w-20 py-2 px-4 bg-yellow-500 hover:bg-yellow-700 text-white font-bold  rounded ">--}}
{{--    Edit--}}
{{--</a>--}}
