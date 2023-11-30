<li>
    <div class="flex flex-col gap-2 mb-4">
        <span class="text-lg hover:text-gray-500">
            <strong><a href="{{ route('employees.show', $employee->id) }}">{{ $employee->first_name }} {{ $employee->last_name }}</a></strong>
        </span>

        <span class="text-gray-700 text-base">
            <span class="text-slate-500 mr-1">Email: {{ $employee->email }}</span>
        </span>
        <span>
            <span class="text-slate-500 mr-1">Phone: {{ $employee->phone }}</span>
        </span>
    </div>

    <div class="flex space-x-4">
        {{-- CRUD buttons --}}
        <x-crud-buttons.read for="employee" :id="$employee->id"/>
        <x-crud-buttons.update for="employee" :id="$employee->id"/>
        <x-crud-buttons.delete for="employee" :id="$employee->id"/>
    </div>

</li>
