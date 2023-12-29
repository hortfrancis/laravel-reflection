@props([
    'method' => 'POST', // Default to POST
    'operation', // Required
    // 'message' => '', // Empty string by default
    'company' => null, // Empty string by default
])

@php
    if ($operation === 'create') {
        $action = route('companies.store');
    } elseif ($operation === 'update') {
        $action = route('companies.update', $company);
    }
@endphp

<form action="{{ $action }}" method="POST" enctype="multipart/form-data"
    class="max-w-lg md:max-w-4xl mx-auto  p-10">
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
        <x-form.field label="Company Name" name="name" id="company-name" required
            value="{{ $company->name ?? '' }}" />
        <x-form.field type="email" label="Company Email" name="email" id="company-email"
            value="{{ $company->email ?? '' }}" />
        <x-form.field type="file" label="Company Logo" name="logo" id="company-logo" />
        <x-form.field type="url" label="Company Website" name="website" id="company-website"
            value="{{ $company->website ?? '' }}" />
    </div>

    {{-- Submit button --}}
    <div class="mt-10 flex justify-end">
        @if ($operation === 'create')
            <x-crud-buttons.create for="company" text="Create New Company" type="button" />
        @elseif ($operation === 'update')
            <x-crud-buttons.update for="company" text="Save Changes" type="button" />
        @endif

    </div>
</form>
