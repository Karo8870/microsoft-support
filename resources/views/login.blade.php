@extends('layouts.layout')

@section('content')
    <h2>User Login</h2>

    <form action="{{ route('login') }}" method="post">
        @csrf

        <!-- Username or Email -->
        <label for="username_email">Username/Email:</label>
        <input type="text" id="username_email" name="username_email" required>
        <br>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <button type="submit">Login</button>
    </form>
@endsection
