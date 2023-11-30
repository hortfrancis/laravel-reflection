<x-app-layout>
    <x-slot name="heading">
{{--        {{ $company->name }}--}}
        Company Details
    </x-slot>

    <x-slot name="secondaryNav">
        <x-secondary-nav.back-button text="Back to Companies" href="{{route('companies.index')}}" />
    </x-slot>

    <x-companies.card :company="$company" />

</x-app-layout>
