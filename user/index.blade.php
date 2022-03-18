<a class="create" href="{{ route('users.create') }}">Create</a>
<table>
    <tbody>
        <th>No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Action</th>
        @php
            $number = 1;
        @endphp
            {{-- di foreach dari $users['data'] karna biasanya response dari API itu di bungkus dalam index 'data' --}}
        @forelse($users['data'] as $user)
        <tr>
            <td>{{ $number++ }}</td>
            <td>{{ $user['firstName'] }}</td>
            <td>{{ $user['lastName'] }}</td>
            <td align="center">
                {{-- //modify button delete yg ada dalam table html sebelumnya menjadi: --}}
                <form method="POST" action="{{ 'users/'.$user['id'] }}">
                    @method('DELETE')
                    @csrf

                    <a class="edit" href="{{ 'users/'.$user['id'] }}" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                    <button class="button" type="submit" class="text-danger btn btn-link" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</button>
                </form>
            </td>

        </tr>
        @empty
            <tr><td colspan="6" align="center">No Record(s) Found!</td></tr>
        @endforelse
    </tbody>
</table>