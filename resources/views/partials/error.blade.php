

@if($errors->has($key))
        @foreach($errors->get($key) as $error)
                <div class="alert alert-dismissible alert-danger mt-3">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ $error }}
                    </div>
        @endforeach
@endif