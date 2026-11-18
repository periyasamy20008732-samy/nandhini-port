@extends('layouts.app')
@section('title', 'Projects')
@section('content')
<section class="section wrap">
    <h2>Projects</h2>
    <label class="search" for="q">
        <input id="q" type="search" placeholder="Search projects: solr, razorpay, rbac, mysql" autocomplete="off" aria-label="Search projects">
    </label>
    <p class="count" id="count" aria-live="polite"></p>
    <div class="grid">@foreach ($p['projects'] as $proj) @include('partials.card') @endforeach</div>
    <p class="empty" id="empty" hidden>No project matches your search.</p>
</section>
@endsection
