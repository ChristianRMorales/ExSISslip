@extends('components.signlayout') <!-- You might need to create this layout -->
@section('title', 'ExSISslip Register')
@section('content')


<div class="register-container">
    <h2>Create an Account</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" required>
        <label for="username">Username</label>
        <input type="text" name="user" required>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" required>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
</div>
@endsection


<style>
.register-container {
    width: 50%;
    margin: auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-family: "Roboto", sans-serif;
    color: teal;
}

.register-container h2 {
    margin-bottom: 20px;
}

.register-container form {
    text-align: left;
}

.register-container label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

.register-container input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.register-container button[type="submit"] {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.register-container button[type="submit"]:hover {
    background-color: #0056b3;
}

.register-container p {
    margin-top: 20px;
}
</style>


