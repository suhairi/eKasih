@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">

				<h1>Change Password</h1>

				<hr />

				{!! Form::open(['files' => false, 'class' => 'form-horizontal']) !!}

				    <div class="form-group">
                        {!! Form::label('username', 'Username', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('username', Auth::user()->name, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('email', Auth::user()->email, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('current', 'Current Password', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('current', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'New Password', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Password Confirmation', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('   Change Password   ', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>



				{!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>



@stop