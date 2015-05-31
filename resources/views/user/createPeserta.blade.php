@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Daftar Peserta</div>
				<div class="panel-body">

				@include('errors.notifications')

                {!! Form::open(['files' => 'true', 'action' => 'UserController@store', 'class' => 'form-horizontal']) !!}
                    @include('forms.peserta._form', ['button' => '   Daftar Peserta   '])
                {!! Form::close() !!}

                {{--@include('forms.peserta._listing')--}}

                </div>
            </div>
        </div>
    </div>
</div>

@stop