<x-layout>

<div class ="register-container">
    <h1>Register</h1>
<form class= "register-form" action = "/register" method="post">
    @csrf
    <label for="name">Name</label>
    <input
        type="name"
        id="name"
        name="name"
        placeholder = "Name"
        required>

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
        Register
    </button>
</form>
</div>

</x-layout>