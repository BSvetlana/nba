
@foreach($teams as $team)
    <div style="padding-top: 100px; " class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
        <div class="list-group" >
            <a href="{{ route('single-news', ['team' => $team->name]) }}" class="list-group-item"><h3 style="color: deepskyblue">{{ $team->name }}</h3></a>
        </div>
    </div><!--/span-->
@endforeach