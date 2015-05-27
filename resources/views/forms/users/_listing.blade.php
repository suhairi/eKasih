<div class="col-md-12">
    <table class="table table-striped table-bordered">
    <tr class="success">
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>User Level</th>
        <th>Options</th>
    </tr>

    @if(count($users) > 0)
        @foreach($users as $no => $user)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ strtoupper($user->name) }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->name }}</td>
                <td align="center">
                    <a href="{{ url('/cmanager/user/' . $user->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ url('/cmanager/user/' . $user->id . '/delete') }}"><span class="glyphicon glyphicon-trash"></span></a>
                </td>

            </tr>
        @endforeach
    @endif

    <tr>
        <td colspan="5" align="center"><?php echo $users->render(); ?></td>
    </tr>

    </table>
</div>