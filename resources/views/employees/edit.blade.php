<x-app-layout>

    <x-slot name="heading">
        Edit Employee
    </x-slot>

    <x-slot name="secondaryNav">
        <x-secondary-nav.back-button text="Back to Employees" href="{{route('employees.index')}}"/>
    </x-slot>

    <x-employees.form operation="update" :employee="$employee" :allCompanies="$allCompanies"/>
{{----}}
</x-app-layout>
