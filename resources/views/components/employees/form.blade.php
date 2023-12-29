@props ([
    'method' => 'POST', // Default to POST
    'operation', // Required
    // 'message' => '', // Empty string by default
    'employee' => null, // Empty string by default
    'allCompanies' => null, // Empty string by default
])

@php
    if ($operation === 'create') {
        $action = route('employees.store');
    } elseif ($operation === 'update') {
        $action = route('employees.update', $employee);
        $currentCompany = $employee->company_id;
    }
@endphp

<form action="{{ $action }}" method="POST"
      class="max-w-lg md:max-w-4xl mx-auto p-10">
    @csrf

    @if ($operation === 'update')
        @method('PUT')
    @endif

    {{-- Display errors from failed form submission --}}
    @if ($errors->any())
        <div class="max-w-lg md:max-w-4xl mx-auto bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-10"
             role="alert">
            <ul class="list-disc flex flex-col gap-2">
                @foreach ($errors->all() as $error)
                    <li class="text-sm ml-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Input form fields --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <x-form.field label="First Name" name="first_name" id="employee-first-name" required
                      value="{{ old('first_name', $employee->first_name ?? '') }}"/>
        <x-form.field label="Last Name" name="last_name" id="employee-last-name" required
                      value="{{ old('last_name', $employee->last_name ?? '') }}"/>
        <x-form.field type="email" label="Employee Email" name="email" id="employee-email"
                      value="{{ old('email', $employee->email ?? '') }}"/>
        <x-form.field type="tel" label="Phone Number" name="phone" id="employee-phone"
                      value="{{ old('phone', $employee->phone ?? '') }}"/>

        {{-- Currently the `<select>` is hardcoded here -- could be extracted into `form.field` later (AHA). --}}
        <div class="mb-4">
            <label for="employee-company" class="block text-gray-700 text-sm font-bold mb-2">Company:</label>
            <select name="company_id" id="employee-company"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required
            >
                @foreach($allCompanies as $id => $name)
                    <option
                        value="{{ $id }}" {{ old('company_id', $employee->company_id ?? '') == $id ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>
        </div>
        {{-- Submit button --}}
        <div class="mt-7 flex justify-end items-start ">
            @if ($operation === 'create')
                <x-crud-buttons.create for="employee" text="Create New Employee" type="button"/>
            @elseif ($operation === 'update')
                <x-crud-buttons.update for="employee" text="Save Changes" type="button"/>
            @endif
        </div>
    </div>

</form>
