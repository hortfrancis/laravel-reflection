<x-app-layout>

    <x-slot name="heading">
        Create New Company
    </x-slot>

    <x-slot name="secondaryNav">
        <x-secondary-nav.back-button text="Back to Companies" href="{{route('companies.index')}}"/>
    </x-slot>

    {{--    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10 mb-2">--}}

    {{--        <a href="{{ route('companies.index') }}"--}}
    {{--           class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">--}}
    {{--            Back to Companies--}}
    {{--        </a>--}}
    {{--    </div>--}}


    {{--    <div class="container mx-auto p-4">--}}
    {{--        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data"--}}
    {{--              class="max-w-lg mx-auto bg-white p-6 rounded shadow">--}}
    {{--    >--}}
    {{--            @csrf--}}

    {{--            --}}{{-- Name--}}
    {{--            <div class="mb-4">--}}
    {{--                <label for="company-name" class="block text-gray-700 text-sm font-bold mb-2">Company Name:</label>--}}
    {{--                <input type="text" name="name" id="company-name"--}}
    {{--                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"--}}
    {{--                       required>--}}
    {{--            </div>--}}

    {{--            --}}{{-- Email--}}
    {{--            <div class="mb-4">--}}
    {{--                <label for="company-email" class="block text-gray-700 text-sm font-bold mb-2">Company Email:</label>--}}
    {{--                <input type="email" name="email" id="company-email"--}}
    {{--                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">--}}
    {{--            </div>--}}

    {{--            --}}{{--  Logo Upload--}}
    {{--            <div class="mb-4">--}}
    {{--                <label for="company-logo" class="block text-gray-700 text-sm font-bold mb-2">Company Logo:</label>--}}
    {{--                <input type="file" name="logo" id="company-logo"--}}
    {{--                       class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">--}}
    {{--            </div>--}}

    {{--            --}}{{--  Website--}}
    {{--            <div class="mb-6">--}}
    {{--                <label for="conpany-website" class="block text-gray-700 text-sm font-bold mb-2">Company Website:</label>--}}
    {{--                <input type="url" name="website" id="conpany-website"--}}
    {{--                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">--}}
    {{--            </div>--}}

    {{--            --}}{{--             Submit Button--}}
    {{--            <button type="submit"--}}
    {{--                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">--}}
    {{--                Create--}}
    {{--            </button>--}}

    {{--            <x-crud-buttons.create text="Create New Company" href="{{route('companies.create')}}" />--}}
    {{--        </form>--}}


    {{--    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">--}}
    {{--        @csrf--}}

    {{--        <x-form.field label="Company Name" name="name" id="company-name" required />--}}
    {{--        <x-form.field type="email" label="Company Email" name="email" id="company-email" />--}}
    {{--        <x-form.field type="file" label="Company Logo" name="logo" id="company-logo" />--}}
    {{--        <x-form.field type="url" label="Company Website" name="website" id="company-website" />--}}

    {{--        <x-crud-buttons.create text="Create New Company" href="{{ route('companies.create') }}" />--}}
    {{--    </form>--}}

    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data"
          class="max-w-lg md:max-w-4xl mx-auto bg-white p-10">
        @csrf

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






        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <x-form.field label="Company Name" name="name" id="company-name" required/>

                <x-form.field type="email" label="Company Email" name="email" id="company-email"/>

                <x-form.field type="file" label="Company Logo" name="logo" id="company-logo"/>

                <x-form.field type="url" label="Company Website" name="website" id="company-website"/>

        </div>

        <div class="mt-10 flex justify-end">
            <x-crud-buttons.create text="Add New Company" type="button"/>
        </div>
    </form>




</x-app-layout>
