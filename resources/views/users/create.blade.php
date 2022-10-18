@extends('users.layout')

@section('content')
<div class="container">
    <h2 class="main-title">Add New User</h2>
    <a href="{{ route('users.index') }}" class="btn-cr">Back</a>
    <br /><br />

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form__wrap">
            <div class="form-row">
                <strong>Name:</strong>
                <input type="text" name="name" p />
                @error('name')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
        <div class="form-row">
            <strong>Email:</strong>
            <input type="text" name="email" />
            @error('email')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-row">
            <strong>Password:</strong>
            <input type="text" name="password" />
            @error('password')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-row">
         <button type="submit" class="sbm-btn">Create</button>
        </div>
        </div>
    </form>
    </div>

@endsection