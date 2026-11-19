<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') – {{ config('portfolio.name') }}</title>
    <meta name="description" content="{{ config('portfolio.summary') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>
<header class="top">
    <div class="wrap bar">
        <a href="{{ config('portfolio.linkedin') }}" target="_blank" style="text-decoration: none;"> <i class="fa-brands fa-linkedin"></i> {{ config('portfolio.linkedin-name') }}</a>
        <nav>
            @foreach ([['home','Home'],['about','About'],['projects','Projects'],['experience','Experience'],['skills','Skills']] as [$r, $label])
                <a href="{{ route($r) }}" @class(['active' => request()->routeIs($r) || ($r === 'projects' && request()->routeIs('projects.*'))])>{{ $label }}</a>
            @endforeach
            {{-- <a href="{{ route('contact') }}" @class(['cta', 'active' => request()->routeIs('contact')])>Contact</a> --}}
        </nav>
    </div>
</header>

<main>@yield('content')</main>

<footer class="wrap">
    <span><a href="{{ config('portfolio.github') }}" target="_blank" style="text-decoration: none;"><i class="fa-brands fa-github"></i> GitHub</a></span>
    <span><a href="mailto:{{ config('portfolio.email') }}" style="text-decoration: none;"><i class="fa-solid fa-envelope"></i> {{ config('portfolio.email') }}</a></span>
    <span><a href="tel:{{ config('portfolio.phone') }}" style="text-decoration: none;"><i class="fa-solid fa-phone"></i> {{ config('portfolio.phone') }}</a></span>
    <span><a href="{{ config('portfolio.linkedin') }}" target="_blank" style="text-decoration: none;"><i class="fa-brands fa-linkedin"></i> {{ config('portfolio.linkedin-name') }}</a></span>
</footer>
<script src="{{ asset('js/portfolio.js') }}" defer></script>
</body>
</html>
