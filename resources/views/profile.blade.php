@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-body">
            <div class="h1 text-center mb-3"> My Profile</div>
            <a href="#" class="btn btn-secondary">{{auth()->user()->role}}</a>
            <p class="card-text mt-2"><strong> Username: {{auth()->user()->name}}</strong></p>
            <p class="card-text mt-2"><strong> Email: {{auth()->user()->email}}</strong></p>
            <p class="card-text mt-2"><strong> Phone Number: {{auth()->user()->phonenumber}}</strong></p>
            <p class="card-text mt-2"><strong> Address: {{auth()->user()->address}}</strong></p>
            <div class="d-grid gap-2 d-md-block mt-3">
                <a class="btn btn-outline-primary" href="/profile/edit-profile">Update Profile</a>
                <a class="btn btn-outline-primary" href="/profile/edit-pw">Edit Password</a>
            </div>
        </div>
    </div>
</div>
@endsection
