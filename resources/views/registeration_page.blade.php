@extends('masterLayout')

@section('title')

Registeraion in progess...
@endsection

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Registration Page</h2>
    <form action="/register" method="POST" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="col-md-4">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name">
            </div>
            <div class="col-md-4">
                <label for="surname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="contact" class="form-label">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="col-md-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>
            <div class="col-md-3">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>
            <div class="col-md-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="school" class="form-label">School</label>
                <input type="text" class="form-control" id="school" name="school" required>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="profile_picture" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" id="profile_picture" name="profile_picture" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>
@endsection
