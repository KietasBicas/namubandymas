<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Posts</h1>
                    <a href="{{ route('posts.create') }}">Create New Post</a>
                    <ul>
                        @foreach($posts as $post)
                            <li>
                                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>

                
            </div>
        </div>
    </div>
</x-app-layout>
