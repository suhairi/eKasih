@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Daftar Peserta</div>
				<div class="panel-body">

				@include('errors.notifications')

                {!! Form::open(['action' => 'User\BantuanController@store', 'class' => 'form-horizontal']) !!}
                    @include('forms.bantuan._form', ['button' => '   Daftar Bantuan   '])
                {!! Form::close() !!}

                {{--@include('forms.peserta._listing')--}}

                </div>
            </div>
        </div>
    </div>
</div>

@stop