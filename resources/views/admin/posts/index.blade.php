@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your personal posts</h1>

    @if ( $posts -> isEmpty() )
        <h4>There's no posts</h4>
    @else 
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>CREATED</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $posts as $post )
                    <tr>
                        <td> {{ $post->id }} </td>
                        <td> {{ $post->title }} </td>
                        <td> {{ $post->created_at->format('d/m/Y') }} </td>
                        <td>
                            <a class="btn btn-success" href=" # ">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-alert" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="">Deletep</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>
@endsection
