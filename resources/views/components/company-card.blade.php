<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white my-4">
    <img class="w-24"
         {{--         src="{{ $company->logo ? $company->logo : asset('storage/company-logos/placeholder-company-logo.png') }}"--}}
         src="{{asset('storage/company-logos/placeholders/logoipsum-327.svg')}}"
         alt="Company Logo">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $company->name }}</div>
        <p class="text-gray-700 text-base">
            Email: {{ $company->email }}
        </p>
        <p class="text-gray-700 text-base">
            Website: <a href="{{ $company->website }}" class="text-blue-500">{{ $company->website }}</a>
        </p>
    </div>
</div>
