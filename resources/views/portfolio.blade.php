@extends('layouts.app')
@section('title', $p['name'] . ' – ' . $p['role'])

@section('content')
<header class="top">
    <div class="wrap bar">
        <a href="#top" class="brand">{{ $p['name'] }}</a>
        <nav>
            <a href="#about">About</a><a href="#work">Projects</a><a href="#experience">Experience</a>
            <a href="#skills">Skills</a><a href="#contact" class="cta">Contact</a>
        </nav>
    </div>
</header>

<main id="top">
    <section class="hero wrap">
        <div class="hero-text">
            <p class="hello">Hello, I am</p>
            <h1>{{ $p['name'] }}</h1>
            <p class="role">{{ $p['role'] }} · {{ $p['location'] }}</p>
            <p class="lead">{{ $p['summary'] }}</p>
            <div class="actions">
                <a class="btn primary" href="#work">View projects</a>
                <a class="btn" href="mailto:{{ $p['email'] }}">Email me</a>
            </div>
        </div>
        <img class="photo" src="{{ asset($p['photo']) }}" alt="Portrait of {{ $p['name'] }}" width="360" height="360">
    </section>

    <section class="stats wrap">
        @foreach ($p['stats'] as [$n, $l])
            <div><strong>{{ $n }}</strong><span>{{ $l }}</span></div>
        @endforeach
    </section>

    <section id="about" class="section wrap">
        <h2>About me</h2>
        <p class="about">{{ $p['about'] }}</p>
    </section>

    <section id="work" class="section wrap">
        <h2>Projects</h2>
        <label class="search" for="q">
            <input id="q" type="search" placeholder="Search projects: solr, razorpay, rbac, mysql" autocomplete="off" aria-label="Search projects">
        </label>
        <p class="count" id="count" aria-live="polite"></p>
        <div class="grid">
            @foreach ($p['projects'] as $proj)
                <article class="card" data-search="{{ strtolower($proj['title'] . ' ' . implode(' ', $proj['stack']) . ' ' . $proj['desc']) }}">
                    <img src="{{ asset('images/projects/' . Str::slug($proj['title']) . '.svg') }}" alt="{{ $proj['title'] }} preview" loading="lazy" width="600" height="340">
                    <div class="card-body">
                        <h3>{{ $proj['title'] }}</h3>
                        <p>{{ $proj['desc'] }}</p>
                        <ul class="tags">@foreach ($proj['stack'] as $s)<li>{{ $s }}</li>@endforeach</ul>
                    </div>
                </article>
            @endforeach
        </div>
        <p class="empty" id="empty" hidden>No project matches your search.</p>
    </section>

    <section id="experience" class="section wrap">
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

    <section id="skills" class="section wrap">
        <h2>Skills</h2>
        <div class="skill-grid">
            @foreach ($p['skills'] as $group => $items)
                <div class="skill">
                    <h3>{{ $group }}</h3>
                    <ul class="tags">@foreach ($items as $i)<li>{{ $i }}</li>@endforeach</ul>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section wrap">
        <h2>Education</h2>
        @foreach ($p['education'] as [$school, $degree, $years, $score])
            <div class="edu"><div><strong>{{ $degree }}</strong><p>{{ $school }}</p></div><span>{{ $years }} · {{ $score }}</span></div>
        @endforeach
        <p class="langs">Languages: {{ implode(', ', $p['languages']) }}</p>
    </section>

    <section id="contact" class="section wrap contact">
        <h2>Contact</h2>
        <p>{{ $p['email'] }} · {{ $p['phone'] }}</p>
        @if (session('sent'))<p class="ok" role="status">{{ session('sent') }}</p>@endif
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <label>Name <input name="name" value="{{ old('name') }}" required></label>
            @error('name')<small class="err">{{ $message }}</small>@enderror
            <label>Email <input type="email" name="email" value="{{ old('email') }}" required></label>
            @error('email')<small class="err">{{ $message }}</small>@enderror
            <label>Message <textarea name="message" rows="5" required>{{ old('message') }}</textarea></label>
            @error('message')<small class="err">{{ $message }}</small>@enderror
            <button type="submit" class="btn primary">Send message</button>
        </form>
    </section>
</main>

<footer class="wrap">© {{ date('Y') }} {{ $p['name'] }}</footer>
@endsection
