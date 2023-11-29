@props(['company'])

    <div class="flex flex-col md:flex-row gap-4 items-center md:justify-between overflow-hidden border-gray-20 border-b-8 bg-white p-6 pb-10 mb-10 sm:rounded-lg">
        <a href="/companies/{{ $company->id }}" class="hover:text-gray-500">
        <div class="flex items-center gap-6 px-6">

            <img class="w-16 rounded-lg object-cover"
{{--                 src="{{ Storage::url($company->logo) }}"--}}
                 src="{{ "storage/company-logos/placeholders/logoipsum-327.svg" }}"
                 alt="{{$company->name}} Logo">

            <h2 class="font-bold text-xl">{{ $company->name }}</h2>

        </div>
        </a>

{{--        <div class="px-6 py-4">--}}
            <div class="flex space-x-6 px-6 py-4">
{{--                <a href="/companies/{{ $company->id }}"--}}
{{--                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">--}}
{{--                    View--}}
{{--                </a>--}}

                <x-crud-buttons.read :href="route('companies.show', $company->id)"/>


{{--                <a href="/companies/{{ $company->id }}/edit"--}}
{{--                   class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">--}}
{{--                    Edit--}}
{{--                </a>--}}

                <x-crud-buttons.update :href="route('companies.edit', $company->id)"/>

{{--                <form action="/companies/{{ $company->id }}" method="POST">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">--}}
{{--                        Delete--}}
{{--                    </button>--}}

                <x-crud-buttons.delete :companyId="$company->id" />
{{--                </form>--}}
{{--            </div>--}}
        </div>
    </div>
