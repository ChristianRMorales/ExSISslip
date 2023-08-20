@extends('components.signlayout') <!-- You might need to create this layout -->
@section('content')
<br>
<div class="login-greetings">
        <h2>Welcome to the USJR SIS Excuse Slip Manager</h2>
        <p>We're glad you're here! The USJR SIS Excuse Slip Manager is your go-to platform for managing and submitting excuse slips with ease.</p>
        <p>Whether you're a student, faculty member, or administrator, our system is designed to simplify the process of handling excuse slips, making the entire experience more efficient and convenient.</p>
        <p>Log in to your account to get started, and enjoy the benefits of streamlined excuse slip management at the University of San Jose - Recoletos.</p>
    </div>
<div class="login-container">

<form method="POST" action="{{ route('login') }}">
    @csrf
    <label for="username">Username</label><br>
    <input type="text" name="username" required><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" required><br>
    <br>
    <button type="submit">Login</button>
    <a href="/register" class="signup-link">Sign Up here</a>

</form>
@endsection
</div>

<style>
.login-greetings {
    width: 55%; /* Adjust the width as needed */
    padding: 30px; /* Add padding for spacing */
    float: left; /* Align to the left side */
    font-size: large;
    font-weight: 200;
    color: teal;
    font-family: "Roboto", sans-serif;
}

.container {
    display: flex;
    justify-content: space-between;
}

.login-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    /* padding: 40px; */
    width: 45%;
    background-color: rgba(13, 62, 11, 9.2); /* Adjust the alpha value (0.8) as needed */
    font-size: larger;
    font-family: "Roboto", sans-serif;
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
    color: rgba(254,192,57);
}

.login-container button[type="submit"] {
    height: 20px;
    padding: 0px 5px;
    width: 30%;
    cursor: pointer;
    border: 2px solid #a2a194;
    color: #000;
    float: center;
    background-color: green;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.login-container button[type="submit"]:hover {
    background-color: greenyellow;
}
.signup-link {
    text-decoration: none;
    color: yellowgreen;
    font-weight: bold;
    font-size: small;
    transition: color 0.3s ease;
}

.signup-link:hover {
    color: #0056b3;
    text-decoration: underline;
}

</style>