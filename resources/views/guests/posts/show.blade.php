@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$post->title}}</h1>
    <p class="lead">{{$post->body}}</p>
</div>
@endsection