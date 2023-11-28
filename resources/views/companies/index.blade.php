{{-- resources/views/companies/index.blade.php --}}

<x-app-layout>
    <x-slot name="heading">
        Companies
    </x-slot>

    <x-slot name="secondaryNav">
        {{--        HELLO from secondary-nav slot--}}
        <x-secondary-nav.back-button text="Back to Home" href="{{route('home')}}"/>

        {{-- CRUD SHOW BUTTON BELOW!  --}}

        <x-crud-buttons.create text="Add New Company" href="{{route('companies.create')}}"/>

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

    {{--    <div class="alert alert-success">--}}
    {{--        rgergre--}}
    {{--    </div>--}}


    {{--    @if (session('success'))--}}
    {{--    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">--}}
    {{--        <strong class="font-bold">Success!</strong>--}}
    {{--        <span class="block sm:inline">{{ session('success') }}</span>--}}
    {{--        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">--}}
    {{--            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"--}}
    {{--                 viewBox="0 0 20 20">--}}
    {{--                <title>Close</title>--}}
    {{--                <path--}}
    {{--                    d="M14.348 14.859l-4.644-4.645 4.644-4.644-1.414-1.415-4.644 4.644-4.644-4.644-1.415 1.415 4.644 4.644-4.644 4.645 1.415 1.414 4.644-4.644 4.644 4.644z"/>--}}
    {{--            </svg>--}}
    {{--        </span>--}}
    {{--    </div>--}}
    {{--    @endif--}}



    {{--        <div class="alert alert-success">--}}
    {{--            {{ session('success') }}--}}
    {{--        </div>--}}





    {{-- Display a temporary success message if redirected from a successful form submission --}}
    @if (session('success'))
        <x-alert-message type="success" :message="session('success')" />
    @endif

</x-app-layout>


