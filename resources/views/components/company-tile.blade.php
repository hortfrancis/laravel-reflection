@props(['company'])

    <div class=" overflow-hidden shadow-lg bg-white pb-2 mb-10 sm:rounded-lg">
        <div class="flex items-center gap-4 mt-5 px-6 mb-3">
            <img class="w-20 rounded-lg object-cover"
                 src="{{ Storage::url($company->logo) }}"
                 alt="{{$company->name}} Logo">
            <h2 class="font-bold text-xl mb-2">{{ $company->name }}</h2>
        </div>

        <div class="px-6 py-4">
            <div class="flex space-x-6">
                <a href="/companies/{{ $company->id }}"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    View
                </a>
                <a href="/companies/{{ $company->id }}/edit"
                   class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <form action="/companies/{{ $company->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
