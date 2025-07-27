@extends('layouts.admin')

@section('content')
    <h1>Companies</h1>
    <div class="mb-2">
        <a href="{{ route('admin.company.create') }}" class="btn btn-primary">Add company</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name}}</td>
                <td><a href="{{ route('admin.company.edit', $company->id) }}" class="btn btn-secondary">Edit</a></td>
                <td>
                    <form action="{{ route('admin.company.destroy', [$company->id, 'page=' . $companies->currentPage()]) }}" method="post">
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
        {{ $companies->withQueryString()->links() }}
    </div>
@endsection
