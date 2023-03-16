
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="title">{{ __('Título') }}</label>
                            <input id="title" type="text" class="form-control name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                        </div>

                        <div class="form-group">
                            <label for="body">{{ __('Contenido') }}</label>
                            <textarea id="body" class="" name="body" required autocomplete="body" rows="5">{{ old('body') }}</textarea>

                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
