<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <textarea
                name="title"
                placeholder="{{ __('Titulo') }}"
                class="w-36 block h-10 mb-3 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <textarea
                name="body"
                placeholder="{{ __('Redacta aqui tu tema') }}"
                class="max-w-2xl block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Posts') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>


