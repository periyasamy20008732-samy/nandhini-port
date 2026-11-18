@extends('layouts.app')
@section('title', 'Skills')
@section('content')
<section class="section wrap">
    <h2>Skills</h2>
    <div class="skill-grid">
        @foreach ($p['skills'] as $group => $items)
            <div class="skill"><h3>{{ $group }}</h3>
                <ul class="tags">@foreach ($items as $i)<li>{{ $i }}</li>@endforeach</ul>
            </div>
        @endforeach
    </div>
</section>
@endsection
