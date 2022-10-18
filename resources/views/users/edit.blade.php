@extends('users.layout')

@section('content')
    <div class="container">
    <h2 class="main-title">Edit User</h2>
    <a href="{{ route('users.index') }}" class="btn-cr">Back</a>
    <br /><br />

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form__wrap">

        <div class="form-row">
            <strong> Name:</strong>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
        </div>
        <div class="form-row">
            <input type="text" name="email" value="{{ $user->email }}" placeholder="Email" />
            <strong>Email:</strong>
        </div>
        <div class="form-row">
            <input type="password" name="password" value="{{ $user->password }}" placeholder="Password" />
            <strong>Password:</strong>
        </div>

        <button type="submit" class="sbm-btn">Update</button>
        </div>
    </form>
    </div>
@endsection