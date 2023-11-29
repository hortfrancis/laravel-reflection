{{--<button type="submit" class="inline-flex justify-center w-20 py-2 px-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">--}}
{{--    Delete--}}
{{--</button>--}}


{{--@props([--}}
{{--    'companyId'--}}
{{--])--}}
{{--@php--}}
{{--// dd($companyId);--}}
{{--@endphp--}}


{{--@props(['companyId'])--}}

{{--@php(--}}
{{--    dd($companyId)--}}
{{--)--}}

{{--@php--}}
{{--$companyId = '44';--}}
{{--@endphp--}}

<form action="{{ route('companies.destroy', $companyId) }}" method="POST" onsubmit="return confirm('Are you sure?');" >
    @csrf
    @method('DELETE')
    <button type="submit" class="inline-flex justify-center w-20 py-2 px-4 bg-red-500 hover:bg-red-700 text-white font-bold rounded">
        Delete
    </button>
</form>
