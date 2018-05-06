

<div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar" style="margin-top: 100px">
    <div class="list-group">
        @foreach($teams as $team)
            <a href="{{ route('team-news', ['team' => $team->name]) }}"><h3>{{ $team->name }}</h3></a>
        @endforeach
    </div>
</div>