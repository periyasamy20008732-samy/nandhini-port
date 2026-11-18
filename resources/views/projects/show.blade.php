@extends('layouts.app')
@section('title', $proj['title'])
@section('content')
<section class="section wrap detail">
    <a class="back" href="{{ route('projects') }}">Back to projects</a>
    <h1>{{ $proj['title'] }}</h1>
    <img src="{{ asset('images/projects/' . $proj['slug'] . '.svg') }}" alt="{{ $proj['title'] }} preview" width="600" height="340">
    <p class="about">{{ $proj['desc'] }}</p>
    <h3>Built with</h3>
    <ul class="tags">@foreach ($proj['stack'] as $s)<li>{{ $s }}</li>@endforeach</ul>
    <div class="pager">
        @if ($prev)<a class="btn" href="{{ route('projects.show', $prev['slug']) }}">Previous: {{ $prev['title'] }}</a>@endif
        @if ($next)<a class="btn" href="{{ route('projects.show', $next['slug']) }}">Next: {{ $next['title'] }}</a>@endif
    </div>
</section>
@endsection
