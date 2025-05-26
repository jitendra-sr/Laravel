<div>
    <h3>User Profile</h3>
    @if (session('user'))
        <h2>Welcome, {{ session('user') }}!</h2>
        <a href="/logout">Logout</a>
    @else
        <h2>No user found.</h2>
        <a href="/login">Login</a>
    @endif

    {{ session('msg') }}
    <!-- Permanent session persist pages refresh, route change till it is not deleted but flash session appears only for once and if you refresh or change the route it will be deleted. -->
    {{-- session()->reflash() --}}
    <!-- To extend the all flash sessions for one time -->
     {{-- session()->keep(['var1', 'var2']) --}}
    <!-- To keep (or extend) the specified session variables and delete all other flash session variables. -->

    <!-- flash session is used to store data for the next request only.It is useful for passing messages or data that should only be available for a short period of time.

    Eg: you might use flash session to store a success message after a user submits a form.
    This message will be available for the next request, but will be deleted after that. -->
    
</div>
