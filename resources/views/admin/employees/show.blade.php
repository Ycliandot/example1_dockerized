@extends('layouts.admin')

@section('content')
    <h1>Show employee</h1>

    @if(Storage::disk('public')->exists($employee->photo))
        <div class="container">
            <div class="row w-50 h-50 mb-4">
                <img src="{{ asset('storage/' . $employee->photo) }}" alt="photo">
            </div>
        </div>
    @else
        <div class="row">No photo</div>
    @endif

    <table class="table">
        <tr>
            <td>Email</td>
            <td>{{ $employee->email }}</td>
        </tr>
        <tr>
            <td>First name</td>
            <td>{{ $employee->first_name }}</td>
        </tr>
        <tr>
            <td>Last name</td>
            <td>{{ $employee->last_name }}</td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>{{ $employee->photo }}</td>
        </tr>
    </table>
    <a class="btn btn-dark" href="{{ $prevUrl }}">Back</a>
@endsection
