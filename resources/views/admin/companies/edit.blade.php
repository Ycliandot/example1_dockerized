@extends('layouts.admin')

@section('content')
    <h1>Edit company</h1>
    <div class="row">
        <form action="{{ route('admin.company.update', $company->id) }}" method="post">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="email" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $company->name }}">
                @error('name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.company.index') }}" class="btn btn-primary">Back</a>
            </div>
        </form>
    </div
@endsection
