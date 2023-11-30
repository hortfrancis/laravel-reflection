<x-app-layout>

    <x-slot name="heading">
        Edit Company
    </x-slot>

    <x-slot name="secondaryNav">
        <x-secondary-nav.back-button text="Back to Companies" href="{{route('companies.index')}}"/>
    </x-slot>

    <x-companies.form operation="update" :company="$company" />
    
</x-app-layout>
