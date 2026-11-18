@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="hero wrap">
    <div class="hero-text">
        <p class="hello">Hello, I am</p>
        <h1>{{ $p['name'] }}</h1>
        <p class="role">{{ $p['role'] }} · {{ $p['location'] }}</p>
        <p class="lead">{{ $p['summary'] }}</p>
        <div class="actions">
            <a class="btn primary" href="{{ route('projects') }}">View projects</a>
            <a class="btn" href="{{ route('contact') }}">Contact me</a>
        </div>
    </div>
    <img class="photo" src="{{ asset($p['photo']) }}" alt="Portrait of {{ $p['name'] }}" width="360" height="360">
</section>

<section class="stats wrap">
    @foreach ($p['stats'] as [$n, $l])<div><strong>{{ $n }}</strong><span>{{ $l }}</span></div>@endforeach
</section>

<section class="section wrap">
    <h2>Featured projects</h2>
    <div class="grid">
        @foreach (array_slice($p['projects'], 0, 3) as $proj) @include('partials.card') @endforeach
    </div>
    <p class="more"><a class="btn" href="{{ route('projects') }}">See all {{ count($p['projects']) }} projects</a></p>
</section>
@endsection
