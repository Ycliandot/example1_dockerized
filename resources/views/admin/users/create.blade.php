@extends('layouts.admin')

@section('content')
    <h1>Edit user</h1>
    <div class="row">
        <form action="{{ route('admin.user.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                @error('password')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role_id" class="form-label">Select role</label>
                <select class="form-select" name="role_id" id="role_id">
                    <option value="">-----</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role_id')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Back</a>
            </div>
        </form>
    </div
@endsection
