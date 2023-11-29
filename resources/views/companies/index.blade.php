<x-app-layout>
    <x-slot name="heading">
        Companies
    </x-slot>

    <x-slot name="secondaryNav">
        <x-secondary-nav.back-button text="Back to Home" href="{{route('home')}}"/>
        <x-crud-buttons.create text="Add New Company" href="{{route('companies.create')}}"/>
    </x-slot>

    {{-- Pagination Links --}}
    <div class="px-10 py-6">
        {{ $companies->links() }}
    </div>

    {{-- Show a message if there are no companies --}}
    @if ($companies->isEmpty())
        <li class="px-10 py-6">
            <p class="text-center">No companies found.</p>
        </li>
    @else
        <ul>
            @foreach ($companies as $company)
                <li>
                    <x-companies.tile :company="$company"/>
                </li>
            @endforeach
        </ul>
    @endif

    {{-- Pagination Links --}}
    <div class="px-10 py-6">
        {{ $companies->links() }}
    </div>



    @if (session('success'))
        {{-- Display a temporary success message if redirected from a successful Create, Edit, or Delete action --}}
        <x-alert-message type="success" :message="session('success')"/>

    @elseif(session('error'))
        {{-- Display a temporary error message if redirected from a failed Create, Edit, or Delete action --}}
        <x-alert-message type="error" :message="session('error')"/>

    @endif

</x-app-layout>
