@props([
    'text',
    'href'
])

<a href="{{ $href }}"
   class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
    {{ $text }}
</a>
