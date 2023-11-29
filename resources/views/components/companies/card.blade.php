<div class="bg-white p-10 rounded ">
    <div class="flex flex-col md:flex-row gap-4 items-center md:justify-between overflow-hidden   ">
        <div class="flex flex-col md:flex-row gap-4 items-center md:justify-between overflow-hidden sm:rounded-lg">
            <img class="w-24"
                 {{--         src="{{ $company->logo ? $company->logo : asset('storage/company-logos/placeholder-company-logo.png') }}"--}}
                 src="{{asset('storage/company-logos/placeholders/logoipsum-327.svg')}}"
                 alt="Company Logo">
            {{--    <div >--}}

            <h2 class="font-bold text-xl mb-2">{{ $company->name }}</h2>
        </div>
        <div>
            <p class="text-gray-700 text-base">
                Email: {{ $company->email }}
            </p>
            <p class="text-gray-700 text-base">
                Website: <a href="{{ $company->website }}" class="text-blue-500">{{ $company->website }}</a>
            </p>
        </div>
        <div class="flex space-x-2">
            <x-crud-buttons.update :href="route('companies.edit', $company->id)"/>

            @php
                // dd($company->id);
            @endphp


{{--            <x-crud-buttons.delete :companyId="$company->id"/>--}}
            <x-crud-buttons.delete :companyId="$company->id" />
        </div>
    </div>
    <h3 class="text-lg leading-6 font-medium text-gray-900 mt-5">
        Employees
    </h3>
    <ul class="flex flex-col gap-4">
        @forelse ($company->employees as $employee)
            {{--                            <li class="mt-2">--}}
            {{--                                <strong>{{ $employee->first_name }} {{ $employee->last_name }}</strong><br>--}}
            {{--                                Email: {{ $employee->email }}<br>--}}
            {{--                                Phone: {{ $employee->phone }}--}}
            {{--                            </li>--}}

            <x-employees.tile :employee="$employee"/>
        @empty
            <li>No employees found.</li>
        @endforelse
    </ul>
</div>


</div>
