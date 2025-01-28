@extends('masterLayout')

@section('title')

Login is in progess..

@endsection

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Login Page</h2>
    <form action="/login" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
@endsection
