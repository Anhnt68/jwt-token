<form method="POST" action="{{ route('loginPost') }}">
    @csrf
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <button type="submit">Login</button>
</form>
