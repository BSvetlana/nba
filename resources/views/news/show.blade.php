@extends('layouts.master')

@section('content')

    <div style="color: deepskyblue" class="jumbotron">
        <h2>{{ $oneNews->title }}</h2>
        <hr>
        <p>{{$oneNews->content}}</p>
        <hr>
        <h5><i>{{ $oneNews->created_at }}</i> by: <b>{{$oneNews->user->name}}</b></h5>

        @foreach($oneNews->team as $teams)
            <a href="{{ route('single-team',['id'=>$teams->id]) }}"><p>{{ $teams->name }}</p></a>
        @endforeach

    </div>
@endsection