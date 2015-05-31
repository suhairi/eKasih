@extends('app');


@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit User</div>
				<div class="panel-body">

				@include('errors.notifications')

                {!! Form::model($user, ['method' => 'PATCH', 'action' => ['CManagerController@update', $user->id], 'class' => 'form-horizontal']) !!}

                    @include('forms.users._form', ['button' => '   Update User  '])

                {!! Form::close() !!}

                @include('forms.users._listing')

                </div>
            </div>
        </div>
    </div>
</div>


@stop