<div class="form-group">
    {!! Form::label('noKP', 'No KP * ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('noKP', \Session::get('noKP'), ['class' => 'form-control', 'readonly' => 'true', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('program', 'Program Bantuan * ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('program', null, ['placeholder' => 'Contoh : Amanah Saham Wawasan', 'class' => 'form-control', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('nilai', 'Nilai Bantuan * ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nilai', null, ['class' => 'form-control', 'placeholder' => 'RM ', 'onkeyup' => 'convertToUppercase(this)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('tahun', 'Tahun Bantuan * ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::selectYear('tahun', 2010, date('Y'), date('Y'), ['class' => 'form-control']) !!}
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