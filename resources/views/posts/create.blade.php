<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1>Create New Post</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf

                    <div>
                        <label for="title">Title:</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}">
                    </div>

                    <div>
                        <label for="content">Content:</label>
                        <textarea id="content" name="content">{{ old('content') }}</textarea>
                    </div>

                    <div>
                        <button type="submit">Create Post</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
