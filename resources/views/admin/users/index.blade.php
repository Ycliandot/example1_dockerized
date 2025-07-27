@extends('layouts.admin')

@section('content')
    <h1>Users</h1>
    <div class="mb-2">
        <a href="{{ route('admin.user.create') }}" class="btn btn-primary">Add User</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->getRoleName()}}</td>
                <td><a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-secondary">Edit</a></td>
                <td>
                    <form action="{{ route('admin.user.destroy', [$user->id, 'page=' . $users->currentPage()]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $users->withQueryString()->links() }}
    </div>
@endsection
