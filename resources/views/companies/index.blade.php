{{-- resources/views/companies/index.blade.php --}}

<x-app-layout>
    <x-slot name="heading">
        Companies
    </x-slot>

    <x-slot name="secondaryNav">
{{--        HELLO from secondary-nav slot--}}
        <x-secondary-nav.back-button text="Back to Home" href="{{route('home')}}" />

        {{-- CRUD SHOW BUTTON BELOW!  --}}

        <x-crud-buttons.create text="Create New Company" href="{{route('companies.create')}}" />

        {{-- CRUD SHOW BUTTON ABOVE!  --}}
{{--        <x-secondary-nav.back-button text="Create New Company" href="{{route('companies.create')}}" />--}}
    </x-slot>

{{--    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 mt-10 mb-2">--}}
{{--        <a href="{{ route('companies.create') }}"--}}
{{--           class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">--}}
{{--            Create New Company--}}
{{--        </a>--}}
{{--    </div>--}}



{{--    <div class="pt-6 pb-12">--}}
{{--        <div class=" mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200 sm:rounded-lg">--}}
                    <ul>
                        @foreach ($companies as $company)
                            <li>
                                <x-companies.tile :company="$company"/>
                            </li>
                        @endforeach
                    </ul>

                    {{-- Pagination Links --}}
                    <div class="px-10 py-6">
                        {{ $companies->links() }}
                    </div>
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
