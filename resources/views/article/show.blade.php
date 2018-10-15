@extends('layouts.base')

@section('content')

    <h1>{{ $article->title }}</h1>
    
    <div>
        {{ $article->description }}
    </div>

    <div>
        {{ $article->content }}
    </div>

@endsection
