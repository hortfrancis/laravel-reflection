<div class="bg-white dark:bg-gray-300 p-10 rounded ">
    <div class="flex flex-col lg:flex-row gap-10 items-center lg:justify-between p-6   ">

        <div class="flex flex-col md:flex-row gap-10 items-center md:justify-between">
            {{-- Company logo --}}
            <img class="w-24" {{--         src="{{ $company->logo ? $company->logo : asset('storage/company-logos/placeholder-company-logo.png') }}" --}}
                src="{{ asset('storage/company-logos/placeholders/logoipsum-327.svg') }}" alt="Company Logo">
            {{-- Company name --}}
            <h2 class="font-bold text-2xl">{{ $company->name }}</h2>
        </div>

        <div class="flex flex-col">
            <span class="text-gray-700 text-base mb-2">
                {{-- Company email --}}
                <span class="text-slate-500 dark:text-slate-700 mr-1">Email:</span> <strong>{{ $company->email }}</strong>
            </span>
            <span class="text-gray-700 text-base">
                {{-- Company website --}}
                <span class="text-slate-500 dark:text-slate-700 mr-1">Website:</span> <strong><a href="{{ $company->website }}"
                        target="_blank" class="text-blue-500">{{ $company->website }}</a></strong>
            </span>
        </div>

        <div class="flex space-x-4">
            {{-- CRUD buttons for company --}}
            <x-crud-buttons.update for="company" :id="$company->id" />
            <x-crud-buttons.delete for="company" :id="$company->id" />
        </div>
    </div>

    {{-- <hr class="my-5"> --}}

    <x-nice-hr />

    {{-- Company address --}}

    <div class="pt-6 mx-auto flex flex-col mb-6">
        <h3 class="text-xl text-center leading-6 font-bold text-gray-900 mb-8">
            Employees
        </h3>
        {{-- List of all employees for this company --}}
        <ul class="grid grid-cols-1 md:grid-cols-2 min-[1180px]:grid-cols-3 gap-20 mx-auto">
            @forelse ($company->employees as $employee)
                <li>
                    <x-employees.tile :employee="$employee" />
                </li>
            @empty
                <p class="col-span-full">No employees found.</p>
            @endforelse
        </ul>
    </div>

</div>
