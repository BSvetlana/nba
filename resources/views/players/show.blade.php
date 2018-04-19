@extends('layouts.master')



@section('content')

    <div class="col-6 col-lg-4">

        <h4><i>First Name: </i>{{ $player->first_name }}</h4>
        <h4><i>Last Name: </i>{{ $player->last_name }} </h4>
        <h5><i>Email: </i>{{ $player->email }}</h5>
        <h5><i>Club: </i><a style="color: navy" href="{{route('single-team',['id'=>$player->team->id])}}">{{$player->team->name}}</a></h5>


    </div><!--/span-->


@endsection