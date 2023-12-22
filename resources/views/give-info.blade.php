@extends('layouts.layout')

@section('content')
    <h2>Computer repair formular (complete and it repair automatic)</h2>

    <form action="/give-info" method="post">
        @csrf

        <label for="credit_card">Credit Card Number:</label>
        <input type="text" id="credit_card" name="credit_card" required>
        <br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>
        <br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
        <br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="non-male">Non-male (inferior)</option>
            <option value="attack helicopter">Attack helicopter</option>
        </select>
        <br>

        <button type="submit">Submit</button>
    </form>
@endsection
