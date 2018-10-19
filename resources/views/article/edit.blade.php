@extends('layouts.base')

@section('content')

    @if (count($errors) > 0)
                
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)

            <ul>
                <li>{{ $error }}</li>
            </ul>
            
        @endforeach
    </div>    

    @endif

    <h1>Edit Article</h1>

    <div>

        {!! Form::model($article, [
            'method' => 'PATCH',
            'action' => [
                'ArticleController@update',
                $article->id
            ]
        ]) !!}

        <div class="form-group row">

            {!! Form::label('title', 'Title:') !!}

            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            
        </div>

        <div class="form-group row">

            {!! Form::label('description', 'Description:') !!}

            {!! Form::text('description', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group row">

            {!! Form::label('content', 'Content:') !!}

            {!! Form::textarea('content', null, ['class' => 'form-control',
                                                'cols' => 50,
                                                'rows' => 5]) !!}

        </div>

        <div class="form-group row">

            {!! Form::submit('Edit article', ['class' => 'btn btn-outline-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>

@endsection
