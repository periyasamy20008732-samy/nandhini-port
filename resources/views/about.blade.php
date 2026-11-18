@extends('layouts.app')
@section('title', 'About')
@section('content')
<section class="section wrap">
    <h2>About me</h2>
    <div class="about-grid">
        <img class="photo small" src="{{ asset($p['photo']) }}" alt="Portrait of {{ $p['name'] }}" width="360" height="360">
        <div>
            <p class="about">{{ $p['about'] }}</p>
            <p class="langs">Languages: {{ implode(', ', $p['languages']) }}</p>
            <p class="langs">Based in {{ $p['location'] }}</p>
        </div>
    </div>
</section>
<section class="section wrap">
    <h2>Education</h2>
    @foreach ($p['education'] as [$school, $degree, $years, $score])
        <div class="edu"><div><strong>{{ $degree }}</strong><p>{{ $school }}</p></div><span>{{ $years }} · {{ $score }}</span></div>
    @endforeach
</section>
@endsection
