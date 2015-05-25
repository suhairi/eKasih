@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open(['class' => 'form-horizontal', 'role' => 'form']) !!}
                    
                            <div class="form-group">
                                {!! Form::label('email', 'Email Address : ', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
                                </div>
                            </div>
                    
                            <div class="form-group">
                                {!! Form::label('password', 'Password : ', ['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                </div>
                            </div>
                    
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
                                </div>
                            </div>
                    
                        {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
