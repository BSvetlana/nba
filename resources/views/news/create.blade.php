@extends('layouts.master')

@section('content')

    <h3>Create News</h3>
    <hr>

    <form method="POST" action="{{ route('store-news') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
            @include('partials.error',['key'=>'title'])
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
            @include('partials.error',['key'=>'content'])
        </div>
        <div class="form-group">
            @foreach($teams as $team)
                <div class="checkbox">
                    <label><input type="checkbox" value="{{ $team->id }}" name="'teams[]'">{{ $team->name }}</label>
                </div>
            @endforeach
            @include('partials.error',['key'=>'teams'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>

@endsection