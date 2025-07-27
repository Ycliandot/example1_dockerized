@extends('layouts.admin')

@section('content')
    <h1>Create company</h1>
    <div class="row">
        <form action="{{ route('admin.company.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('admin.company.index') }}" class="btn btn-primary">Back</a>
            </div>
        </form>
    </div
@endsection
