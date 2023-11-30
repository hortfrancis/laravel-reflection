@props([
    // Type of the item to delete ('company' or 'employee')
    'for',
    // ID of the company or employee
    'id',
])

@php
    // Determine the route based on the type
    $route = ($for === 'company') ? 'companies.destroy' : 'employees.destroy';
@endphp


<form action="{{ route($route, $id) }}" method="POST" onsubmit="
return confirm('Are you sure you want to delete this {{ $for === 'company' ? 'company' : 'employee' }}?');
">
    @csrf
    @method('DELETE')
    <button type="submit"
            class="min-w-[8rch] py-2 px-4 bg-red-500 hover:bg-red-700 text-white font-bold rounded">
        Delete
    </button>
</form>
