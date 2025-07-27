@extends('layouts.admin')

@section('content')
    <h1>Edit employee</h1>
    <div class="row">
        <form action="{{ route('admin.employees.update', $employee->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            @if(Storage::disk('public')->exists($employee->photo))
                <div class="container">
                    <div class="row w-25 h-25 mb-4">
                        <img src="{{ asset('storage/' . $employee->photo) }}" alt="photo">
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="checkbox" class="btn-check" id="delete_photo" name="delete_photo" autocomplete="off">
                        <label class="btn btn-outline-primary" for="delete_photo">Delete photo</label>
                    </div>
                </div>
            @else
                <div class="row">No photo</div>
            @endif
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $employee->email }}">
                @error('email')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="first_name" class="form-label">First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="{{ $employee->first_name }}">
                @error('first_name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="{{ $employee->last_name }}">
                @error('last_name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="company_id" class="form-label">Company</label>
                <select class="form-select" name="company_id" id="company_id">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}" {{ $company->id === $employee->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
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
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
{{--                <a href="{{ $prevUrl }}" class="btn btn-primary">Back</a>--}}
                <a href="{{ route('admin.employees.index') }}" class="btn btn-primary">Back</a>
            </div>
        </form>
    </div
@endsection
