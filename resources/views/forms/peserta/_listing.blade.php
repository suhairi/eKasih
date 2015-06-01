@if(count($peserta) > 0)
    <div class="col-md-12">
        <table class="table table-striped table-bordered">
            <tr class="success">
                <th colspan="2">Maklumat Peserta</th>
            </tr>
            <tr>
                <td colspan="2"><img src="{{ asset('uploads/peserta/' . $peserta->photo) }}"></td>
            </tr>
            <tr>
                <td width="175">Nama </td>
                <td>{{ $peserta->nama }}</td>
            </tr>

            <tr>
                <td>No Kad Pengenalan </td>
                <td>{{ $peserta->noKP }}</td>
            </tr>

            <tr>
                <td>Alamat </td>
                <td>{{ $peserta->alamat }}</td>
            </tr>

            <tr>
                <td>Jantina </td>
                <td>{{ $peserta->jantina }}</td>
            </tr>

            <tr>
                <td>No Telefon </td>
                <td>{{ $peserta->noTel }}</td>
            </tr>

            <tr>
                <td>Agama </td>
                <td>{{ $peserta->agama }}</td>
            </tr>

            <tr>
                <td>Bangsa </td>
                <td>{{ $peserta->bangsa }}</td>
            </tr>

            <tr>
                <td>Pekerjaan </td>
                <td>{{ $peserta->pekerjaan }}</td>
            </tr>

            <tr>
                <td>Pendidikan </td>
                <td>{{ $peserta->pendidikan }}</td>
            </tr>

            <tr>
                <td>Bentuk Bantuan </td>
                <td>Program : {{ $peserta->bantuan->program }}</td>
            </tr>


            <tr>
                <td colspan="2" align="right">
                    <span class="glyphicon glyphicon-edit"></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-trash"></span>
                </td>
            </tr>
        </table>
    </div>
@endif