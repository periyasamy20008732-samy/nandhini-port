@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<section class="section wrap contact">
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
@endsection
