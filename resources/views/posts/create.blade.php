@extends('layouts.app')

@section('title', 'Post App | Laravel')

@section('content')
        <div class="d-flex mb-4">
            <h2 class="my-auto me-auto">Create a post</h2>

            <a class="my-auto ms-auto btn btn-info" href="{{ route('posts.index') }}">
                <span>Return to posts</span>
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0;">
                    @foreach ($errors->all() as $error)
                        <li><span>{{ $error  }}</span></li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            <div class="row mb-4">
                <div class="col-12">
                    @csrf
                    <input class="form-control form-control-lg" type="text" name="title" placeholder="Post title" value="{{ old('title') }}">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <textarea class="form-control form-control-lg" name="description" placeholder="Post description">{{ old('description') }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="d-flex">
                        <button class="btn btn-lg btn-primary ms-auto" type="submit">
                            <span>Create</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
@endsection

