<x-layout>

<div class ="login-container">
    <h1>Login</h1>
<form class= "login-form" action = "/login" method="post">
    @csrf

    <label for="email">Email</label>
    <input
        type="email"
        id="email"
        name="email"
        placeholder = "Email"
        required>

    <label for="password">Password</label>
    <input
        type="password"
        id="password"
        name="password"
        placeholder = "Password"
        required>

    <button type="submit">
        Login
    </button>

    <a href = "http://127.0.0.1:8000/register" >Don't have an account?</a>
</form>
</div>

</x-layout>