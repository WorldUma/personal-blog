@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Articles</h1>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-6 mb-4 d-flex align-items-stretch">
                    <div class="card h-100">
                        @if ($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top"
                                alt="{{ $article->title }}">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($article->full_text), 100) }}</p>
                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary mt-auto">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
