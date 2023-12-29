<div class="bg-white dark:bg-gray-300 p-10 rounded ">
    <div class="flex flex-col lg:flex-row gap-10 items-center lg:justify-between p-6   ">

        <div class="flex flex-col md:flex-row gap-10 items-center md:justify-between">

            {{-- Employee name --}}
            <h2 class="font-bold text-2xl">{{ $employee->first_name }} {{ $employee->last_name }}</h2>
        </div>

        <div class="flex flex-col">
            <span class="text-gray-700 text-base mb-2">
                {{-- Employee email --}}
                <span class="text-slate-500 dark:text-slate-700 mr-1">Email:</span> <strong> <a
                        href="mailto:{{ $employee->email }}">{{ $employee->email }}</a></strong>
            </span>
            <span class="text-gray-700 text-base mb-2">
                {{-- Employee phone number --}}
                <span class="text-slate-500 dark:text-slate-700 mr-1">Phone:</span> <strong>{{ $employee->phone }}</strong>
            </span>
            <span class="text-gray-700 text-base mb-2">
                {{-- Employee company --}}
                <span class="text-slate-500 dark:text-slate-700 mr-1">Company:</span> <strong> <a
                        href="/companies/{{ $employee->company->id }}">{{ $employee->company->name }}</a></strong>
            </span>
        </div>




        <div class="flex space-x-4">
            {{-- CRUD buttons for employee --}}
            <x-crud-buttons.update for="employee" :id="$employee->id" />
            <x-crud-buttons.delete for="employee" :id="$employee->id" />
        </div>
    </div>
</div>
