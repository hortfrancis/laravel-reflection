@props([
    'text',
    'href'
])

<a href="{{ $href }}"
   class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
    {{ $text }}
</a>
