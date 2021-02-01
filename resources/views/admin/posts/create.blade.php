@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a new Post</h1>

    @if ( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all() as $error )
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Titolo del Post</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="body">Testo del Post</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="Create Post">
    </form>
</div>
@endsection