@extends('layouts.app')
@section('title', 'Experience')
@section('content')
<section class="section wrap">
    <h2>Experience</h2>
    @foreach ($p['experience'] as $job)
        <div class="job">
            <div class="job-head">
                <div><h3>{{ $job['title'] }}</h3><p>{{ $job['company'] }}</p></div>
                <span class="period">{{ $job['period'] }}</span>
            </div>
            <ul>@foreach ($job['points'] as $pt)<li>{{ $pt }}</li>@endforeach</ul>
        </div>
    @endforeach
</section>
@endsection
