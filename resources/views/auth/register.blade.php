<form method="POST" action="{{ route('registerPost') }}">
    @csrf
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="name">Name:</label><br>
    <input type="name" id="name" name="name"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <button type="submit">Login</button>
</form>
