<x-app-layout>
<div class="container">
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center p-10 ">{{ __('Editar Post') }}</div>

                <div class="text-center">
                    <form method="POST" action="{{ route('posts.update', $post) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="title" class="-ml-48">{{ __('Título:') }}</label><br>
                            <input id="title" type="text" class="fblock w-30 border-gray-300 focus:border-indigo-300 focus:ring focus-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="title" value="{{ $post->title }}" required autocomplete="title" autofocus>
                        </div>

                        <div class="form-group">
                            <br><label for="body" class="-ml-40">{{ __('Contenido:') }}</label><br>
                            <textarea id="body" class="fblock w-30 border-gray-300 focus:border-indigo-300 focus:ring focus-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="body" required autocomplete="body" rows="5">{{ $post->body }}</textarea><br>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
