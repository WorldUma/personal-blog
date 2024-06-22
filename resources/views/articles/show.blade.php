@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        @if ($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid" alt="{{ $article->title }}">
        @endif
        <div class="mt-4">
            {!! $article->full_text !!}
        </div>
    </div>
@endsection
