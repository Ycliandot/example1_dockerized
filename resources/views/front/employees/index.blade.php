@extends('layouts.front')

@section('content')
    <h3>Employees</h3>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Company</th>
        </tr>
        </thead>
        <tbody>

        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->first_name}}</td>
                <td>{{ $employee->last_name}}</td>
                <td>{{ $employee->company->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $employees->withQueryString()->links() }}
    </div>
@endsection
