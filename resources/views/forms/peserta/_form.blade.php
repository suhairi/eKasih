<div class="form-group">
    {!! Form::label('photo', 'Foto Peserta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('photo', ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('noKP', 'No KP * ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('noKP', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 880515025513','onkeyup' => 'convertToUppercase(this)']) !!}
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
    {!! Form::label('pekerjaan', 'Pekerjaan *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pekerjaan', null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('noTel', 'No Telefon ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('noTel', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 0123456789', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('jantina', 'Jantina *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('jantina', ['' => 'Jantina', 'LELAKI' => 'Lelaki', 'PEREMPUAN' => 'Perempuan'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('bangsa', 'Bangsa *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('bangsa', ['' => 'Bangsa', 'MELAYU' => 'Melayu', 'CINA' => 'Cina', 'INDIA' => 'India'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('agama', 'Agama *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('agama', ['' => 'Agama', 'ISLAM' => 'Islam', 'BUDDHA' => 'Buddha', 'HINDU' => 'Hindu'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('perkahwinan', 'Status Perkahwinan *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('perkahwinan', ['' => 'Status Perkahwinan', 'BUJANG' => 'Bujang', 'BERKAHWIN' => 'Berkahwin', 'DUDA' => 'Duda', 'JANDA' => 'Janda'], null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('pendidikan', 'Tahap Pendidikan *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('pendidikan', ['' =>'Tahap Pendidikan', 'TIADA' => 'Tiada', 'SIJIL' => 'Sijil', 'DIPLOMA' => 'Diploma', 'IJAZAH' => 'Ijazah', 'SARJANA' => 'Sarjana', 'PHD' => 'PhD'], null, ['class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
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