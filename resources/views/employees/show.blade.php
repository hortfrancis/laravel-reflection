<x-app-layout>
    <x-slot name="heading">
        Employee Details
    </x-slot>

    <x-slot name="secondaryNav">
        <x-secondary-nav.back-button text="Back to Employees" href="{{route('employees.index')}}" />
    </x-slot>

    <x-employees.card :employee="$employee" />

</x-app-layout>
