@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea culpa eos deserunt. Earum, reprehenderit voluptatum voluptatem at similique optio quisquam molestias sunt vel eaque accusamus dignissimos quas voluptatibus. Assumenda, quas.</p>
        <hr class="my-4">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum ipsum, voluptatem eum rerum illum officia vel labore ad est, et omnis.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Accedi ora</a>
    </div>
</div>
@endsection