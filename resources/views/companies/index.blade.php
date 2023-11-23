{{-- resources/views/companies/index.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Companies
        </h1>
    </x-slot>

    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 mt-10 mb-2">
        <a href="{{ route('companies.create') }}"
           class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Create New Company
        </a>
    </div>

    <div class="pt-6 pb-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        @foreach ($companies as $company)
                            <li>
                                <x-company-tile :company="$company"/>
                            </li>
                        @endforeach
                    </ul>

                    {{-- Pagination Links --}}
                    <div class="mt-4">
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
