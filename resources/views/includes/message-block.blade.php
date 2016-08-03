@if(count($errors) > 0)
        <div class="col-md-6 error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
@endif

@if(Session::has('message'))
        <div class="col-md-6 col-md-offset-4 success">
            *{{Session::get('message')}}
        </div>
@endif