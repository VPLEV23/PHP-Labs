@extends('users.layout')

@section('content')
    <h2 class="main-title">Show User</h2>
    <a href="{{ route('users.index') }}" class="btn-cr">Back</a>
    <br /><br />
    <div class="inline">
        <strong>Name:</strong>
        <h3>{{ $user->name }}</h3>
    </div>
    <div class="inline">
        <strong>Email:</strong>
        <h3>{{ $user->email }}</h3>
    </div>

@endsection