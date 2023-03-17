<x-app-layout>
    <div class="max-w-6xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="text-center p-10 ">POSTS</h1>
        @foreach ($posts as $post)
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            <div class="p-6 flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-700"> {{ $post->user->name }} </span>
                            <span class="ml2- text-sm text-gray-500"> {{ $post->created_at->format('j M Y,H:i a') }}
                            </span>
                            @unless($post->created_at->eq($post->updated_at))
                                <small class="text-sm text-gray-600">&middot;{{ __('edited') }}</small>
                            @endunless
                        </div>
                        @if ($post->user->is(auth()->user()))
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg class="h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link href="{{ route('posts.show', $post) }}">
                                    {{ __('Show') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('posts.edit', $post) }}">
                                    {{ __('Edit') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link href="{{ route('posts.destroy', $post) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                        @else
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg class="h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link href="{{ route('posts.show', $post) }}">
                                    {{ __('Show') }}
                                </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endif
                </div>
                <hr>
                <p class="mt-2 text-lg text-gray-900"> {{ $post->title }} </p>
                <p class="mt-1 text-sm text-gray-900"> {{ $post->body }} </p>
                <div class="flex justify-between items-center mt-4">
                    <p class="text-sm text-gray-900"><strong>Posted By:</strong> {{ $post->user->name }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</x-app-layout>
