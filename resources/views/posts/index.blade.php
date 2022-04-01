@extends('layouts.app')

@section('title', 'Post App | Laravel')

@section('content')

    @if(count($posts) > 0)
        <div class="d-flex mb-4">
            <h2 class="my-auto me-auto">Show All Posts</h2>

            <a class="my-auto ms-auto btn btn-info" href="{{ route('posts.create') }}">
                <span>Add User</span>
            </a>
        </div>

        <div>
            <table class="table table-striped">
                <thead class="table-primary">
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-primary me-2" href="{{ route('posts.edit', $post->id) }}">
                                        <span>Edit</span>
                                    </a>

                                    <form class="ms-2" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <span>Delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h1>No Post Found</h1>

        <a class="my-auto ms-auto btn btn-info" href="{{ route('posts.create') }}">
            <span>Add User</span>
        </a>
    @endif

@endsection

