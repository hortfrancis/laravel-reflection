<x-app-layout>

    <x-slot name="heading">
        Create New Employee
    </x-slot>

    <x-slot name="secondaryNav">
        <x-secondary-nav.back-button text="Back to Employees" href="{{route('employees.index')}}"/>
    </x-slot>

    <x-employees.form operation="create" :allCompanies="$allCompanies"/>

</x-app-layout>
