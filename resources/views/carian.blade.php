@extends('app')


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Carian Peserta</div>
				<div class="panel-body">

                @include('errors.notifications')

                {!! Form::open(['action' => 'UserController@resultCarian', 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('noKP', 'No Kad Pengenalan : ', ['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-3">
                        {!! Form::text('noKP', null, ['class' => 'form-control', 'placeholder' => 'No KP', 'id' => 'carian']) !!}
                        </div>
                    </div>

                {!! Form::close() !!}

                @include('forms.peserta._listing')

                </div>
            </div>
        </div>
    </div>
</div>

@stop