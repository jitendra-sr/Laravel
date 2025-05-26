<div>
    <h3>Hi Fellas</h3>
    <form action="login" method="post">
        @csrf
        <div>
            <label for="user">Username:</label>
            <input type="text" id="user" name="user" placeholder="Enter your username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Login</button>
    </form>
</div>
