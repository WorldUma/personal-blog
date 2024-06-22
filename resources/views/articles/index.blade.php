@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles</h1>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card mb-4">
                        @if ($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top"
                                alt="{{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
