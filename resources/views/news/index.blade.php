@extends('layouts.master')

@section('content')

    @foreach($news as $oneNews)

        <div class="jumbotron">

            <a href="{{ route('single-news',['id'=>$oneNews->id]) }}"><h2>{{ $oneNews->title }}</h2></a>
            <h5><i>{{ $oneNews->created_at }}</i> by: <b>{{ $oneNews->user->name }}</b></h5>
            <hr>
            <p>{{ $oneNews->content }}</p>

        </div>
    @endforeach
    {{ $news->links() }}
@endsection