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


@endsection