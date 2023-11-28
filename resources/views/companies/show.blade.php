<x-app-layout>
    <x-slot name="heading">
{{--        {{ $company->name }}--}}
        Company Details
    </x-slot>

    <x-slot name="secondaryNav">
        <x-secondary-nav.back-button text="Back to Companies" href="{{route('companies.index')}}" />
    </x-slot>

    <x-companies.card :company="$company" />

{{--        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--            <a href="{{ route('companies.index') }}"--}}
{{--               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">--}}
{{--                Back to Companies--}}
{{--            </a>--}}
{{--        </div>--}}

{{--    <div class="">--}}
{{--        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    <h3 class="text-lg leading-6 font-medium text-gray-900">--}}
{{--                        Company Information--}}
{{--                    </h3>--}}
{{--                    <p><strong>Email:</strong> {{ $company->email }}</p>--}}
{{--                    <p><strong>Website:</strong> {{ $company->website }}</p>--}}

{{--                    <h3 class="text-lg leading-6 font-medium text-gray-900 mt-5">--}}
{{--                        Employees--}}
{{--                    </h3>--}}
{{--                    <ul>--}}
{{--                        @forelse ($company->employees as $employee)--}}
{{--                            <li class="mt-2">--}}
{{--                                <strong>{{ $employee->first_name }} {{ $employee->last_name }}</strong><br>--}}
{{--                                Email: {{ $employee->email }}<br>--}}
{{--                                Phone: {{ $employee->phone }}--}}
{{--                            </li>--}}

{{--                            <x-employees.tile :employee="$employee" />--}}
{{--                        @empty--}}
{{--                            <li>No employees found.</li>--}}
{{--                        @endforelse--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
