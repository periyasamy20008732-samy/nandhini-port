<article class="card" data-search="{{ strtolower($proj['title'] . ' ' . implode(' ', $proj['stack']) . ' ' . $proj['desc']) }}">
    <a href="{{ route('projects.show', $proj['slug']) }}">
        <img src="{{ asset('images/projects/' . $proj['slug'] . '.svg') }}" alt="{{ $proj['title'] }} preview" loading="lazy" width="600" height="340">
    </a>
    <div class="card-body">
        <h3><a href="{{ route('projects.show', $proj['slug']) }}">{{ $proj['title'] }}</a></h3>
        <p>{{ $proj['desc'] }}</p>
        <ul class="tags">@foreach ($proj['stack'] as $s)<li>{{ $s }}</li>@endforeach</ul>
    </div>
</article>
