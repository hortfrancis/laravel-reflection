@props([
    'for', // Type of the item to delete ('company' or 'employee')
    'id', // ID of the company or employee
])


@php
    // Determine the route based on the type
    $route = ($for === 'company') ? 'companies.show' : 'employees.show';
@endphp

<a href="{{ route($route, $id) }}"
   class="inline-flex justify-center w-20 py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded">
    View
</a>

{{--<a href="{{ $href }}"--}}
{{--<a href="{{  route('employees.show', $employee }}"--}}
{{--   class="inline-flex justify-center w-20 py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">--}}
{{--    View--}}
{{--</a>--}}
