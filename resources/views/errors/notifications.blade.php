@if(Session::has('success'))
  <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif


@if(Session::has('fail'))
  <div class="alert alert-warning">{{ Session::get('fail') }}</div>
@endif


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Perhatian!</strong> There are errors from your inputs.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif