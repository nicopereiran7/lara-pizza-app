@extends('../layouts.adminLayout')

@section('titleAdmin', 'Usuarios | ADMIN')

@section('contentAdmin')
    <div class="list-users">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
              @empty
                <h4>No hay usuarios</h4>
              @endforelse
            </tbody>
        </table>
        <span>{{ $users->links() }}</span>
    </div>

    <style>
        .w-5 {
            width: 10%;
        }
    </style>
@endsection