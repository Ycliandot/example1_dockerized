@extends('layouts.admin')

@section('content')
    <h1>Create employee</h1>
    <div class="row">
        <form action="{{ route('admin.employees.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="first_name" class="form-label">First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="{{ old('first_name') }}">
                @error('first_name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="{{ old('last_name') }}">
                @error('last_name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="company_id" class="form-label">Company</label>
                <select class="form-select" name="company_id" id="company_id">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo">
                @error('photo')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('admin.employees.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div
@endsection
