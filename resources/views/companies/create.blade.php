<x-app-layout>
    <x-slot name="heading">
        Create New Company
    </x-slot>

    <x-slot name="secondaryNav">
        <x-secondary-nav.back-button text="Back to Companies" href="{{route('companies.index')}}"/>
    </x-slot>

    <x-companies.form operation="create" />
</x-app-layout>
