@extends('layouts.master')

@section('name')
    {{ $team->name }}
@endsection


@section('content')

    <div class="col-6 col-lg-4">

        Name: <h3>{{ $team->name }}</h3>
        Email: <h5>{{ $team->email }} </h5>
        Address: <h5>{{ $team->address }}</h5>
        City: <h5>{{ $team->city }}</h5>
        Players:
        @foreach($team->players as $player)
            <li style="list-style: none">
                <h5><a style="color: navy" href="{{route('single-player',['id'=>$player->id])}}">{{ $player->first_name}} {{ $player->last_name }}</a></h5>

            </li>
        @endforeach

    </div><!--/span-->
    <hr>
    <h3>Comments</h3>
    @foreach($team->comments as $comment)
        <li style="list-style: none">
            <strong>{{ $comment->content }}</strong>

        </li>
        <hr>
    @endforeach


    <h4>Add Comments</h4>

    <form method="POST" action="/teams/{{ $team->id }}/comment">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="content">Your Comment</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


@endsection