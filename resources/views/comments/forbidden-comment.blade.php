@extends('layouts.master')

@section('content')

    <h3>Following forbidden words are used in comment:</h3>

    <ul style="list-style: none">
        @foreach($forbidden_words as $word)
            <li style="color: red">{{ $word }}</li>
        @endforeach
    </ul>

@endsection