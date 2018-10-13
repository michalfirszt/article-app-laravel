@extends('layouts.base')

@section('content')

    @if(count($articles) > 0)
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->description }}</td>
            </tr>
            @endforeach  
        </tbody>
    </table>
        
    @else

    <div>
        <h1>No Aricles</h1>
    </div>
        
    @endif

@endsection
