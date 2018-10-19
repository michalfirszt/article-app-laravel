@extends('layouts.base')

@section('content')

    <h1>{{ $article->title }}</h1>
    
    <div>
        {{ $article->description }}
    </div>

    <div>
        {{ $article->content }}
    </div>

    <h5>
        Author: {{ $article->user->name }}
    </h5>

    <div class="row">

        <div class="col-md-2">
            <a href=" {{ route('articles.edit', ['article' => $article->id]) }} ">
                <button class="btn btn-outline-secondary">Edit Article</button>
            </a>
        </div>

    </div>
    
@endsection
