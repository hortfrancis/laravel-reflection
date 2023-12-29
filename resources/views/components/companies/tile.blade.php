@props(['company'])

<div
    class="flex flex-col md:flex-row gap-8 items-center md:justify-between overflow-hidden
     {{-- border-gray-20 border-b-8 --}}
      {{-- bg-white --}}
      {{-- dark:bg-slate-900 --}}
      p-6 mb-16
      {{-- sm:rounded-lg --}}
      {{-- dark:text-white --}}
      {{-- dark: --}}
      ">
    <a href="/companies/{{ $company->id }}" class="hover:text-gray-500">
        <div class="flex items-center gap-6 px-6">

            <img class="w-16 rounded-lg object-cover"
                 {{--                 src="{{ Storage::url($company->logo) }}"--}}
                 src="{{ "storage/company-logos/placeholders/logoipsum-327.svg" }}"
                 alt="{{$company->name}} Logo">

            <h2 class="font-bold text-xl">{{ $company->name }}</h2>

        </div>
    </a>
    <div class="flex space-x-4 px-6 py-4 ">
{{--        <x-crud-buttons.read :href="route('companies.show', $company->id)"/>--}}
        <x-crud-buttons.read for="company" :id="$company->id"/>
{{--        <x-crud-buttons.update :href="route('companies.edit', $company->id)"/>--}}
        <x-crud-buttons.update for="company" :id="$company->id" />
        <x-crud-buttons.delete for="company" :id="$company->id"/>

    </div>
</div>

