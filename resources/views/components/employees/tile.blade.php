<li class="mt-2">
    <strong>{{ $employee->first_name }} {{ $employee->last_name }}</strong><br>
    Email: {{ $employee->email }}<br>
    Phone: {{ $employee->phone }}
    <div class="flex space-x-4">

        {{-- Put CRUD buttons here --}}

        {{--        @php--}}
        {{--        dd($employee->id);--}}
        {{--        @endphp--}}

        {{--        <x-crud-buttons.read href="{{ route('employees.show', $employee) }}" />--}}

        {{--        <x-crud-buttons.update href="{{ route('employees.edit', $employee) }}" />--}}

        {{-- CRUD buttons --}}
        <x-crud-buttons.read for="employee" :id="$employee->id"/>
        <x-crud-buttons.update for="employee" :id="$employee->id"/>
        <x-crud-buttons.delete for="employee" :id="$employee->id" />



        {{--        <x-crud-buttons.delete href="{{ route('employees.destroy', $employeeId) }}" />--}}

        {{--        <x-crud-buttons.delete href="{{ route('employees.destroy', $employeeId) }}" />--}}

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
