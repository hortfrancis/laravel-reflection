<li class="mt-2">
    <strong>{{ $employee->first_name }} {{ $employee->last_name }}</strong><br>
    Email: {{ $employee->email }}<br>
    Phone: {{ $employee->phone }}
    <div class="flex space-x-2">

        {{-- Put CRUD buttons here --}}

{{--        <a href="{{ route('employees.edit', $employee) }}"--}}
{{--           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">--}}
{{--            Edit--}}
{{--        </a>--}}
{{--        <x-crud-buttons.update href="{{ route('employees.edit', $employee) }}" />--}}
{{--        <x-crud-buttons.view href="{{ route('employees.show', $employee) }}" />--}}
{{--        <form class="inline-block" action="{{ route('employees.destroy', $employee) }}" method="POST" onsubmit="return confirm('Are you sure?');">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">--}}
{{--                Delete--}}
{{--            </button>--}}

{{--            <x-crud-buttons.delete />--}}
{{--        </form>--}}
    </div>
</li>
