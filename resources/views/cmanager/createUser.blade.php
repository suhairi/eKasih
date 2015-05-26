@extends('app');


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create User</div>
				<div class="panel-body">

                <h1>Create User...</h1>

                <hr />

                {!! Form::open(['files' => false, 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Name ', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email ', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password ', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('name', ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Password Confirmation ', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    {{--{{ dd($selectRoles) }}--}}

                    <div class="form-group">
                        {!! Form::label('role', 'User Level ', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('role', $selectRoles, 0, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('   Register   ', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

                {!! Form::close() !!}



                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                    <tr class="active">
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Level</th>
                        <th>Description</th>
                    </tr>

                    @if(count($users) > 0)
                        @foreach($users as $no => $user)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>{{ $user->role->description }}</td>

                            </tr>
                        @endforeach
                    @endif

                    </table>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>






@stop