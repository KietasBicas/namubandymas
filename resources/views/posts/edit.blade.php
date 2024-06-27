<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h1>Edit Post</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" value="{{ $post->title }}">
                        </div>

                        <div>
                            <label for="content">Content:</label>
                            <textarea id="content" name="content">{{ $post->content }}</textarea>
                        </div>

                        <div>
                            <button type="submit">Update Post</button>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</x-app-layout>
