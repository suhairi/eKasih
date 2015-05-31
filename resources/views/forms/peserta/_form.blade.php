<div class="form-group">
    {!! Form::label('photo', 'Foto Peserta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('photo', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('noKP', 'No KP * ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('noKP', null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nama', 'Nama *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama', null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('alamat', 'Alamat *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('alamat', null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)', 'rows' => 4]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('noTel', 'No Telefon ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('noTel', null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('bangsa', 'Bangsa *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bangsa', null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('agama', 'Agama *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('agama', null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('perkahwinan', 'Status Perkahwinan *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('perkahwinan', null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('pendidikan', 'Tahap Pendidikan *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pendidikan', null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>



<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit($button, ['class' => 'btn btn-primary']) !!}
    </div>
</div>

<script language="javascript">

function convertToUppercase(el) {
  if(!el || !el.value) return;
  el.value = el.value.toUpperCase();
}


</script>