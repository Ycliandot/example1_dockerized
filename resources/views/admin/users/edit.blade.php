@extends('layouts.admin')

@section('content')
    <h1>Edit user</h1>
    <div class="row">
        <form action="{{ route('admin.user.update', $user->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $user->name }}">
                @error('name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}">
                @error('email')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role_id" class="form-label">Select role</label>
                <select class="form-select" name="role_id" id="role_id">
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $role->id === $user->roles->first()->id ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role_id')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Back</a>
            </div>
        </form>
    </div
@endsection
