<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.index') }}">Back to Posts</a>
                
            </div>
        </div>
    </div>
</x-app-layout>
