<h3>
    <!-- {{ URL::current() }} Works same -->
    {{ url()->current() }}
    <br>
    {{ url()->full() }} <!-- full url with query string -->
    <br>
    {{ url()->previous() }} <!-- previous url with query string -->
    <br>
</h3>

<h3>
    <!-- <a href="/">Link to welcome page</a>  -->
    <a href="{{ url()->to('/url') }}">Link to same page</a>
    <br>
    
    <!-- <a href="/url/jitu">Url with child path</a> -->
    <a href="{{ url()->to('/url', ['jitu']) }}">Url with child path</a>
    <!-- default child path is jitu but we can change it in url bar -->
</h3>

<h3>
    <!-- <a href="/home/profile/user">Link to same page</a> -->
    <a href="{{ route('hm') }}">Link to same page</a>
    <br>
    
</h3>