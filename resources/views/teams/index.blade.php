@extends('layouts.master')

@section('content')
    @foreach($teams as $team)
<div class="row" >
    <div class="col-6 col-lg-4">

        <ul style="list-style: none">

                <li>
                    <a style="color: navy" href="{{route('single-team',['id'=>$team->id])}}" style=""><h4>{{ $team->name }}</h4></a>
                    <p>{{ $team->email }}</p>
                </li>

        </ul>


    </div><!--/span-->

</div><!--/row-->
@endforeach
@endsection
