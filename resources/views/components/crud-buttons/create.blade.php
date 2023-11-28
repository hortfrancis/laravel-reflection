{{--@props([--}}
{{--    'text',--}}
{{--    'href'--}}
{{--])--}}

{{--<a href="{{ $href }}"--}}
{{--   class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">--}}
{{--    {{ $text }}--}}
{{--</a>--}}


@props([
    'text' => 'Add', // Default to 'Create' if not provided
    'href' => '#', // Default to '#' if not provided
    'type' => 'link', // Default to 'link' (`<a>`)
    // 'buttonType' => 'button', // For button type, default to 'button'
    // 'onClick' => '' // Optional onClick event for buttons

])

@php
    // Set styles for buttons & links in one place
    $styles = "bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded";
@endphp

{{--<a href="{{ $href }}"--}}
{{--   class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">--}}
{{--    {{ $text }}--}}
{{--</a>--}}

{{--<button type="{{ $buttonType }}"--}}
{{--        onclick="{{ $onClick }}"--}}
{{--        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">--}}
{{--    {{ $text }}--}}
{{--</button>--}}




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
